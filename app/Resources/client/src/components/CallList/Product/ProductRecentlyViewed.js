import React, {PropTypes} from 'react';
import {connect} from 'react-redux';
import ProductList from './ProductList';
import ProductListItem from './ProductListItem';
import ProductSearchEmptyState from '../EmptyState/ProductSearchEmptyState';
import _ from 'lodash';

class ProductRecentlyViewed extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        const products = this.context.prepareDataProduct(this.props.products);
        let emptyState = {
            icon: 'fa fa-magic fa-4x font-blue-madiston',
            text: (iCareLocale.explore_product_now) ? iCareLocale.explore_product_now : ''
        };
        return (
            <div className="portlet box">
                <div className="portlet-title font-white bg-grey-gallery">
                    <div className="caption">
                        {iCareLocale.recently_viewed}
                    </div>
                </div>

                {products.length > 0 ?
                    (<ProductList
                        wrapperClass="bg-white"
                        titleClass="font-white bg-grey-gallery"
                    >
                        {products.map(product => {
                            return <ProductListItem
                                key={product.id}
                                sku={product.sku}
                                name={product.name}
                                image={product.image}
                                discount={product.discountText}
                                installment={product.installmentText || ''}
                                price={product.priceObject}
                                buttonName={product.buttonName || ''}
                                buttonClick={() => this.context.handleButtonClick(product)}
                                showDetail={() => this.context.onShowProductDetail(product)}
                            />;
                        })}
                    </ProductList>) :
                    (<div className="portlet-body">
                        <ProductSearchEmptyState icon={emptyState.icon} text={emptyState.text}/>
                    </div>)
                }
            </div>
        );
    }
}


ProductRecentlyViewed.propTypes = {
    products: PropTypes.array
};

ProductRecentlyViewed.contextTypes = {
    prepareDataProduct: PropTypes.func,
    handleButtonClick: PropTypes.func,
    onShowProductDetail: PropTypes.func
};

function getProductRecentlyViewed(products, limit = 5) {
    return _.takeRight(_.reverse(products), limit);
}

function mapStateToProps(state, ownProps) {
    return {
        products: getProductRecentlyViewed(state.callList.productRecentlyViewed || [])
    };
}

export default connect(mapStateToProps)(ProductRecentlyViewed);