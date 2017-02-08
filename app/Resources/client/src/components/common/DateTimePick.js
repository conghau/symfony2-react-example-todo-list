/**
 * Created by hautruong on 16/01/2017.
 */
import React, {PropTypes} from 'react';
import _ from 'lodash';

class DateTimePick extends React.Component {
    constructor() {
        super();
        this.state = {
            select_date: 0,
            select_hour: 0,
            select_min: 0,
        };
        this.handleChooseOption = this.handleChooseOption.bind(this);
    }

    handleChooseOption(type, val) {
        switch (type) {
            case 'date':
                this.setState({
                    select_date: val,
                });
                break;
            case 'hour':
                this.setState({
                    select_hour: val,
                });
                break;
            case 'min':
                this.setState({
                    select_min: val,
                });
                break;
        }
    }

    pad(d) {
        return (d < 10) ? '0' + d.toString() : d.toString();
    }

    render() {
        let today = new Date();
        let tmp = new Date();
        let weekday = new Array(7);
        weekday[0] = (iCareLocale['weekday.sunday'] || "Sunday");
        weekday[1] = (iCareLocale['weekday.monday'] || "Monday");
        weekday[2] = (iCareLocale['weekday.tuesday'] || "Tuesday");
        weekday[3] = (iCareLocale['weekday.wednesday'] || "Wednesday");
        weekday[4] = (iCareLocale['weekday.thursday'] || "Thursday");
        weekday[5] = (iCareLocale['weekday.friday'] || "Friday");
        weekday[6] = (iCareLocale['weekday.saturday'] || "Saturday");

        let startTime = this.props.startHour || 8;
        let rangeHour = parseInt(this.props.endHour - startTime + 1);

        let rangeMinute = this.props.rangeMinute || 15;
        let numLoopMinute = Math.floor(60 / rangeMinute);
        return (
            <div className={'datetimepick ' + this.props.className || ''}>
                <div className={'datetimepick-date col-xs-12 col-sm-12'}>
                    <h4>{iCareLocale['call_result.call_back.pick_date']}</h4>
                    {_.times(this.props.numOfDay, i => {
                        tmp.setDate(today.getDate() + i);
                        let dateNum = tmp.getDate();
                        let date = tmp.toDateString();
                        let mClass = (date == this.state.select_date) ? 'selected' : '';
                        return (
                            <div key={i} className={'datetimepick-date-child col-xs-6 col-sm-3 '}
                                 onClick={() => {
                                     this.handleChooseOption('date', date)
                                 }}
                            >
                                <div className={'icon-btn tt-box ' + mClass}>
                                    <div className="tt-body">
                                        <span className="day">{weekday[tmp.getDay()]}</span>
                                        <div className="date">
                                            <span>{dateNum}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        )
                    })}

                </div>
                <div className="col-md-12">
                    <h4>{iCareLocale['call_result.call_back.pick_time']}</h4>
                </div>
                <div className="col-md-9">
                    <div className={'datetimepick-time col-md-12'}>
                        {_.times(rangeHour, i => {
                            let time = startTime + i;
                            let mClass = (time == this.state.select_hour) ? 'selected' : '';
                            return (
                                <div key={i} className={'datetimepick-time-child col-md-2p5'}
                                     onClick={() => {
                                         this.handleChooseOption('hour', time)
                                     }}
                                >
                                    <div className={'icon-btn tt-box ' + mClass}>
                                        <div className="tt-body">
                                            <span
                                                className="time">{(time > 12) ? (time - 12) + `PM` : time + `AM`}</span>
                                        </div>
                                    </div>
                                </div>
                            )
                        })}

                    </div>
                </div>
                <div className="col-md-3">
                    <div className={'datetimepick-min'}>
                        {_.times(numLoopMinute, i => {
                            let min = i * rangeMinute;
                            let mClass = (min == this.state.select_min) ? 'selected' : '';
                            return (
                                <div key={i} className={'datetimepick-min-child icon-btn tt-box ' + mClass}
                                     onClick={() => {
                                         this.handleChooseOption('min', min)
                                     }}
                                >
                                    <div className="tt-body">
                                        <span className="time">:{this.pad(min)}</span>
                                    </div>
                                </div>
                            )
                        })}

                    </div>
                </div>
            </div>
        )
    }
}

DateTimePick.propTypes = {
    numOfDay: PropTypes.number.isRequired,
    startHour: PropTypes.number,
    endHour: PropTypes.number,
    rangeMinute: PropTypes.number,
    className: PropTypes.string,
};

export default DateTimePick;
