import React, {PropTypes} from 'react';
import {Row, Col, Panel, Tabs, Tab} from 'react-bootstrap';
import StarRatingComponent from 'react-star-rating-component';
import _ from 'lodash';
import Image from '../../common/Image';
import ProductRibbonDiscount from '../Product/ProductRibbonDiscount';
import ProductPrice from './ProductPrice';
import ProductTab from './ProductTab';
import ProductOption from './ProductOption';
import ProductOptionValue from './ProductOptionValue';
import ProductMedia from './ProductMedia';

class ProductDetailOverview extends React.Component {

    constructor(props, context) {
        super(props, context);
        this.onAddToOrder = this.onAddToOrder.bind(this);
        this.handleLoadReviews = this.handleLoadReviews.bind(this);
        this.onChangeOption = this.onChangeOption.bind(this);
        this.getOptionsMatrix = this.getOptionsMatrix.bind(this);

        this.state = {
            product: Object.assign({}, props.product),
            rating: null,
            disableElement: [],
            optionType: this.getOptionsType(),
            optionMatrix: this.getOptionsMatrix(),
            activeElement: [],
            currentClickType: [],
            currentClick: {},

        };
    }

    componentWillReceiveProps(nextProps) {
        if (this.props.product.id != nextProps.product.id) {
            this.setState({product: Object.assign({}, nextProps.product)});
        }
    }

    onAddToOrder() {
        if (!_.isUndefined(this.context.onAddToOrder)) {

            let product = this.state.product;

            // Add option is picked
            product.chooseOption = this.state.currentClick;

            this.context.onAddToOrder(product);
        }
    }

    handleLoadReviews() {
        if (!_.isUndefined(this.context.handleLoadProductReviews)) {
            return this.context.handleLoadProductReviews(this.props.product.id)
        }
    }

    checkDisableAddToOrder() {
        return !this.checkChooseComplete(this.state.currentClick);
    }

    checkDisable(activeElement, typeId, optionId) {
        if (_.isEmpty(activeElement)) return false;
        let currentType = this.state.currentClickType;
        if (currentType.indexOf(typeId) > -1) return false;
        for (let i = 0; i < activeElement.length; i++) {
            let $a = {[typeId]: _.toString(optionId)};
            let el = activeElement[i];
            if (_.isMatch(el, $a)) {
                return false;
            }
        }
        return true;
    }

    getActive(matrix, typeId, optionId) {
        let temp = [];
        _.forEach(matrix, function (item) {
            let $a = {[typeId]: _.toString(optionId)};
            if (_.isMatch(item, $a)) {
                temp.push(_.omit(item, typeId));
            }
        });
        return temp;
    }

    getOptionsMatrix() {
        let optionMatrix = this.props.product.option_matrix;
        let opm = [];
        _.forEach(optionMatrix, function (o) {
            if (!_.isEmpty(o.option_values)) {
                opm.push(o.option_values);
            }
        });
        return opm;
    }

    getOptionsType() {
        let op = this.props.product.options;
        let opm = [];
        _.forEach(op, function (o) {
            if (!_.isEmpty(o.option_id)) {
                opm.push(parseInt(o.option_id));
            }
        });
        return opm;
    }

    checkChangeChoose(activeElement, currentClick) {
        for (let i = 0; i < activeElement.length; i++) {
            let el = activeElement[i];
            if (_.isMatch(currentClick, el)) {
                return true;
            }
        }
        return false;
    }

    checkChooseComplete(currentChoose) {
        let optionType = this.state.optionType;
        for (let i = 0; i < optionType.length; i++) {
            let ot = optionType[i];
            if (!_.has(currentChoose, ot)) {
                return false;
            }
        }
        return true;
    }

    onChangeInfoProduct() {
        if (!_.isUndefined(this.context.handleUpdateProduct) &&
            this.props.product.option_matrix && this.checkChooseComplete(this.state.currentClick)) {
            let product = this.props.product;
            let option_matrix = this.props.product.option_matrix;
            let activeOptions = this.state.currentClick;
            let option = ((option_matrix) => {
                for (let i = 0; i < option_matrix.length; i++) {
                    let opm = option_matrix[i];
                    if (_.isEqual(activeOptions, opm.option_values)) {
                        return opm;
                    }
                }
                return null;
            })(option_matrix);
            if (option) {
                // Change Info Of Product: sku, price and active options
                product.sku_display = option.sku;
                product.price = product.final_price = option.price;
                product.org_price = option.org_price;
                this.setState({
                    product: product
                });
            }
        }
    }

    onChangeOption(typeId, optionId) {
        let matrix = this.state.optionMatrix || [];
        let active = this.getActive(matrix, typeId, optionId);
        this.setState(previousState => ({
            activeElement: active,
            currentClickType: typeId,
            currentClick: ((previousCurrentClick) => {
                if (!this.checkChangeChoose(active, previousCurrentClick)) {
                    return {[typeId]: optionId};
                }
                return _.assign(previousCurrentClick, {[typeId]: optionId});
            })(previousState.currentClick),
        }), () => {
            this.onChangeInfoProduct()
        });
    }

