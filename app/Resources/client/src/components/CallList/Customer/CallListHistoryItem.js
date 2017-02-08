import React, {PropTypes} from 'react';
import {Row, Col} from 'react-bootstrap';
import {FormattedDate} from 'react-intl';
import _ from 'lodash';
import moment from 'moment-timezone';

class CustomerHistory extends React.Component {

    constructor(props, context) {
        super(props, context);

        this.msToTime = this.msToTime.bind(this);
    }

    msToTime(callEnd, callStart) {
        if(!_.isUndefined(callEnd) && !_.isUndefined(callStart)){
            let callEndSt = new Date(callEnd).getTime();
            let callStartSt = new Date(callStart).getTime();
            let duration = callEndSt - callStartSt;
            let seconds = (duration/1000);
            let minutes = parseInt(seconds/60, 10);
            seconds = seconds%60 + ' seconds';
            let hours = (minutes != 0) ? parseInt(minutes/60, 10) + ' hours ' : '';
            minutes = (minutes != 0) ? minutes%60 + ' minutes ': '';

            return hours + minutes+ seconds;
        } else {
            return '';
        }

    }

    render() {
        const callHistoryList = this.props.callHistoryList;
        return (
            <div className="list-group">{
                (callHistoryList) ?
                callHistoryList.map((callHistory, index)=>
                    <div className="list-group-item m-t-sm" key={callHistory.id}>
                        <Row className="m-b-sm">
                            <Col md={4}>
                                <strong>{callHistory.first_name +" "+callHistory.last_name}</strong>
                            </Col>
                            <Col md={4}>
                                {moment.tz(moment.utc(callHistory.call_start).toDate(), iCareUserMoreInfo.timeZone).format('DD-MM-YYYY HH:mm:ss')}
                            </Col>
                            <Col md={4}>
                                {this.msToTime(callHistory.call_end, callHistory.call_start)}
                            </Col>
                        </Row>
                        <Row className="m-b-sm">
                            <Col md={12}>
                                {iCareLocale.result}: {iCareLocale[callHistory.call_result_code]}
                            </Col>
                            <Col md={12}>
                                {iCareLocale.note}: {callHistory.note}
                            </Col>
                        </Row>
                    </div>
                ) : <div></div>
            }
            </div>
        );
    }
}

export default CustomerHistory;