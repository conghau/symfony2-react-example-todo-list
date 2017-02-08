import React, {PropTypes} from 'react';
import {connect} from 'react-redux';
import {Row, Col, Alert} from 'react-bootstrap';
import ProductList from './ProductList';
import ProductRecentlyViewed from  './ProductRecentlyViewed';
import ProductSearchBar from './ProductSearchBar';
import ProductListItem from './ProductListItem';
import ProductListEmptyState from '../EmptyState/ProductListEmptyState';
import _ from 'lodash';

class ProductSearch extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = {
            alertVisible: false
        };
        this.onSearchProduct = this.onSearchProduct.bind(this);
        this.handleAlertDismiss = this.handleAlertDismiss.bind(this);
    }

    componentDidMount() {
        App.initSlimScroll('.scroller');
    }

    componentDidUpdate() {
        App.initSlimScroll('.scroller');
    }

    handleAlertDismiss() {
        this.setState({alertVisible: false});
    }

    onSearchProduct(term) {
        if (!_.isUndefined(this.context.handleSearchProduct)) {
            this.context.handleSearchProduct(term);
            this.setState({alertVisible: true});
        }
    }

    render() {
        const products = this.context.prepareDataProduct(this.props.products);
        return (
            <Row>
                <Col md={7}>
                    <div className="portlet light product-bar-search">
                        <ProductSearchBar
                            onSearchProduct={this.onSearchProduct}
                            onLoadCategory={this.context.handleLoadCategory}
                        />

                        {products.length > 0 ?
                            (<ProductList wrapperClass="v2">
                                {products.map((product, index) => {
                                    return <ProductListItem
                                        key={'productSearch-' + product.id + index}
                                        sku={product.sku}
                                        name={product.name}
                                        image={product.image}
                                        discount={product.discountText}
                                        price={product.priceObject}
                                        installment={product.installmentText || ''}
                                        buttonName={product.buttonName || ''}
                                        buttonClick={() => this.context.handleButtonClick(product)}
                                        showDetail={() => this.context.onShowProductDetail(product)}
                                    />;
                                })}
                            </ProductList>) :
                            (<div className="portlet-body">
                                {
                                    (() => {
                                        if (this.state.alertVisible) {
                                            return (
                                                <Alert bsStyle="info" onDismiss={this.handleAlertDismiss}>
                                                    <span dangerouslySetInnerHTML={
                                                        {__html: (iCareLocale['product.modal.search.no_result'] || '')}
                                                    }>
                                                    </span>
                                                </Alert>
                                            )
                                        }
                                    })()
                                }
                                <p>{iCareLocale.product_search_message}</p>
                                <ProductListEmptyState />
                            </div>)
                        }
                    </div>
                </Col>
                <Col md={5}>
                    <ProductRecentlyViewed />
                </Col>
            </Row>
        );
    }
}

function mapStateToProps(state, ownProps) {
    return {
        products: state.callList.productList || [],
    }
}

ProductSearch.contextTypes = {
    handleSearchProduct: PropTypes.func,
    handleButtonClick: PropTypes.func,
    prepareDataProduct: PropTypes.func,
    onShowProductDetail: PropTypes.func,
    handleLoadCategory: PropTypes.func
};

export default connect(mapStateToProps)(ProductSearch);