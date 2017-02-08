/**
 * Created by hautruong on 28/12/2016.
 */
import React, {PropTypes} from 'react';
import {Panel, Col, Form, FormControl, Button, FormGroup} from 'react-bootstrap';

class Promotion extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = {
            couponCode: this.props.couponCode || '',
            btnApply: true,
        };
        this.handleClick = this.handleClick.bind(this);
        this.handleChange = this.handleChange.bind(this);

    }

    handleChange(event) {
        let formControlValue = {};
        formControlValue[event.target.name] = event.target.value;
        formControlValue['btnApply'] = _.isEmpty(event.target.value);
        this.setState(formControlValue);
    }

    handleClick() {
        this.props.onDispatchState(
            'refPromotion',
            this.state
        );
    }

    render() {
        let disabledFlag = this.props.disableElement || false;
        let disabledButton = disabledFlag ? true : this.state.btnApply;
        return (
            <div>
                <Panel header={iCareLocale['place_order.promotion']}>
                    <Col md={12} sm={12}>
                        <div>
                            <FormGroup controlId="promotion_code">
                                <div className="input-group">
                                    <input type="text"
                                           name="couponCode"
                                           className="form-control"
                                           placeholder={iCareLocale['place_order.promotion.enter_coupon_code']}
                                           onChange={
                                               (e) => {this.handleChange(e)
                                               }}
                                           disabled={disabledFlag}/>
                                    <span className="input-group-btn">
                                        <button
                                            className="btn red"
                                            type="button"
                                            name="btnApply"
                                            disabled={disabledButton}
                                            onClick={this.handleClick}>
                                            {iCareLocale['place_order.promotion.apply']} !
                                        </button>
                                    </span>
                                </div>
                            </FormGroup>
                        </div>
                    </Col>
                </Panel>
            </div>
        );
    }
}

Promotion.propTypes = {
    disableElement: PropTypes.bool,
    couponCode: PropTypes.string,
    onDispatchState: PropTypes.func
};

export default Promotion;