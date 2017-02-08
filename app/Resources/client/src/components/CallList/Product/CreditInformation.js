/**
 * Created by hautruong on 28/12/2016.
 */
import React, {PropTypes} from 'react';
import {Panel, Row, Col, Form, FormGroup, FormControl, HelpBlock, ControlLabel} from 'react-bootstrap';
import {FormattedNumber} from 'react-intl';

class CreditInformation extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = {
            savingAccount: this.props.currentSavingAccount || 0,
            useSavingAccount: true,
            message: {},
        };
        this.handleOnChange = this.handleOnChange.bind(this);
        this.getValidationState = this.getValidationState.bind(this);
    }

    componentWillReceiveProps(nextProps) {
        if(!_.isEqual(nextProps, this.props)) {
            this.setState({savingAccount: nextProps.currentSavingAccount||0});
        }
    }

    getValidationState() {
        const max = parseInt(this.props.currentSavingAccount || 0);
        const value = parseInt(this.state.savingAccount);
        if (value < 0 || value > max) {
            this.setState({savingAccount: max});
            return 'error';
        }
    }

    handleOnChange(event) {
        let formControlValue = {};
        if (event.target.type == 'checkbox') {
            formControlValue[event.target.name] = event.target.checked ? true : false;
            this.setState(formControlValue, () => {
                this.props.onDispatchState(
                    'refCreditInfo',
                    this.state
                );
            });
        } else {
            const max = parseInt(this.props.currentSavingAccount || 0);
            const value = parseInt(event.target.value || 0);
            if (value < 0 || value > max) {
                return;
            } else {
                formControlValue[event.target.name] = event.target.value;
                this.setState(formControlValue, () => {
                    this.props.onDispatchState(
                        'refCreditInfo',
                        this.state
                    );
                });
            }
        }

    }

    componentWillMount() {
        this.props.onDispatchState(
            'refCreditInfo',
            this.state
        );
    }

    render() {
        let disabledFlag = this.props.disableElement || false;
        let disabledInput = (disabledFlag) ? true : (!this.state.useSavingAccount);
        let isDisplayUseSave = (this.props.currentSavingAccount || 0) > 0;
        let dueLimitMoreClass = (this.props.insufficient_due == true) ? 'red' : '';
        let creditLimitMoreClass = (this.props.insufficient_credit == true) ? 'red' : '';
        return (
            <div className="credit-info">
                <Panel header={iCareLocale['place_order.credit_info']}>
                    <Row>
                        <Col md={12} sm={12}>
                            <Form horizontal>
                                <FormGroup>
                                    <ControlLabel className="col-md-6 text-left">
                                        {iCareLocale['place_order.credit_info.aviable_credit_limit']}:
                                    </ControlLabel>
                                    <ControlLabel className={'col-md-6 text-left p-l-none ' + creditLimitMoreClass}>
                                        <FormattedNumber
                                            value={this.props.availableCreditLimit || 0}
                                            style='currency'
                                            minimumFractionDigits={0}
                                            currency={iCareCurrency}/>
                                    </ControlLabel>
                                    {(this.props.insufficient_credit == true)&&
                                    <ControlLabel className="col-md-offset-6 text-right red">
                                        {iCareLocale['place_order.credit_info.insufficient_credit_limit']}
                                    </ControlLabel>}
                                </FormGroup>

                                <FormGroup>
                                    <ControlLabel className="col-md-6 text-left">
                                        {iCareLocale['place_order.credit_info.aviable_due_limit']}:
                                    </ControlLabel>
                                    <ControlLabel className={'col-md-6 text-left p-l-none ' + dueLimitMoreClass}>
                                        <FormattedNumber
                                            value={this.props.availableDueLimit || 0}
                                            style='currency'
                                            minimumFractionDigits={0}
                                            currency={iCareCurrency}/>
                                    </ControlLabel>
                                    {(this.props.insufficient_due == true)&&
                                    <ControlLabel className="col-md-offset-6 text-right red">
                                        {iCareLocale['place_order.credit_info.insufficient_due_limit']}
                                    </ControlLabel>}
                                </FormGroup>

                                {isDisplayUseSave &&
                                <div>
                                    <div className="input-group">
                                        <div className="mt-checkbox-list">
                                            <label className="mt-checkbox mt-checkbox-outline">
                                                {iCareLocale['place_order.credit_info.use_saving_account']}
                                                <input type="checkbox" value="1"
                                                       ref="useSavingAccount"
                                                       disabled={disabledFlag}
                                                       checked={this.state.useSavingAccount}
                                                       name="useSavingAccount"
                                                       onChange={this.handleOnChange}
                                                />
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <FormGroup validationState={this.getValidationState()}>
                                        <ControlLabel className="col-md-6 text-left">
                                            {iCareLocale['place_order.credit_info.saving_account']}
                                        </ControlLabel>
                                        <Col md={5} className="p-l-none">
                                            <input type="number" value={this.state.savingAccount || 0}
                                                   ref="savingAccount"
                                                   name="savingAccount"
                                                   onChange={this.handleOnChange}
                                                   disabled={disabledInput}
                                                   className="form-control"
                                                   min="0"
                                                   step="0.01"
                                                   max={this.props.currentSavingAccount || 0}/>
                                            <FormControl.Feedback />
                                            <HelpBlock>Maximum must equal saving account.</HelpBlock>
                                        </Col>
                                    </FormGroup>
                                </div>
                                }
                            </Form>
                        </Col>
                    </Row>
                </Panel>
            </div>
        );
    }
}

CreditInformation.propTypes = {
    availableCreditLimit: PropTypes.number,
    availableDueLimit: PropTypes.number,
    currentSavingAccount: PropTypes.number,
    disableElement: PropTypes.bool,
    onDispatchState: PropTypes.func,
    message: PropTypes.object,
};

export default CreditInformation;