import React, {PropTypes} from 'react';
import {connect} from 'react-redux';
import {Modal} from 'react-bootstrap';
import ProductSearchEmptyState from '../EmptyState/ProductSearchEmptyState';
import ProductSearch from './ProductSearch';
import ProductDetailOverview from '../ProductDetail/ProductDetailOverview';
import ProductList from './ProductList';
import ProductListItem from './ProductListItem';
import _ from 'lodash';
import moment from 'moment';

class ProductExplore extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = {
            showModal: false
        };
        this.open = this.open.bind(this);
        this.close = this.close.bind(this);
        this.prepareDataProduct = this.prepareDataProduct.bind(this);
        this.onAddToOrder = this.onAddToOrder.bind(this);
        this.onShowProductDetail = this.onShowProductDetail.bind(this);
        this.handleBackToSearch = this.handleBackToSearch.bind(this);
        this.handleButtonClick = this.handleButtonClick.bind(this);
        this.calculateDiscount = this.calculateDiscount.bind(this);
    }

    getChildContext() {
        return {
            open: this.open,
            close: this.close,
            prepareDataProduct: this.prepareDataProduct,
            onAddToOrder: this.onAddToOrder,
            onShowProductDetail: this.onShowProductDetail,
            handleButtonClick: this.handleButtonClick,
            calculateDiscount: this.calculateDiscount
        };
    }

    close() {
        this.setState({showModal: false});
    }

    open() {
        this.setState({showModal: true});
    }

    calculateDiscount(fromTime, toTime, operator, amount) {
        let discount = null;
        let now = moment.utc().format();
        fromTime = moment.utc(
            moment.unix(fromTime)
            || null
        ).format();
        toTime = moment.utc(
            moment.unix(toTime)
            || null
        ).format();

        if (moment(now).isBetween(fromTime, toTime)) {
            switch (operator) {
                case 'by_percent':
                    discount = `${parseInt(amount)}%`;
                    break;
                case 'by_fixed':
                    discount = new Intl.NumberFormat(
                        {lang},
                        {
                            style: 'currency',
                            currency: `${iCareCurrency}`
                        }
                    ).format(amount);
                    break;
            }
            discount = `-${discount}`;
        }

        return discount;
    }

    prepareDataProduct(products, action = true) {
        let self = this;
        _.forEach(products, function (product, index) {
            let buttonName = _.isEmpty(product.options) ?
                iCareLocale.add_to_order :
                iCareLocale.select_option;
            if (action === false) buttonName = null;
            let price = (() => {
                try {
                    return new Intl.NumberFormat(
                        {lang},
                        {
                            style: 'currency',
                            currency: `${iCareCurrency}`
                        }
                    ).format(parseFloat(product.final_price) / parseFloat(product.installment[0].month));
                } catch (err) {
                    return new Intl.NumberFormat(
                        {lang},
                        {
                            style: 'currency',
                            currency: `${iCareCurrency}`
                        }
                    ).format(product.final_price);
                }
            })();

            let installment = (() => {
                try {
                    return _.isEmpty(product.installment) ?
                        '' :
                        `${product.installment[0].month} ${iCareLocale.months}`;
                } catch (err) {
                    return '';
                }
            })();

            let description = (() => {
                let tax = 0;
                try {
                    let tax = _.isEmpty(product.tax_info) ? product.tax : product.tax_info[0].tax_percent;
                } catch (err) {
                    tax = product.tax;
                }
                return `${price}/${installment} (+${tax}% ${iCareLocale.tax_ship})`;
            })();

            let discount = (product.discount && !_.isEmpty(product.discount)) ?
                self.calculateDiscount(
                    product.discount[0].from_time || null,
                    product.discount[0].to_time || null,
                    product.discount[0].action_operator || null,
                    product.discount[0].action_amount || 0
                ) : null;

            let priceObject = {
                price: product.final_price,
                old_price: product.org_price
            };
            _.assign(product, {
                buttonName: buttonName,
                installmentText: description,
                discountText: discount,
                priceObject: priceObject
            });
        });
        return products;
    }

    onAddToOrder(product) {
        if (!_.isUndefined(this.context.handleAddToOrder)) {
            this.context.handleAddToOrder(product, this.props.customerId || null);
            this.close();
        }
    }

    handleButtonClick(product) {
        if (_.isEmpty(product.options)) {
            this.onAddToOrder(product);
        } else {
            this.onShowProductDetail(product);
            this.context.handleAddToRecently(product);
        }
    }

    onShowProductDetail(product, openModal = false) {
        if (!_.isUndefined(this.context.handleLoadOrderDetail)) {
            this.context.handleLoadOrderDetail(product.sku, this.props.customerId || null);
            this.context.handleAddToRecently(product);
            if (openModal) {
                this.open();
            }
        }
    }

    handleBackToSearch() {
        if (!_.isUndefined(this.context.handleUpdateProduct) &&
            this.props.productDetail
        ) {
            const product = this.props.productDetail;
            product.isVisible = false;
            this.context.handleUpdateProduct(product);
        }
    }

    render() {
        const products = this.prepareDataProduct(this.props.products, false);
        const productDetail = this.props.productDetail;
        let emptyState = {
            icon: 'fa fa-magic fa-4x font-blue-madiston',
            text: (iCareLocale['place_order.explore_product_now'] || '')
        };

        return (
            <div>
                <div className="panel panel-default">

                    <div className="panel-heading">
                        <span>{iCareLocale['place_order.product']}</span>

                        <div className="pull-right">
                            <a href="javascript:;" onClick={this.open}>
                                <i className="fa fa-search"></i>
                            </a>
                        </div>
                    </div>
                    <div className="panel-body">
                        {(products.length > 0) ? (
                            <ProductList>
                                {products.map((product, index) => {
                                    return <ProductListItem
                                        key={'productExplore-' + product.id + index}
                                        sku={(product.sku_display) ? product.sku_display : product.sku}
                                        name={product.name}
                                        image={product.image}
                                        discount={product.discountText}
                                        price={product.priceObject}
                                        installment={product.installmentText || ''}
                                        showDetail={() => this.onShowProductDetail(product, true)}
                                    />;
                                })}
                            </ProductList>
                        ) : (
                            <div>
                                <a href="javascript:;" onClick={this.open}>
                                    <ProductSearchEmptyState icon={emptyState.icon} text={emptyState.text}/>
                                </a>
                            </div>
                        )}
                    </div>
                </div>

                <Modal show={this.state.showModal || false}
                       onHide={this.close}
                       bsSize="large"
                       aria-labelledby="contained-modal-title-lg">
                    <Modal.Header closeButton>
                        <Modal.Title>
                            {(productDetail && productDetail.isVisible === true) ?
                                (
                                    <div>
                                        <a href="javascript:;"
                                           className="pull-left m-r"
                                           onClick={this.handleBackToSearch}>
                                            <i className="fa fa-angle-left"></i> {iCareLocale.back}
                                        </a>
                                        {`${productDetail.sku} - ${productDetail.name}`}
                                    </div>
                                ) :
                                (iCareLocale['place_order.product_search'] || '')
                            }
                        </Modal.Title>
                    </Modal.Header>
                    <Modal.Body className="bg-default">
                        {(productDetail && productDetail.isVisible === true) ?
                            (<ProductDetailOverview product={productDetail}/>) :
                            (<ProductSearch />)
                        }
                    </Modal.Body>
                </Modal>

            </div>
        );
    }
}

function getProductDetailByCustomerId(productList, customerId) {
    let product = productList.filter(product => product.customer_id == customerId);
    if (product.length > 0) return product[0];
    return null;
}

function mapStateToProps(state, ownProps) {
    return {
        productDetail: getProductDetailByCustomerId(
            state.callList.productDetails || [],
            ownProps.customerId || null
        )
    };
}

ProductExplore.propTypes = {
    customerId: PropTypes.string,
    products: PropTypes.array.isRequired,
    productDetail: PropTypes.object
};

ProductExplore.contextTypes = {
    handleAddToOrder: PropTypes.func,
    handleLoadOrderDetail: PropTypes.func,
    handleUpdateProduct: PropTypes.func,
    handleAddToRecently: PropTypes.func
};

ProductExplore.childContextTypes = {
    close: PropTypes.func,
    open: PropTypes.func,
    onAddToOrder: PropTypes.func,
    onShowProductDetail: PropTypes.func,
    prepareDataProduct: PropTypes.func,
    handleButtonClick: PropTypes.func,
    calculateDiscount: PropTypes.func
};

export default connect(mapStateToProps)(ProductExplore);