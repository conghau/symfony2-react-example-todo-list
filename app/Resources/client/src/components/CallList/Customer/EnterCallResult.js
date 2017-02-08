import React, {PropTypes} from 'react';
import {FormControl, FormGroup, ControlLabel, Button, Row, Col} from 'react-bootstrap';
import {Switch, Case, Default} from 'jsx-switch';
import DateTimePick from '../../common/DateTimePick';
import _ from 'lodash';
import {toastr} from 'react-redux-toastr';

class EnterCallResult extends React.Component {

    constructor(props, context) {
        super(props, context);

        this.state = {
            'resultCode': 'not_pick_up',
            'note': ''
        };

        this.handleFormSubmit = this.handleFormSubmit.bind(this);
        this.handleFormControlChange = this.handleFormControlChange.bind(this);
    }

    handleSelectResult(result) {
        switch (result) {
            case "insufficient_fund":
                this.setState({
                    'resultCode': 'insufficient_fund'
                });
                break;
            case "call_back_later":
                this.setState({
                    'resultCode': 'call_back_later'
                });
                break;
            case "wrong_phone":
                this.setState({
                    'resultCode': 'wrong_phone'
                });
                break;
            case "no_demand":
                this.setState({
                    'resultCode': 'no_demand'
                });
                break;
            default:
                this.setState({
                    'resultCode': 'not_pick_up'
                });

        }
    }

    handleFormControlChange(event) {
        let formControlValue = {};
        formControlValue[event.target.name] = event.target.value;
        this.setState(formControlValue);
    }

    handleFormSubmit() {
        if (!_.isEmpty(this.props.callLog)) {
            let date = moment.utc().format('YYYY-MM-DD\\TH:mm:ss');
            let callLog = this.props.callLog;
            let reminderDate;
            callLog.call_step = "call_end";
            callLog.call_end = date;
            callLog.call_result_code = this.state.resultCode;
            callLog.note = this.state.note;
            if(callLog.call_result_code == 'call_back_later'){
                if(this.refs.datePicker.state.select_date == 0 || this.refs.datePicker.state.select_hour == 0 ) {
                    toastr.error(iCareLocale['call_log.must_select_reminder_time']);
                }else{
                    reminderDate = moment.utc(
                        this.refs.datePicker.state.select_date
                        +' '+this.refs.datePicker.state.select_hour
                        +':'+this.refs.datePicker.state.select_min).format('YYYY-MM-DD\\TH:mm:ss');
                    this.props.handleUpdateCallLog(callLog.id, callLog, reminderDate);
                }

            }else{
                this.props.handleUpdateCallLog(callLog.id, callLog, reminderDate);
            }
        }
    }

