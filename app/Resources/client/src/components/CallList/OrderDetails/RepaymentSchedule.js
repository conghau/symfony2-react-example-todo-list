import React, {PropTypes} from 'react';
import {FormattedNumber} from 'react-intl';
import {Panel} from 'react-bootstrap';
import RepaymentScheduleItem from './RepaymentScheduleItem';
import moment from 'moment';

class RepaymentSchedule extends React.Component {

    constructor(props, context) {
        super(props, context);
    }

    render() {
        const repayment = this.props.repayment;
        const repaymentSchedule = repayment.repaymentSchedule || [];
        return (
            <div>
                <Panel header={iCareLocale['sale_order.detail.repayment']}>
                    <p>
                        {iCareLocale['sale_order.detail.repayment.installment']}: {(<FormattedNumber
                        value={repayment.principal || 0}
                        style='currency'
                        minimumFractionDigits={0}
                        currency={iCareCurrency}/>)}/{iCareLocale.month} {iCareLocale.for} {repayment.numberOfRepayments} {iCareLocale.months}
                    </p>
                    <div className="tt-timeline tt-timeline-2">

                        <div className="tt-heading">
                            <ul className="tt-container">
                                <li className="tt-item">
                                    <div className="tt-timeline-content left">
                                        <div className="tt-content-container">
                                            <strong></strong>
                                        </div>
                                    </div>
                                    <div className="tt-timeline-content right">
                                        <div className="tt-content-container">
                                            <strong>{iCareLocale.principle}</strong>
                                        </div>
                                    </div>
                                    <div className="tt-timeline-content extend">
                                        <div className="tt-content-container">
                                            <strong>{iCareLocale.paid}</strong>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div className="tt-content">
                            <div className="tt-timeline-line border-grey-steel"></div>
                            <ul className="tt-container">
                                {
                                    repaymentSchedule.map((item, index) => {
                                        if(index > 0) {
                                            let icon = '', classIcon = '', extend = '', classExtend = '';
                                            let format = "YYYY/MM/DD";
                                            let dueDate = item.dueDate.join('/');
                                            if(moment(dueDate, format, true).isValid()) {
                                                let now = moment();
                                                let date = moment(dueDate);
                                                if(moment(now).isBefore(date) === false) {
                                                    if(item.totalPaidForPeriod != 0) {
                                                        icon = 'icon-check';
                                                        classIcon = 'bg-green-jungle bg-font-green-jungle';
                                                        extend = item.totalPaidForPeriod;
                                                    }
                                                    else {
                                                        icon = 'icon-close';
                                                        classIcon = 'bg-red-thunderbird bg-font-red-thunderbird';
                                                        extend = iCareLocale.delayed;
                                                        classExtend = 'font-red-thunderbird';
                                                    }

                                                }
                                            }

                                            return <RepaymentScheduleItem
                                                key={index}
                                                icon={icon}
                                                classIcon={classIcon}
                                                text={moment(dueDate).format('DD/MM/YYYY')}
                                                classText=""
                                                value={`${item.principalDue}` || ''}
                                                classValue=""
                                                extend={extend}
                                                classExtend={classExtend}/>
                                        }
                                    })
                                }
                            </ul>
                        </div>
                    </div>
                </Panel>
            </div>
        );
    }
}

RepaymentSchedule.propTypes = {
    repayment: PropTypes.object.isRequired
};

export default RepaymentSchedule;