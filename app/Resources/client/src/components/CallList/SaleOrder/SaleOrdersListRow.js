import React, {PropTypes} from 'react';
import {connect} from 'react-redux';
import {FormattedNumber} from 'react-intl';
import {OverlayTrigger, Tooltip} from 'react-bootstrap';
import _ from 'lodash';
import moment from 'moment-timezone';

class SaleOrdersListRow extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.handleGetOrderDetail = this.handleGetOrderDetail.bind(this);
    }

    handleGetOrderDetail() {
        const order = this.props.order;
        const orderDetail = this.props.orderDetail;
        if(orderDetail) {
            orderDetail.isVisible = true;
            this.context.handleUpdateOrderDetail(orderDetail);
        } else {
            this.context.handleLoadSaleOrderDetail(order.increment_id || 0);
        }
    }

    render() {
        const order = this.props.order;
        // let tooltip = <Tooltip id={order.entity_id}>{_.capitalize(order.status || '')}</Tooltip>;
        // const mapStatus = this.context.mappingStatusWithIconAndColor();
        // let status = mapStatus.filter(status => status.type === order.status);
        // if(status.length > 0) {
        //     status = status[0];
        // } else {
        //     status = {color: '', icon: ''};
        // }
        let theDate = new Date(order.created_at * 1000);

        const className = (() => {
            if(_.isUndefined(this.context.getStatusClass) === false)
                return this.context.getStatusClass(order.status);
            return null;
        })();
        return (
            <tr onClick={this.handleGetOrderDetail}>
                {/*<td>*/}
                    {/*<OverlayTrigger placement="right" overlay={tooltip}>*/}
                        {/*<span className={`icon-cirle ${status.color}`}>*/}
                            {/*<i className={`fa ${status.icon}`}></i>*/}
                        {/*</span>*/}
                    {/*</OverlayTrigger>*/}
                {/*</td>*/}
                <td> {order.increment_id} <br />
                    <span className={className}>
                        {_.capitalize(iCareLocale[`orders.status.${order.status}`] || '')}
                    </span>
                </td>
                <td> <span>{order.sale_items[0].name}</span>
                    <br /> {order.sale_items[0].sku} </td>
                <td> <FormattedNumber
                    value={order.grand_total}
                    style='currency'
                    minimumFractionDigits={0}
                    currency={iCareCurrency}/> </td>
                <td> {moment.tz(moment.utc(theDate).toDate(), iCareUserMoreInfo.timeZone).format('DD/MM/YYYY hh:mm:ss A')} </td>
                <td>
                    <i className="fa fa-angle-right" aria-hidden="true"></i>
                </td>
            </tr>
        );
    }
}

SaleOrdersListRow.propTypes = {
    order: PropTypes.object.isRequired,
    detail: PropTypes.object,
};

SaleOrdersListRow.contextTypes = {
    handleLoadSaleOrderDetail: PropTypes.func,
    handleUpdateOrderDetail: PropTypes.func,
    mappingStatusWithIconAndColor: PropTypes.func,
    getStatusClass: PropTypes.func
};

function getOrderById(orders, id) {
    const OrderList = orders.filter(OrderList => OrderList.increment_id == id);
    if (OrderList.length > 0) return OrderList[0];
    return null;
}


function mapStateToProps(state, ownProps) {
    let order = {};
    const orderId = ownProps.order.increment_id;
    if(orderId && state.callList.saleOrderDetails) {
        order = getOrderById(state.callList.saleOrderDetails, orderId);
    }
    return {
        orderDetail: order
    };
}

export default connect(mapStateToProps)(SaleOrdersListRow);