    render() {
        return (
            <form className="call-result">
                <Row>
                    <Col md={4} className="call-result-action">
                        <div className={(() => {
                            if (this.state.resultCode == "not_pick_up") return "icon-btn tt-box invert";
                            return "icon-btn tt-box";
                        })()}
                             onClick={this.handleSelectResult.bind(this, "not_pick_up")}
                        >
                            <div className="tt-body">
                                <div className="tt-content">
                                    <span className="circle">
                                        <i className="material-icons not-pickup">phone_missed</i>
                                    </span>
                                    <p>{iCareLocale.not_pick_up}</p>
                                </div>
                            </div>
                        </div>

                    </Col>
                    <Col md={4} className="call-result-action">
                        <div className={(() => {
                            if (this.state.resultCode == "call_back_later") return "icon-btn tt-box invert";
                            return "icon-btn tt-box";
                        })()}
                             onClick={this.handleSelectResult.bind(this, "call_back_later")}
                        >
                            <div className="tt-body">
                                <div className="tt-content">
                                    <span className="circle">
                                        <i className="material-icons call-back">phone_forwarded</i>
                                    </span>
                                    <p>{iCareLocale.call_back_later}</p>
                                </div>
                            </div>
                        </div>
                    </Col>
                    <Col md={4} className="call-result-action">
                        <div className={(() => {
                            if (this.state.resultCode == "wrong_phone") return "icon-btn tt-box invert";
                            return "icon-btn tt-box";
                        })()}
                             onClick={this.handleSelectResult.bind(this, "wrong_phone")}
                        >
                            <div className="tt-body">
                                <div className="tt-content">
                                    <span className="circle">
                                        <i className="material-icons wrong-phone">phone_locked</i>
                                    </span>
                                    <p>{iCareLocale.wrong_phone}</p>
                                </div>
                            </div>
                        </div>
                    </Col>
                    <Col md={6} className="call-result-action">
                        <div className={(() => {
                            if (this.state.resultCode == "no_demand") return "icon-btn tt-box invert";
                            return "icon-btn tt-box";
                        })()}
                             onClick={this.handleSelectResult.bind(this, "no_demand")}
                        >
                            <div className="tt-body">
                                <div className="tt-content">
                                    <span className="circle">
                                        <i className="material-icons no-demand">remove_shopping_cart</i>
                                    </span>
                                    <p>{iCareLocale.no_demand}</p>
                                </div>
                            </div>
                        </div>
                    </Col>
                    <Col md={6} className="call-result-action">
                        <div className={(() => {
                            if (this.state.resultCode == "insufficient_fund") return "icon-btn tt-box invert";
                            return "icon-btn tt-box";
                        })()}
                             onClick={this.handleSelectResult.bind(this, "insufficient_fund")}
                        >
                            <div className="tt-body">
                                <div className="tt-content">
                                    <span className="circle">
                                        <i className="material-icons insufficient-fund">attach_money</i>
                                    </span>
                                    <p>{iCareLocale.insufficient_fund}</p>
                                </div>
                            </div>
                        </div>
                    </Col>
                </Row>

                <Switch>
                    <Case expr={this.state.resultCode == "call_back_later"}>
                        <Row>
                            <Col md={12}>
                                <Row>
                                    <DateTimePick numOfDay={7} startHour={7} endHour={21} rangeMinute={15} ref="datePicker"/>
                                </Row>
                                <FormGroup controlId="formControlsTextarea">
                                    <ControlLabel>{iCareLocale.notes}</ControlLabel>
                                    <FormControl componentClass="textarea" rows="5" onChange={this.handleFormControlChange}
                                                 name="note"/>
                                </FormGroup>
                            </Col>
                        </Row>
                    </Case>
                    <Case expr={this.state.resultCode == "wrong_phone"}>
                        <FormGroup controlId="formControlsTextarea">
                            <ControlLabel>{iCareLocale.notes}</ControlLabel>
                            <FormControl componentClass="textarea" rows="5"/>
                        </FormGroup>
                    </Case>
                    <Case expr={this.state.resultCode == "no_demand"}>
                        <FormGroup controlId="formControlsTextarea">
                            <ControlLabel>{iCareLocale.notes}</ControlLabel>
                            <FormControl componentClass="textarea" rows="5"/>
                        </FormGroup>
                    </Case>
                    <Case expr={this.state.resultCode == "insufficient_fund"}>
                        <FormGroup controlId="formControlsTextarea">
                            <ControlLabel>{iCareLocale.notes}</ControlLabel>
                            <FormControl componentClass="textarea" rows="5"/>
                        </FormGroup>
                    </Case>
                    <Default>
                        <FormGroup controlId="formControlsTextarea">
                            <ControlLabel>{iCareLocale.notes}</ControlLabel>
                            <FormControl componentClass="textarea" rows="3" onChange={this.handleFormControlChange} name="note"/>
                        </FormGroup>
                    </Default>
                </Switch>

                <Row>
                    <Col md={12} className="text-right">
                        <div className="btn default" onClick={this.handleFormSubmit}>
                            {iCareLocale.save}
                        </div>
                    </Col>
                </Row>
            </form>
        );
    }
}

export default EnterCallResult;