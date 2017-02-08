/**
 * Created by hautruong on 19/12/2016.
 * Updated by linhvu on 27/12/2016
 */
import React, {PropTypes} from 'react';
import {FormattedNumber} from 'react-intl';
import _ from 'lodash';

class RepaymentScheduleItem extends React.Component {

    constructor(props, context) {
        super(props, context);
    }

    render() {
        if(!this.props.text) return null;
        return (
            <li className="tt-item">
                <div className={`tt-timeline-icon ${this.props.classIcon}`}>
                    {this.props.icon &&
                        <i className={this.props.icon}></i>
                    }
                </div>
                <div className="tt-timeline-content left">
                    <div className={`tt-content-container ${this.props.classText}`}>
                        {this.props.text}
                    </div>
                </div>
                <div className="tt-timeline-content right">
                    <div className={`tt-content-container ${this.props.classValue}`}>
                        {this.props.value &&
                            (_.isNumber(this.props.value) ?
                                    <FormattedNumber
                                        value={this.props.value}
                                        style='currency'
                                        minimumFractionDigits={0}
                                        currency={iCareCurrency}/> :
                                    this.props.value
                            )
                        }
                    </div>
                </div>
                <div className="tt-timeline-content extend">
                    <div className={`tt-content-container ${this.props.classExtend}`}>
                        {this.props.extend &&
                            (_.isNumber(this.props.extend) ?
                                <FormattedNumber
                                    value={this.props.extend}
                                    style='currency'
                                    minimumFractionDigits={0}
                                    currency={iCareCurrency}/> :
                                this.props.extend
                            )
                        }
                    </div>
                </div>
            </li>
        );
    }
}

RepaymentScheduleItem.propTypes = {
    wpClass: PropTypes.string,
    text: PropTypes.string,
    classText: PropTypes.string,
    icon: PropTypes.string,
    classIcon: PropTypes.string,
    value: PropTypes.oneOfType([PropTypes.string, PropTypes.number]),
    classValue: PropTypes.string,
    extend: PropTypes.string,
    classExtend: PropTypes.string
};

export default RepaymentScheduleItem;