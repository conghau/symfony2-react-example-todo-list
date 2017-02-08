import React, {PropTypes} from 'react';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import * as myOrdersAction from '../../actions/MyOrders/myOrdersAction';
import Loader from 'components/common/Loader';
import '../CallList/CallList.scss';
import Pagination from 'rc-pagination';
import 'rc-pagination/assets/index.css';
import * as globalConstant from '../../components/common/constant';
import LOCALE from 'rc-pagination/lib/locale/en_US';
import SaleOrder from 'components/MyOrders/SaleOrder';
import SaleOrdersDetails from 'components/CallList/SaleOrder/SaleOrdersDetails';

class MyOrdersPage extends React.Component {

    constructor(props, context) {
        super(props, context);

        this.getStatusClass = this.getStatusClass.bind(this);
        this.handleUpdateOrderDetail = this.handleUpdateOrderDetail.bind(this);
        this.handleLoadSaleOrderDetail = this.handleLoadSaleOrderDetail.bind(this);
        this.handleCancelOrder = this.handleCancelOrder.bind(this);
    }

    componentWillMount() {
        this.props.actions.loadSaleOrderByUser();
    }

    getChildContext() {
        return {
            getStatusClass: this.getStatusClass,
            handleUpdateOrderDetail: this.handleUpdateOrderDetail,
            handleLoadSaleOrderDetail: this.handleLoadSaleOrderDetail
        };
    }

    getStatusClass(status) {
        let className = 'badge badge-round';
        switch (status) {
            case 'holded':
            case 'canceled':
            case 'delivery_failed':
                className += ' badge-danger';
                break;
            case 'pending':
                className += ' badge-warning';
                break;
            case 'new':
            case 'payment_review':
            case 'invoiced':
            case 'processing':
            case 'confirmed':
            case 'packed':
            case 'shipped':
                className += ' badge-info';
                break;
            case 'delivered':
            case 'complete':
                className += ' badge-success';
                break;
            case 'closed':
            default:
                className += ' badge-default';
        }
        return className;
    }

    handleLoadSaleOrderDetail(orderNo) {
        this.props.actions.loadSaleOrderDetail(orderNo);
    }

    handleUpdateOrderDetail(order) {
        this.props.actions.updateSaleOrderDetail(order);
    }

    handleCancelOrder(orderNo, note) {
        this.props.actions.cancelOrder(orderNo, note);
        this.handleLoadSaleOrderDetail(orderNo);
    }

    render() {
        const orders = this.props.orders;
        const order = this.props.orderDetail;
        return (
            <div>
                {(_.isEmpty(this.props.orderDetail)) ?
                    <SaleOrder orders={orders} /> :
                    <SaleOrdersDetails
                        cancelAction={this.handleCancelOrder}
                        order={order} />
                }

                {this.props.loading &&
                <Loader text="Loading..." overlay={true}/>
                }
            </div>
        );
    }
}

MyOrdersPage.propTypes = {
    actions: PropTypes.object.isRequired,
    orders: PropTypes.object.isRequired,
    orderDetail: PropTypes.object
};

MyOrdersPage.childContextTypes = {
    getStatusClass: PropTypes.func,
    handleUpdateOrderDetail: PropTypes.func,
    handleLoadSaleOrderDetail: PropTypes.func
};

function getOrderDetailVisible(orders) {
    let orderFiltered = {};
    for (let index in orders) {
        if(orders[index].isVisible === true) {
            orderFiltered = orders[index];
            break;
        }
    }

    return orderFiltered;
}

function mapStateToProps(state, ownProps) {
    return {
        orders: state.myOrders.orders,
        orderDetail: getOrderDetailVisible(state.myOrders.orderDetails),
        loading: state.ajaxCallsInProgress > 0
    };
}

function mapDispatchToProps(dispatch) {
    return {
        actions: bindActionCreators(myOrdersAction, dispatch)
    };
}

export default connect(mapStateToProps, mapDispatchToProps)(MyOrdersPage);