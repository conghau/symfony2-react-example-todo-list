import React, {PropTypes} from 'react';
import {connect} from 'react-redux';
import CustomerDetails from './CustomerDetails';
import SaleOrders from '../SaleOrder/SaleOrders';
import $ from 'jquery';
import _ from 'lodash';

class CustomerOverview extends React.Component {

    constructor(props, context) {
        super(props, context);
    }

    componentWillMount() {
        const customer = this.props.customer;
        const orders   = this.props.orders;
        if(_.isEmpty(orders)) {
            this.context.handleLoadSaleOrders(customer.id);
        }
    }

    render() {
        const customer = this.props.customer;
        let orders   = this.props.orders;
        orders       = $.makeArray(orders);
        let credits = {};
        if(!_.isEmpty(customer.credits)){
            credits = customer.credits;
        }
        return (
            <div>
                <CustomerDetails profiles={customer.profiles} credits={credits} />
                { orders.length > 0 ?
                    (<SaleOrders orders={orders} />) :
                    (<p>{iCareLocale['sale_order.no_orders_message']}</p>)
                }
            </div>
        );
    }
}

CustomerOverview.propTypes = {
    customer: PropTypes.object.isRequired,
    orders: PropTypes.array
};

CustomerOverview.contextTypes = {
    handleLoadSaleOrders: PropTypes.func
};

function mapStateToProps(state, ownProps) {
    let orders = [];
    const customerId = ownProps.customer.id;
    if(customerId
        && _.isUndefined(state.callList.saleOrderList[customerId]) === false) {
        orders = state.callList.saleOrderList[customerId];
    }
    return {
        orders: orders
    };
}

export default connect(mapStateToProps)(CustomerOverview);