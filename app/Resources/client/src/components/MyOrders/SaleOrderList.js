import React, {PropTypes} from 'react';
import {Table} from 'react-bootstrap';

class SaleOrderList extends React.Component {
    constructor(props, context) {
        super(props, context);
    }
    
    render() {
        return (

            <Table responsive striped condensed hover className="sales-order">
                <thead>
                    <tr>
                        <th> {iCareLocale['sale_order.order.order_id']} </th>
                        <th> {iCareLocale['sale_order.order.icare_member']} </th>
                        <th>
                            {iCareLocale['sale_order.order.product_name']}/
                            {iCareLocale['sale_order.order.sku']}
                        </th>
                        <th> {iCareLocale['sale_order.order.order_value']} </th>
                        <th> {iCareLocale['sale_order.order.status']} </th>
                        <th> {iCareLocale['sale_order.order.order_date']} </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    {this.props.children}
                </tbody>
            </Table>

        );
    }
}

export default SaleOrderList;