    getClassActive(optionId, wpClass = '') {
        let currentClickOptions = _.values(this.state.currentClick);
        if (currentClickOptions.indexOf(optionId) > -1) {
            wpClass = wpClass.concat('grey-mint');
        }
        return wpClass;
    }

    componentWillMount() {
        if(_.isNull(this.state.rating) &&
            !_.isUndefined(this.context.handleLoadProductReviews)) {
            App.blockUI({
                target: '.star',
                animate: true
            });
            this.context.handleLoadProductReviews(this.props.product.id).then(data => {
                let rating = parseInt(data.avg_rating_percent || 0) * 5 / 100;
                this.setState({
                    rating: (rating > 0) ? rating : null
                });
                App.unblockUI('.star');
            });
        }
    }

    render() {
        const product = this.state.product;
        let discount = (product.discount && !_.isEmpty(product.discount)) ?
            this.context.calculateDiscount(
                product.discount[0].from_time || null,
                product.discount[0].to_time || null,
                product.discount[0].action_operator || null,
                product.discount[0].action_amount || 0
            ) : null;
        let price = new Intl.NumberFormat(
            {lang},
            {
                style: 'currency',
                currency: `${iCareCurrency}`
            }
        ).format(parseFloat(product.final_price) / parseFloat(product.installment[0].month || 1));

        let installment = _.isEmpty(product.installment) ?
            '' :
            `${product.installment[0].month || 1} ${iCareLocale.months}`;

        let description = `${price}/${installment} (+${product.tax_info[0].tax_percent || product.tax}% ${iCareLocale.tax_ship})`;

        return (
            <Panel className="mt-element-ribbon product-details">
                {discount &&
                <ProductRibbonDiscount
                    className="bg-red-mint bg-font-red-mint"
                    text={discount}
                />
                }
                <Row>
                    <Col md={5}>
                        {product.medias.length > 0 ?
                            <ProductMedia medias={product.medias}/> :
                            <div className="main-img">
                                <Image src={product.image}
                                       fallbackSrc="bundles/icareweb/img/product.png"
                                       className="img-responsive"/>
                            </div>
                        }
                    </Col>
                    <Col md={7}>
                        <div className="">
                            <div className="product-details-content">
                                <h3>{product.name}</h3>
                                <p>{iCareLocale.sku}: {(product.sku_display) ? product.sku_display : product.sku}</p>
                                <div className="star">
                                    {this.state.rating &&
                                    <StarRatingComponent name="app5"
                                                         starColor="#ffb400"
                                                         emptyStarColor="#ffb400"
                                                         value={this.state.rating}
                                                         editing={false}
                                                         renderStarIcon={(index, value) => {
                                                             return <span
                                                                 className={index <= value ? 'fa fa-star' : 'fa fa-star-o'}/>;
                                                         }}
                                                         renderStarIconHalf={() => <span
                                                             className="fa fa-star-half-full"/>}
                                    />
                                    }
                                </div>
                                <ProductPrice price={parseFloat(product.final_price)}
                                              old_price={parseFloat(product.org_price)}/>

                                <p>{iCareLocale.installment}: <span className="font-green-turquoise"> {description}</span></p>
                                <div className="actions">
                                    <input
                                        disabled={this.checkDisableAddToOrder()}
                                        type="button"
                                        onClick={this.onAddToOrder}
                                        className="btn btn-lg btn-circle bg-green bg-font-green sbold"
                                        value={iCareLocale.add_to_order}
                                    />
                                </div>
                            </div>
                            {product.options &&
                                product.options.map((item, index) => {
                                    let typeId = item.option_id;
                                    return (
                                        <ProductOption key={index} name={item.title || ''}>
                                            {
                                                item.value.map((op, index) => {

                                                    return (
                                                        <ProductOptionValue
                                                            disableElement={this.checkDisable(this.state.activeElement || [], typeId, op.option_type_id)}
                                                            key={index}
                                                            name={op.value}
                                                            wpClass={this.getClassActive(op.option_type_id)}
                                                            action={() => this.onChangeOption(typeId, op.option_type_id)}
                                                        />)
                                                })
                                            }
                                        </ProductOption>
                                    );
                                })
                            }
                            <ProductTab
                                description={product.description || ''}
                                reviews={product.reviews || []}
                                handleLoadReviews={this.handleLoadReviews}
                            />

                        </div>
                    </Col>
                </Row>
            </Panel>
        );
    }
}

ProductDetailOverview.propTypes = {
    product: PropTypes.object.isRequired
};

ProductDetailOverview.contextTypes = {
    onAddToOrder: PropTypes.func,
    handleLoadProductReviews: PropTypes.func,
    calculateDiscount: PropTypes.func,
    handleUpdateProduct: PropTypes.func
};

export default ProductDetailOverview;