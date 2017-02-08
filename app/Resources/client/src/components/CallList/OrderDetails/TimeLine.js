import React, {PropTypes} from 'react';
import TimeLineItem from './TimeLineItem';
import moment from 'moment-timezone';

class TimeLine extends React.Component {

    constructor(props, context) {
        super(props, context);
    }

    prepareDataOfOrderTimeline(histories) {
        let timeLine = [
            {
                key: 'pending',
                text: iCareLocale['orders.status.placed'],
            },
            {
                key: 'confirmed',
                text: iCareLocale['orders.status.confirmed'],
            },
            {
                key: 'shipped',
                text: iCareLocale['orders.status.shipped'],
            },
            {
                key: 'canceled'
            },
            {
                key: 'failed'
            },
            {
                key: 'delivered',
                text: iCareLocale['orders.status.delivered'],
            },
        ];

        let hasCancel = !_.isEmpty(_.find(histories, {'status': 'canceled'}));
        if (hasCancel) {
            timeLine = [
                {
                    key: 'pending',
                    text: iCareLocale['orders.status.placed'],
                },
                {
                    key: 'confirmed',
                },
                {
                    key: 'shipped',
                },
                {
                    key: 'canceled'
                },
                {
                    key: 'failed'
                },
            ]
        }
        histories.map(history => {
            timeLine.map(line => {
                if (line.key == history.status) {
                    let theDate = new Date(history.date * 1000);
                    line.icon = 'fa fa-check';
                    if (history.status == 'failed') {
                        line.classIcon = 'bg-red-thunderbird bg-font-red-thunderbird';
                        line.icon = 'icon-close';
                        line.text = ['orders.status.delivery_failed'];
                        line.classText = 'font-red-thunderbird';
                    } else if (history.status == 'canceled') {
                        line.classIcon = 'bg-red-thunderbird bg-font-red-thunderbird';
                        line.icon = 'icon-close';
                        line.text = iCareLocale['orders.status.canceled'];
                        line.classText = 'font-red-thunderbird';
                    } else if (history.status == 'confirmed') {
                        line.icon = 'icon-check';
                        line.text = iCareLocale['orders.status.confirmed'];
                        line.classIcon = 'bg-green-jungle bg-font-green-jungle';
                    } else if (history.status == 'shipped') {
                        line.icon = 'icon-check';
                        line.text = iCareLocale['orders.status.shipped'];
                        line.classIcon = 'bg-green-jungle bg-font-green-jungle';
                    }
                    else {
                        line.icon = 'icon-check';
                        line.classIcon = 'bg-green-jungle bg-font-green-jungle';
                    }
                    line.value = moment.tz(moment.utc(theDate).toDate(), iCareUserMoreInfo.timeZone).format('DD/MM/YYYY');

                }
                return line;
            });
        });


        return timeLine;
    }

    render() {
        // Prepare orderHistoryInfo and push to timeline
        let timeLine = this.prepareDataOfOrderTimeline(this.props.history);
        return (
            <div>
                <div className="panel">
                    <div className="panel-heading">
                        <div className="panel-title">
                            {this.props.title}
                        </div>
                    </div>
                    <div className="panel-body">
                        <div className="tt-timeline">
                            <div className="tt-timeline-line border-grey-steel"></div>
                            <ul className="tt-container">
                                {timeLine.map(line => {
                                    return <TimeLineItem
                                        key={line.key}
                                        text={line.text || null}
                                        classText={line.classText || ''}
                                        icon={line.icon}
                                        classIcon={line.classIcon || ''}
                                        value={line.value || ''}/>
                                })}

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

TimeLine.propTypes = {
    history: PropTypes.array,
    title: PropTypes.any
};

export default TimeLine;