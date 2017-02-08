import React, {PropTypes} from 'react';
import {Modal, Row, Col, Panel, Well} from 'react-bootstrap';
import ShippingAdress from './ShippingAddress';
import PickUpLocation from '../Product/PickUpLocation';
import {FormattedNumber} from 'react-intl';
import _ from 'lodash';

class ShippingMethod extends React.Component {
    constructor(props, context) {
        super(props, context);

        this.state = {
            showModal: false,
            shippingType: '',
            shippingAddress: {},
            modal_title: '',
            address1: '',
            address2: '',
            type: ''
        };
        this.close = this.close.bind(this);
        this.open = this.open.bind(this);
        this.handleSelectShippingAddress = this.handleSelectShippingAddress.bind(this);
    }

    close() {
        this.setState({
            showModal: false
        });
    }


    open(type) {
        this.setState({
            showModal: true,
            shippingType: type,
            modal_title: (type === "delivery") ?
                iCareLocale.enter_shipping :
                iCareLocale.pickup_location
        });
    }

    handleSelectShippingAddress(address){
        if(this.state.shippingType === 'delivery'){
            this.setState({
                shippingAddress : address,
                showModal: false,
                address1: address.address, address2: address.district+", "+address.province,
                type: address.type
            }, () => {
                this.props.onDispatchState(
                    'refShippingMethod',
                    this.state
                );
            });
        } else {
            this.setState({
                shippingAddress : address,
                showModal: false,
                address1: address.full_name, address2:  address.street +", " + address.city +", "+ address.country,
                type: address.type
            }, () => {
                this.props.onDispatchState(
                    'refShippingMethod',
                    this.state
                );
            });
        }
    }

    render() {
        const address = this.state.shippingAddress;
        let customer = this.props.customer;

        let modal_body = (()=> {
            switch (this.state.shippingType) {
                case "delivery" :
                    return <ShippingAdress
                        setShippingAdress={this.handleSelectShippingAddress}
                        customer={customer}/>;
                case "pickup":
                    return <PickUpLocation setShippingAdress={this.handleSelectShippingAddress}/>
            }

            return "";
        })();

        let shippingFee = (() => {
            if(_.isUndefined(this.props.shippingFee)) return "";

            if(this.state.type === "Delivery location" && this.props.shippingFee == 0) {
                return `(${iCareLocale.free})`;
            } else if(this.state.type === "Delivery location" && this.props.shippingFee != 0){
                return <FormattedNumber
                    value={this.props.shippingFee}
                    style='currency'
                    minimumFractionDigits={0}
                    currency={iCareCurrency}/>
            }
        })();

        return (
            <div>
                <Panel header={iCareLocale.shipping_method}>
                    <Row>

                        <Col md={6}>
                            <div className="btn default tt-box"
                                 onClick={() => this.open("pickup")}
                                 ref="pcikup"
                            >
                                <div className="tt-body">
                                    {(this.state.type === "Pick-up location") ? <div className="tt-content">
                                        <h4><i className="fa fa-hand-stop-o font-green"></i> {iCareLocale.pick_up}</h4>
                                        <p className="green">(free)</p>
                                    </div> : <div className="tt-content">
                                        <h4><i className="fa fa-hand-stop-o font-blue-madison"></i> {iCareLocale.pick_up}</h4>
                                        <p></p>
                                    </div>}

                                </div>
                            </div>
                        </Col>

                        <Col md={6}>
                            <div className="btn default tt-box"
                                 onClick={() => this.open("delivery")}
                                 ref="delivery"
                            >
                                <div className="tt-body">
                                    {(this.state.type === "Delivery location") ?
                                        (
                                            <div className="tt-content">
                                                <h4><i className="fa fa-truck font-green"></i> {iCareLocale.delivery}</h4>
                                                <p className="green">{shippingFee}</p>
                                            </div>
                                        ) :
                                        (
                                            <div className="tt-content">
                                            <h4><i className="fa fa-truck font-blue-madison"></i> {iCareLocale.delivery}</h4>
                                        </div>
                                        )
                                    }
                                </div>
                            </div>
                        </Col>

                        {(Object.getOwnPropertyNames(address).length > 0) ?
                            (
                                <Col md={12}>
                                    <Well className="bg-white bg-font-white">
                                        <strong>{this.state.type}:</strong>
                                        <p>{this.state.address1}</p>
                                        <p>{this.state.address2}</p>
                                    </Well>
                                </Col>
                            ) :
                            (<div></div>)
                        }
                    </Row>
                </Panel>

                <Modal
                    show={this.state.showModal || false}
                    onHide={this.close}
                    bsSize="large"
                    aria-labelledby="contained-modal-title-lg"
                >
                    <Modal.Header closeButton>
                        <Modal.Title>{this.state.modal_title}</Modal.Title>
                    </Modal.Header>

                    <Modal.Body className="bg-default">
                        {modal_body}
                    </Modal.Body>
                </Modal>
            </div>
        );
    }
}
ShippingMethod.propTypes = {
    onDispatchState: PropTypes.func,
};
export default ShippingMethod;