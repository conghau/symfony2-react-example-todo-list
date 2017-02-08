import React, {PropTypes} from 'react';
import {connect} from 'react-redux';
import SaleOrdersList from './SaleOrdersList';
import SaleOrdersListRow from './SaleOrdersListRow';
import SaleOrdersDetails from './SaleOrdersDetails';

class SaleOrders extends React.Component {

    constructor(props, context) {
        super(props, context);
    }

    getChildContext() {
        return {
            mappingStatusWithIconAndColor: this.mappingStatusWithIconAndColor,
            getStatusClass: this.getStatusClass
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

    mappingStatusWithIconAndColor() {
        return [
            {
                type: 'pending',
                color: '',
                icon: 'fa-ellipsis-h'
            },
            {
                type: 'processing',
                color: 'blue',
                icon: 'fa-ellipsis-h'
            },
            {
                type: 'confirmed',
                color: 'blue',
                icon: 'fa-ellipsis-h'
            },
            {
                type: 'packed',
                color: 'blue',
                icon: 'fa-dropbox'
            },
            {
                type: 'fullfilling',
                color: 'blue',
                icon: 'fa-dropbox'
            },
            {
                type: 'shipped',
                color: '',
                icon: 'fa-truck'
            },
            {
                type: 'delivered',
                color: '',
                icon: 'fa-check'
            },
            {
                type: 'failed',
                color: 'red',
                icon: 'fa-exclamation'
            },
            {
                type: 'canceled',
                color: 'black',
                icon: 'fa-times'
            },
            {
                type: 'cancelled',
                color: 'black',
                icon: 'fa-times'
            }
        ];
    }

    render() {
        const orders = this.props.orders;
        const order = this.props.orderDetail;
        let caption = (orders.length > 0) ?
            `${iCareLocale['sale_order']} (${orders.length})` :
            null;
        return (
            <div>
                {(order &&
                    order.isVisible === true) ?
                    (<SaleOrdersDetails order={order} />) :
                    (<SaleOrdersList caption={caption}>
                        {orders.map(order =>
                            <SaleOrdersListRow
                                key={order.increment_id}
                                order={order} />
                        )}
                    </SaleOrdersList>)
                }
            </div>
        );
    }
}

SaleOrders.propTypes = {
    orders: PropTypes.array.isRequired,
    orderDetail: PropTypes.object
};

SaleOrders.childContextTypes = {
    mappingStatusWithIconAndColor: PropTypes.func,
    getStatusClass: PropTypes.func
};

function getOrderDetailVisible(orders, orderIds) {
    let orderFiltered = {};
    for (let index in orders) {
        if((orderIds.indexOf(orders[index].increment_id) != -1) &&
            orders[index].isVisible === true) {
            orderFiltered = orders[index];
            break;
        }
    }

    return orderFiltered;
}

function mapStateToProps(state, ownProps) {
    const saleOrderDetails = state.callList.saleOrderDetails;
    const orderIds = [];

    ownProps.orders.map(order => {
       orderIds.push(order.increment_id)
    });
    let order = {};
    if(saleOrderDetails.length > 0) {
        order = getOrderDetailVisible(saleOrderDetails, orderIds);
    }
    return {
        orderDetail: order
    };
}

export default connect(mapStateToProps)(SaleOrders);