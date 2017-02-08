/**
 * Created by hautruong on 28/12/2016.
 */
import React, {PropTypes} from 'react';
import {Panel, Col, Form, FormControl, Button, FormGroup, ControlLabel} from 'react-bootstrap';

class OrderConfirmation extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = {
            autoConfirmation: this.props.autoConfirmation || false,
            checkedConfirm: false,
        };
        this.handleOnChange = this.handleOnChange.bind(this);
    }
    handleOnChange(event) {
        let formControlValue = {};
        if (event.target.type == 'checkbox') {
            formControlValue[event.target.name] = event.target.checked ? true : false;
        } else {
            formControlValue[event.target.name] = event.target.value;
        }
        this.setState(formControlValue);
    }
    render() {
        let disabledFlag = (this.props.disableElement) ? true : (false == this.props.autoConfirmation);
        const isVisibleConfirm = !!(this.props.autoConfirmation);
        const isVisibleRadio = !this.state.checkedConfirm;
        //let {iCareHelper.getCookie}
        return (
            <div>
                <Panel header={iCareLocale['place_order.order_confirm']}>
                    <Col md={12} sm={12}>
                        <Form>

                            <FormGroup controlId="promotion_code">
                                {isVisibleConfirm &&
                                <div className="input-group">
                                    <div className="mt-checkbox-list">
                                        <label
                                            className="mt-checkbox mt-checkbox-outline"> {iCareLocale['place_order.order_confirm.auto_confirm']}
                                            ?
                                            <input type="checkbox" value="1" checked={this.state.checkedConfirm}
                                                   name="checkedConfirm" disabled={disabledFlag}
                                                   onChange={this.handleOnChange}/>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                                }
                                {isVisibleRadio&&
                                <div>
                                    <ControlLabel>
                                        {iCareLocale['place_order.order_confirm.confirm_method']}
                                    </ControlLabel>
                                    <div className="mt-radio-list">
                                        <label className="mt-radio">
                                            <input
                                                type="radio"
                                                name="optionsRadios"
                                                id="optionsRadios22"
                                                value="option1"
                                                defaultChecked="checked"/> {iCareLocale['place_order.order_confirm.icare_member_app']}
                                            <span></span>
                                        </label>
                                    </div>
                                </div>}
                            </FormGroup>
                        </Form>
                    </Col>
                </Panel>
            </div>
        );
    }
}
OrderConfirmation.propTypes = {
    disableElement: PropTypes.bool,
    autoConfirmation: PropTypes.number,
};
export default OrderConfirmation;