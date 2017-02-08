import React, {PropTypes} from 'react';
import {Row, Col, Modal, Button, Panel, Form, FormControl, FormGroup, Alert} from 'react-bootstrap';
import OrderDetailOverview from '../OrderDetails/OrderDetailOverview';
import TimeLine from '../OrderDetails/TimeLine';
import BillingInfo from '../OrderDetails/BillingInfo';
import BillingInfoItem from '../OrderDetails/BillingInfoItem';
import DeliveryInfo from '../OrderDetails/DeliveryInfo';
import RepaymentSchedule from '../OrderDetails/RepaymentSchedule';
import Line from '../common/Line';
import _ from 'lodash';

class SaleOrdersDetails extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = {
            showModal: false,
            cancelReason: '',
            typedReason: '',
            showReasonNote: false,
            alertVisible: false
        };
        this.handleBackToSaleOrderList = this.handleBackToSaleOrderList.bind(this);
        this.handleActionCancel = this.handleActionCancel.bind(this);
        this.openConFirmAction = this.openConFirmAction.bind(this);
        this.closeConFirmAction = this.closeConFirmAction.bind(this);
    }

    static defaultProps = {
        reasonKey: [
            "not_interested",
            "not_contact",
            "other"
        ]
    };

    openConFirmAction() {
        this.setState({
            showModal: true
        });
    }

    closeConFirmAction() {
        this.setState({
            showModal: false
        })
    }

    handleBackToSaleOrderList() {
        const order = this.props.order;
        order.isVisible = false;
        this.context.handleUpdateOrderDetail(order);
    }

    prepareDataOfBillingInfo(order){
        let billingInfo = [];

        // Sku - Product Name
        let attribute = '';
        if(_.isUndefined(order.sale_items[0].option) === false
            && _.isArray(order.sale_items[0].option)
            && order.sale_items[0].option.length > 0) {
            attribute = attribute.concat('(');
            order.sale_items[0].option.map(option => {
                attribute = attribute.concat(`${option.title}: ${option.value[0].value}, `);
            });
            attribute = attribute.slice(0, -2);
            attribute = attribute.concat(')');
        }


        billingInfo.push({
            key: 'sku',
            data: {
                name: `${order.sale_items[0].sku} - ${order.sale_items[0].name} 
                ${attribute}`,
                value: order.sale_items[0].price,
                link: '#'
            },
            bold: false
        });

        // Tax
        billingInfo.push({
            key: 'tax',
            data: {
                name: `${iCareLocale.tax_ship} (${Math.round(order.tax_percent)}%)`,
                value: order.tax_amount,
            },
            bold: false
        });

        // Shipping
        billingInfo.push({
            key: 'shipping_fee',
            data: {
                name: iCareLocale.shipping,
                value: order.shipping_amount,
            },
            bold: false
        });

        // Line
        billingInfo.push({key: 'line', data: {name: 'line'}});

        // Order Total
        billingInfo.push({
            key: 'total',
            data: {
                name: iCareLocale.order_total,
                value: order.grand_total,
            },
            bold: true
        });

        // Discount
        billingInfo.push({
            key: 'discount',
            data: {
                name: iCareLocale.discount,
                value: order.discount_amount,
            },
            bold: false
        });

        // Saving Amount
        billingInfo.push({
            key: 'saving_amount',
            data: {
                name: iCareLocale.saving_account,
                value: order.saving_account_amount,
            },
            bold: false
        });

        // Line
        billingInfo.push({key: 'line2', data: {name: 'line'}});

        // Balance
        billingInfo.push({
            key: 'balance',
            data: {
                name: iCareLocale.balance,
                value: _.subtract(order.grand_total, order.saving_account_amount),
            },
            bold: false
        });

        return billingInfo;
    }

    getShippingMethod(key) {
        let shipping_method = '';
        switch (key) {
            case 'pick_up':
                shipping_method = (iCareLocale['sale_order.detail.shipping_method.pick_up'] || '');
                break;
            case 'delivery':
                shipping_method = (iCareLocale['sale_order.detail.shipping_method.delivery'] || '');
                break;
        }
        return shipping_method;
    }

    handleActionCancel() {
        if(_.isEmpty(this.state.cancelReason)) {
            this.setState({
                alertVisible: true
            });
        } else if(this.props.cancelAction) {
            this.closeConFirmAction();
            try {
                const order = this.props.order;
                this.props.cancelAction(order.order_detail.increment_id, this.state.cancelReason);
            } catch (err) {
                console.log(err);
            }
        } else {
            // TODO: cancel action not found
        }
    }

    render() {
        const order = this.props.order;

        // Prepare billingInfo
        let billingInfo = this.prepareDataOfBillingInfo(order.order_detail);

        // Prepare deliveryInfo
        let deliveryInfo = {
            title: this.getShippingMethod(order.shipping_method),
            name: `${order.order_detail.firstname} ${order.order_detail.lastname}`,
            address: `${order.order_detail.shipping_info.street}, ${order.order_detail.shipping_info.district}, ${order.order_detail.shipping_info.city}`
        };

        // Get class name to set color by status
        const className = (() => {
            if(_.isUndefined(this.context.getStatusClass) === false)
                return this.context.getStatusClass(order.order_detail.status);
            return null;
        })();

        // HTML showing status in order history (TimeLine component)
        const titleTimeLine = (
            <div>
                {iCareLocale['sale_order.detail.timeline']}
                <span className={`${className} pull-right`}>
                    {_.capitalize(iCareLocale[`orders.status.${order.order_detail.status}`] || '')}
                </span>
            </div>
        );

        // Data of order Payment
        const orderPayment = (() => {
            if(_.isEmpty(order.order_repayment)) return {};
            return order.order_repayment;
        })();


        // Check order can cancel
        let cancelFlag = true;
        if(_.isUndefined(order.order_detail) == false
            && _.isUndefined(order.order_detail.status) == false) {
            switch (order.order_detail.status) {
                case 'canceled':
                case 'delivered':
                case 'complete':
                    cancelFlag = false;
                    break;
            }
        }

        // HTML header on sale order detail
        const header = (
            <div className="text-center">
                <a href="javascript:;"
                   className="pull-left"
                   onClick={this.handleBackToSaleOrderList}>
                    <i className="fa fa-angle-left"></i> {iCareLocale['sale_order.detail.back']}
                </a>
                <strong>{iCareLocale['sale_order.order']} {order.order_detail.increment_id}</strong>

                {cancelFlag && this.props.cancelAction &&
                <span className="pull-right actions">
                    <a href="javascript:;"
                       className="btn red-mint"
                       onClick={this.openConFirmAction}
                    >
                        {iCareLocale['sale_order.action.cancel']}
                    </a>
                </span>
                }
            </div>
        );

        return (
            <div>
                <Panel className="sales-order-details" header={header}>
                    <OrderDetailOverview>
                        <Row>
                            <Col md={6}>
                                <TimeLine title={titleTimeLine} history={order.order_history}/>
                                <BillingInfo>
                                    {billingInfo.map(info => {
                                        if(info.data.name !== 'line') {
                                            return <BillingInfoItem
                                                key={info.key}
                                                bold={info.bold}
                                                name={info.data.name}
                                                link={info.data.link}
                                                value={info.data.value} />
                                        } else {
                                            return <Line key={info.key} />
                                        }
                                    })}
                                </BillingInfo>
                            </Col>
                            <Col md={6}>
                                <DeliveryInfo
                                    title={deliveryInfo.title || ''}
                                    name={deliveryInfo.name || ''}
                                    address={deliveryInfo.address} />
                                <RepaymentSchedule repayment={orderPayment}/>
                            </Col>
                        </Row>
                    </OrderDetailOverview>
                </Panel>

                <Modal
                    show={this.state.showModal || false}
                    animation={true}
                    backdrop="static"
                    onHide={this.closeConFirmAction}
                    className="confirm"
                >
                    <Form>
                        <Modal.Header>
                            <Modal.Title>
                                {iCareLocale['sale_order.action.cancel.reason']}
                            </Modal.Title>
                        </Modal.Header>
                        <Modal.Body>
                            {this.state.alertVisible &&
                            <Alert bsStyle="danger" onDismiss={() => {
                                this.setState({
                                    alertVisible: false
                                })
                            }}>
                                {iCareLocale['sale_order.action.cancel.error']}
                            </Alert>
                            }

                            <FormGroup>
                                <div className="mt-radio-list">
                                    <label className="mt-radio"> {iCareLocale['sale_order.action.cancel.reason_1']}
                                        <input type="radio" value={this.props.reasonKey[0]} name="reason" onChange={() => {
                                            this.setState({
                                                showReasonNote: false,
                                                cancelReason: (iCareLocale['sale_order.action.cancel.reason_1'] || '')
                                            })
                                        }}/>
                                            <span></span>
                                    </label>
                                    <label className="mt-radio"> {iCareLocale['sale_order.action.cancel.reason_2']}
                                        <input type="radio" value={this.props.reasonKey[1]} name="reason" onChange={() => {
                                            this.setState({
                                                showReasonNote: false,
                                                cancelReason: (iCareLocale['sale_order.action.cancel.reason_2'] || '')
                                            })
                                        }}/>
                                            <span></span>
                                    </label>
                                    <label className="mt-radio"> {iCareLocale['sale_order.action.cancel.reason_3']}
                                        <input type="radio" value={this.props.reasonKey[2]} name="reason" onChange={() => {
                                            this.setState({
                                                showReasonNote: true,
                                                cancelReason: (this.state.typedReason || null)
                                            })
                                        }}/>
                                            <span></span>
                                    </label>

                                    {this.state.showReasonNote &&
                                        <FormControl componentClass="textarea" rows={5} value={this.state.typedReason} onChange={(event) => {
                                            this.setState({
                                                cancelReason: event.target.value,
                                                typedReason: event.target.value
                                            })
                                        }}/>
                                    }

                                </div>
                            </FormGroup>

                        </Modal.Body>

                        <Modal.Footer>
                            <Button onClick={this.closeConFirmAction}>{iCareLocale['sale_order.action.cancel.skip']}</Button>
                            <Button className="btn red-mint" onClick={this.handleActionCancel}>{iCareLocale['sale_order.action.cancel.confirm']}</Button>
                        </Modal.Footer>
                    </Form>
                </Modal>
            </div>
        );
    }
}

SaleOrdersDetails.propTypes = {
    order: PropTypes.object.isRequired,
    cancelAction: PropTypes.func
};

SaleOrdersDetails.contextTypes = {
    handleUpdateOrderDetail: PropTypes.func,
    getStatusClass: PropTypes.func
};

export default SaleOrdersDetails;