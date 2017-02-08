import React, {PropTypes} from 'react';
import {connect} from 'react-redux';
import {FormattedNumber} from 'react-intl';
import _ from 'lodash';
import moment from 'moment-timezone';

class SaleOrderListItem extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.handleGetOrderDetail = this.handleGetOrderDetail.bind(this);
    }

    handleGetOrderDetail() {
        const order = this.props.order;
        const orderDetail = this.props.orderDetail;
        if(_.isEmpty(orderDetail) === false) {
            orderDetail.isVisible = true;
            this.context.handleUpdateOrderDetail(orderDetail);
        } else {
            this.context.handleLoadSaleOrderDetail(order.increment_id || 0);
        }
    }

    render() {
        const order = this.props.order;
        let theDate = new Date(order.created_at * 1000);

        const className = (() => {
            if(_.isUndefined(this.context.getStatusClass) === false)
                return this.context.getStatusClass(order.status);
            return null;
        })();

        return (
            <tr onClick={this.handleGetOrderDetail}>
                <td> {order.increment_id}</td>
                <td>{`${order.firstname} ${order.lastname}`}</td>
                <td>
                    {order.sale_items[0].name} <br />
                    {order.sale_items[0].sku}
                </td>
                <td>
                    <FormattedNumber
                    value={order.grand_total}
                    style='currency'
                    minimumFractionDigits={0}
                    currency={iCareCurrency}/>
                </td>
                <td>
                    <span className={className}>
                        {_.capitalize(iCareLocale[`orders.status.${order.status}`] || '')}
                    </span>
                </td>
                <td> {moment.tz(moment.utc(theDate).toDate(), iCareUserMoreInfo.timeZone).format('DD/MM/YYYY hh:mm:ss A')} </td>
                <td>
                    <i className="fa fa-angle-right" aria-hidden="true"></i>
                </td>
            </tr>
        );
    }
}

SaleOrderListItem.propTypes = {
    order: PropTypes.object.isRequired
};

SaleOrderListItem.contextTypes = {
    getStatusClass: PropTypes.func,
    handleLoadSaleOrderDetail: PropTypes.func,
    handleUpdateOrderDetail: PropTypes.func,
};

function mapStateToProps(state, ownProps) {
    const orderId = ownProps.order.increment_id;
    const order = (state.myOrders.orderDetails[orderId] || {});
    return {
        orderDetail: order
    };
}

export default connect(mapStateToProps)(SaleOrderListItem);