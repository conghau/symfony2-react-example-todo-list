import React, {PropTypes} from 'react';
import {Table} from 'react-bootstrap';

class SaleOrdersList extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        const caption = this.props.caption;
        return (
            <div>
                <div className="panel panel-default sales-order">
                    {caption &&
                        <div className="panel-heading">
                            <strong>
                                {caption}
                            </strong>
                        </div>
                    }
                    <div className="panel-body">
                        <Table responsive striped condensed hover>
                            <thead>
                                <tr>
                                    {/*<th>&nbsp; </th>*/}
                                    <th> {iCareLocale['sale_order.order.order_id']} </th>
                                    <th>
                                        {iCareLocale['sale_order.order.product_name']}/
                                        {iCareLocale['sale_order.order.sku']}
                                    </th>
                                    <th> {iCareLocale['sale_order.order.order_value']} </th>
                                    <th> {iCareLocale['sale_order.order.order_date']} </th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                {this.props.children}
                            </tbody>
                        </Table>
                    </div>
                </div>

            </div>
        );
    }
}

SaleOrdersList.propTypes = {
    caption: PropTypes.string,
};

export default SaleOrdersList;
