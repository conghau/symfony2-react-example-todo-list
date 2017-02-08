import React, {PropTypes} from 'react';
import {FormattedNumber} from 'react-intl';

class CustomerCredit extends React.Component {
    constructor(props, context) {
        super(props, context);
    }

    render() {
        return (
            <div className="panel panel-default">
                <div className="panel-body">
                    <h5>{iCareLocale['credit']}</h5>
                    <p>
                        {iCareLocale['credit.aviable_credit_limit']}: <span className="green">
                            <FormattedNumber
                                value={this.props.availableCreditLimit || 0}
                                style='currency'
                                minimumFractionDigits={0}
                                currency={iCareCurrency}/>
                        </span>

                        <br/> {iCareLocale['credit.aviable_due_limit']}: <span className="green">
                            <FormattedNumber
                                value={this.props.availableDueLimit || 0}
                                style='currency'
                                minimumFractionDigits={0}
                                currency={iCareCurrency}/>
                        </span>

                        <br/> {iCareLocale['credit.current_saving_limit']}: <span className="green">
                                <FormattedNumber
                                    value={this.props.currentSavingAccount || 0}
                                    style='currency'
                                    minimumFractionDigits={0}
                                    currency={iCareCurrency}/>
                        </span>
                    </p>
                </div>
                <div className="panel-action red">
                    {iCareLocale['credit.dpd']} {this.props.dpd} {iCareLocale['credit.dpd.days']}
                </div>
            </div>
        );
    }
}
CustomerCredit.propTypes = {
    availableCreditLimit: PropTypes.oneOfType([PropTypes.string, PropTypes.number]),
    availableDueLimit: PropTypes.oneOfType([PropTypes.string, PropTypes.number]),
    currentSavingAccount: PropTypes.number,
    dpd: PropTypes.any
};

export default CustomerCredit;