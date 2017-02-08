import React, {PropTypes} from 'react';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import * as callListActions from '../../actions/CallList/callListActions';

class CallListMiddlePage extends React.Component {
    constructor(props, context) {
        super(props, context);

        this.handleClickPage = this.handleClickPage.bind(this);
        this.handleLoadCustomerDetail = this.handleLoadCustomerDetail.bind(this);
        this.handleLoadSaleOrders = this.handleLoadSaleOrders.bind(this);
        this.handleLoadSalOrderDetail = this.handleLoadSalOrderDetail.bind(this);
        this.handleUpdateOrderDetail = this.handleUpdateOrderDetail.bind(this);
        this.handleUpdateCustomer = this.handleUpdateCustomer.bind(this);
        this.handleSearchCustomer = this.handleSearchCustomer.bind(this);
        this.handleSortCustomer = this.handleSortCustomer.bind(this);
        this.handleGetCompany = this.handleGetCompany.bind(this);
        this.handleSearchProduct = this.handleSearchProduct.bind(this);
        this.handleAlertDismiss = this.handleAlertDismiss.bind(this);
        this.handleAddToOrder = this.handleAddToOrder.bind(this);
        this.handleSearchProduct = this.handleSearchProduct.bind(this);
        this.handleAddToRecently = this.handleAddToRecently.bind(this);
        this.handleLoadOrderDetail = this.handleLoadOrderDetail.bind(this);
        this.handleUpdateProduct = this.handleUpdateProduct.bind(this);
        this.handleLoadProductReviews = this.handleLoadProductReviews.bind(this);
        this.handleCalculationOrder = this.handleCalculationOrder.bind(this);
        this.handlePlaceOrder = this.handlePlaceOrder.bind(this);
        this.handleConfirmOrder = this.handleConfirmOrder.bind(this);
    }

    getChildContext() {
        return {
            handleLoadSaleOrders: this.handleLoadSaleOrders,
            handleLoadSalOrderDetail: this.handleLoadSalOrderDetail,
            handleUpdateOrderDetail: this.handleUpdateOrderDetail,
            handleSortCustomer: this.handleSortCustomer,
            handleSearchProduct: this.handleSearchProduct,
            handleAddToOrder: this.handleAddToOrder,
            handleAddToRecently: this.handleAddToRecently,
            handleLoadOrderDetail: this.handleLoadOrderDetail,
            handleUpdateProduct: this.handleUpdateProduct,
            handleLoadProductReviews: this.handleLoadProductReviews,
            handleCalculationOrder: this.handleCalculationOrder,
            handleUpdateCustomer: this.handleUpdateCustomer,
            handlePlaceOrder: this.handlePlaceOrder,
            handleConfirmOrder: this.handleConfirmOrder
        };
    }

    handleLoadCustomerDetail(orgId, keyword, websiteId) {
        this.props.actions.loadCustomerDetail(
            orgId,
            keyword,
            websiteId);
    }

    handleLoadSaleOrders(customerId) {
        this.props.actions.loadSaleOrderLists(customerId);
    }

    handleLoadSalOrderDetail(orderId) {
        this.props.actions.loadSaleOrderDetail(orderId);
    }

    handleUpdateOrderDetail(order) {
        this.props.actions.updateOrderDetail(order);
    }

    handleUpdateCustomer(customer) {
        this.props.actions.updateCustomer(customer);
    }

    handleGetCompany(term) {
        return this.props.actions.searchCompanyAction(term);
    }

    handleSearchProduct(term) {
        this.props.actions.searchProductAction(term);
    }

    handleAddToOrder(product, customerId) {
        this.props.actions.addToOrder(product, customerId);
        this.handleAddToRecently(product);
    }

    handleAddToRecently(product) {
        this.props.actions.addToRecently(product);
    }

    handleLoadOrderDetail(sku, customerId) {
        this.props.actions.loadProductDetailAction(sku, customerId);
    }

    handleUpdateProduct(product) {
        this.props.actions.updateProduct(product);
    }

    handleLoadProductReviews(productId) {
        // this.props.actions.loadProductReview(productId);
        return this.props.actions.loadProductReviewById(productId);
    }

    handlePlaceOrder(data) {
        return this.props.actions.placeOrderAction(data);
    }

    handleConfirmOrder(orderId) {
        return this.props.actions.confirmOrderAction({incrementId: orderId});
    }

    handleCalculationOrder(data) {
        return this.props.actions.calculateOrderAction(data);
    }

    render() {
        return (
            <div>
                {this.props.children}
            </div>
        );
    }
}

CallListMiddlePage.propTypes = {
    actions: PropTypes.object.isRequired
};

CallListMiddlePage.childContextTypes = {
    handleLoadSaleOrders: PropTypes.func,
    handleLoadSalOrderDetail: PropTypes.func,
    handleUpdateOrderDetail: PropTypes.func,
    handleSortCustomer: PropTypes.func,
    handleSearchProduct: PropTypes.func,
    handleAddToOrder: PropTypes.func,
    handleAddToRecently: PropTypes.func,
    handleLoadOrderDetail: PropTypes.func,
    handleUpdateProduct: PropTypes.func,
    handleLoadProductReviews: PropTypes.func,
    handleCalculationOrder: PropTypes.func,
    handleUpdateCustomer: PropTypes.func,
    handlePlaceOrder: PropTypes.func,
    handleConfirmOrder: PropTypes.func
};

function mapStateToProps(state, ownProps) {
    return {};
}

function mapDispatchToProps(dispatch) {
    return {
        actions: bindActionCreators(callListActions, dispatch)
    };
}

export default connect(mapStateToProps, mapDispatchToProps)(CallListMiddlePage);
