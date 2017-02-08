import React, {PropTypes} from 'react';
import SaleOrderList from './SaleOrderList';
import SaleOrderListItem from './SaleOrderListItem';
import _ from 'lodash';

class SaleOrder extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        const orders = this.props.orders;
        let rows = [];
        if (_.isEmpty(orders) === false) {
            _.each(orders, function (order, index) {
                rows.push(<SaleOrderListItem key={index} order={order} />)
            });
        }

        return (
            <div className="portlet light">
                <div className="portlet-body">
                    <SaleOrderList>
                        {rows}
                    </SaleOrderList>
                </div>
            </div>
        );
    }
}

SaleOrder.propTypes = {
    orders: PropTypes.object.isRequired,
};

export default SaleOrder;