import React, {PropTypes} from 'react';
import {Panel, Row, Col} from 'react-bootstrap';
import Line from '../common/Line'
import {FormattedNumber} from 'react-intl';

class OrderSummary extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = {
            sub_total: '',
            tax: '',
            shipping: '',
            order_total: '',
            saving_acc_deduct: '',
            balance: ''
        };
    }


    render() {
        // let balance = (this.props.order_total - this.props.saving_acc_deduct);
        let fields = ['shipping', 'order_total', 'saving_acc_deduct'];
        let tax = _.get(this.props.dataOrder, 'tax', 1);
        let tax_percent = (tax == 0) ? 0 : Math.floor(_.get(this.props.dataOrder, 'sub_total', 0) / tax);
        return (
            <Panel header={iCareLocale['sale_order.order_summary']}>
                <Row className="m-n" style={{margin: "0px"}} key={'sub_total'}>
                    <p className="pull-left">{iCareLocale['sale_order.order_summary.sub_total'] || 'Sub-total'}</p>
                    <p className="pull-right green">
                        <FormattedNumber
                            value={_.get(this.props.dataOrder, 'sub_total', 0)}
                            style='currency'
                            minimumFractionDigits={0}
                            currency={iCareCurrency}/>
                    </p>
                </Row>
                <Row className="m-n" key={'tax'}>
                    <p className="pull-left">{iCareLocale['sale_order.order_summary.tax'] || 'Tax'} ({tax_percent}%)</p>
                    <p className="pull-right green">
                        <FormattedNumber
                            value={_.get(this.props.dataOrder, 'tax', 0)}
                            style='currency'
                            minimumFractionDigits={0}
                            currency={iCareCurrency}/>
                    </p>
                </Row>
                {
                    fields.map((field) => {
                        return (
                            <div className="row" style={{margin: "0px"}} key={field}>
                                <p className="pull-left">{_.get(iCareLocale, field, field)}</p>
                                <p className="pull-right green">
                                    <FormattedNumber
                                        value={_.get(this.props.dataOrder, field, 0)}
                                        style='currency'
                                        minimumFractionDigits={0}
                                        currency={iCareCurrency}/>
                                </p>
                            </div>
                        );
                    })
                }
                <Line/>
                <Row className="m-n">
                    <p className="pull-left">{iCareLocale['sale_order.order_summary.balance']}</p>
                    <p className="pull-right green">
                        <FormattedNumber
                            value={this.props.dataOrder.balance}
                            style='currency'
                            minimumFractionDigits={0}
                            currency={iCareCurrency}/>
                    </p>
                </Row>
            </Panel>
        );
    }
}

OrderSummary.propTypes = {
    dataOrder: PropTypes.object,
};

export default OrderSummary;