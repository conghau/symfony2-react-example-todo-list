import React, {PropTypes} from 'react';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import * as callListActions from '../../../actions/CallList/callListActions';
import {Row, Col, Panel, Button, Modal} from 'react-bootstrap';
import Promotion from './Promotion';
import OrderConfirmation from './OrderConfirmation';
import CreditInformation from './CreditInformation';
import ProductExplore from './ProductExplore';
import ShippingMethod from '../SaleOrder/ShippingMethod';
import OrderSummary from '../SaleOrder/OrderSummary';
import _ from 'lodash';

class ProductPlaceOrder extends React.Component {
    constructor(props, context) {
        super(props, context);
        this.state = this.initState();
        this.handlePlaceOrder = this.handlePlaceOrder.bind(this);
        this.handleCalculateOrder = this.handleCalculateOrder.bind(this);
        this.onDispatchState = this.onDispatchState.bind(this);
    }

    initState() {
        return {
            shippingMethod: {},
            autoConfirmation: _.parseInt(iCareUserMoreInfo.isConfirm) || 0,
            dataOrder: {},
            canPlaceOrder: false,
            dataToPlaceOrder: {},
            couponCode: '',
            dataCalculate: {},
            isShowModalConfirm: false,
            hasConfirmInModal: false,
            insufficient_credit: false,
            insufficient_due: false,
            calculateOrder: true
        };
    }

    getChildContext() {
        return {
            customer: this.props.customer,
            onDispatchState: this.onDispatchState
        }
    }

    componentWillMount() {
        this.handleCheck();
    }

    componentWillReceiveProps() {
        this.handleCheck();
    }

    onDispatchState(key, value) {
        let newState = {};
        newState[key] = value;
        this.setState(newState, () => {
            this.handleCheck();
        });
    }

    handlePlaceOrder(hasConfirm = false) {
        let customer = this.props.customer;
        //check customer is active or not
        let isInActive = customer.profiles.is_active == 1;

        // let hasConfirm = this.state.hasConfirmInModal || false;
        if (false === isInActive && false === hasConfirm) {
            this.setState({
                isShowModalConfirm: true
            });
        } else {
            let data = this.state.dataToPlaceOrder;
            data['cartId'] = this.state.dataOrder.cart_id;
            let confirm = this.refs.refOrderConfirm.state.checkedConfirm;
            //this.props.actions.placeOrderAction(data).then(value => {
            this.setState({canPlaceOrder : false, dataOrder: {}, dataCalculate: {}, calculateOrder: false}, () => {
                this.context.handlePlaceOrder(data).then(value => {
                    if (value.code == 200 && confirm === false) {
                        this.props.onHidePlaceOrder(value.order);
                        this.context.handleLoadSaleOrders(this.props.customer.id);
                    } else if (value.code == 200 && confirm === true) {
                        //this.props.actions.confirmOrderAction({incrementId: value.order.increment_id}).then(response => {
                        this.context.handleConfirmOrder(value.order.increment_id).then(response => {
                            if (response.code == 200) {
                                this.props.onHidePlaceOrder(value.order);
                                this.context.handleLoadSaleOrders(this.props.customer.id);
                            }
                        });
                    } else {
                        this.setState({calculateOrder: true});
                        // TODO: Add action
                    }
                });
            });

        }
    }

    handleCalculateOrder() {
        if(this.state.calculateOrder == false) return false;
        // Check Product
        if (this.props.products.length === 0) return false;

        let itemId, itemInstallment, optionValues = [];
        let product = this.props.products[0];
        itemId = product.id;
        itemInstallment = product.id;
        if (product.chooseOption) {
            for (let id in product.chooseOption) {
                optionValues.push({
                    id: id,
                    value: product.chooseOption[id]
                });
            }
        }

        let refCreditInfo = (this.state.refCreditInfo || null);
        let refShippingMethod = (this.state.refShippingMethod || null);
        let savingAmount = (_.isUndefined(refCreditInfo.useSavingAccount) === false && refCreditInfo.useSavingAccount) ?
            refCreditInfo.savingAccount :
            0;
        let data = {
            customerId: this.props.customer.id,
            itemId: itemId,
            qty: 1,
            itemInstallment: itemInstallment,
            savingAccount: (parseFloat(savingAmount) > 0),
            savingAmount: savingAmount,
            addressIcareId: _.isUndefined(refShippingMethod.shippingAddress.address_id) === false ?
                refShippingMethod.shippingAddress.address_id
                : 0,
        };

        if (_.isEmpty(optionValues) === false) {
            data = _.assign(data, {
                optionValues: optionValues
            })
        }

        let refPromotion = (this.state.refPromotion || null);
        if (_.isEmpty(refPromotion) === false) {
            data = _.assign(data, {
                couponCode: refPromotion.couponCode
            });
        }

        let moreData = {};
        if (refShippingMethod.shippingType === "pickup") {
            moreData = {
                shippingMethod: 1,
                customerAddressId: this.props.customer.address_id
            };
        } else {
            if (this.props.customer.street != refShippingMethod.shippingAddress.address
                || this.props.customer.city != refShippingMethod.shippingAddress.province
                || this.props.customer.district != refShippingMethod.shippingAddress.district
                || this.props.customer.postcode != refShippingMethod.shippingAddress.postal_code) {
                moreData = {
                    shippingMethod: 2,
                    addressValue: [{
                        street: refShippingMethod.shippingAddress.address,
                        postcode: refShippingMethod.shippingAddress.postal_code,
                        city: refShippingMethod.shippingAddress.province,
                        district: refShippingMethod.shippingAddress.district,
                        country: refShippingMethod.shippingAddress.country_code,
                        telephone: refShippingMethod.shippingAddress.phone
                    }]
                };
            } else {
                moreData = {
                    shippingMethod: 2
                };
            }
        }

        data = _.assign(data, moreData);

        if (_.isUndefined(this.context.handleCalculationOrder) === false
            && _.isEqual(data, this.state.dataCalculate) === false) {
            App.blockUI({
                target: '.clsOrderSummary',
                animate: true
            });
            this.context.handleCalculationOrder(data).then(response => {

                if (_.isEmpty(response)) {
                    this.setState({
                        dataCalculate: data
                    });
                } else {
                    if (this.state.insufficient_credit === false &&
                        this.state.insufficient_due === false) {
                        this.setState({
                            dataOrder: response[0],
                            canPlaceOrder: true,
                            dataToPlaceOrder: data,
                            dataCalculate: data
                        });
                    } else if (this.state.insufficient_credit == true ||
                        this.state.insufficient_due === true) {
                        this.setState({
                            dataOrder: response[0],
                            dataToPlaceOrder: data,
                            dataCalculate: data
                        });
                    } else {
                        // Todo: missing condition
                    }

                }

                App.unblockUI('.clsOrderSummary');
            });
        }

    }

    handleCheck() {

        // Check Product
        if (this.props.products.length === 0) return false;

        let product = this.props.products[0];
        let credits = this.props.customer.credits;
        let installment = parseFloat(product.price) / parseFloat((product.installment[0].month || 1));
        if (parseFloat(credits.available_credit_limit || 0) < parseFloat(product.price)) {
            this.setState({
                canPlaceOrder: false,
                insufficient_credit: true
            });
        } else {
            this.setState({
                insufficient_credit: false
            });
        }

        if (parseFloat(credits.available_due_limit || 0) < parseFloat(installment)) {
            this.setState({
                canPlaceOrder: false,
                insufficient_due: true
            });
        } else {
            this.setState({
                insufficient_due: false
            });
        }

        let shippingMethod = this.state.refShippingMethod || {};
        let shippingAddress = (shippingMethod.shippingAddress || null);
        if (_.isEmpty(shippingAddress)
            || shippingMethod.showModal == true) {
            return false;
        }

        this.handleCalculateOrder();

    }

    prepareDataOrder(dataRespone) {
        let dataPlaceOrder = this.state.dataToPlaceOrder || {};
        let saving_acc_deduct = dataPlaceOrder.savingAmount;
        let balance = _.subtract(dataRespone.grand_total, dataPlaceOrder.savingAmount || 0);
        let sub_total = dataRespone.subtotal_with_discount;
        let tax = dataRespone.tax_amount;
        let shipping = dataRespone.shipping_amount;
        let order_total = dataRespone.grand_total;

        //check
        if (dataRespone.grand_total < dataPlaceOrder.savingAmount) {
            saving_acc_deduct = dataRespone.grand_total;
            balance = 0;
        }

        if (_.isEmpty(dataRespone) &&
            this.props.products.length > 0) {

            let product = this.props.products[0];
            sub_total = parseFloat(product.final_price);
            if (_.isUndefined(product.tax_info) === false && _.isEmpty(product.tax_info) === false) {
                tax = parseFloat((product.final_price * product.tax_info[0].tax_percent) / 100);
            } else {
                tax = 0;
            }
            order_total = sub_total + tax;

            if (_.isUndefined(this.state.refCreditInfo) === false) {
                let refCreditInfo = this.state.refCreditInfo;
                if (refCreditInfo.useSavingAccount) {
                    saving_acc_deduct = (refCreditInfo.savingAccount > order_total) ?
                        order_total :
                        refCreditInfo.savingAccount;

                    balance = (() => {
                        let result = parseFloat(order_total) - parseFloat(saving_acc_deduct);
                        return (result > 0) ? result : 0;
                    })();
                }else{
                    balance = order_total;
                }
            } else if (this.props.customer.credits.current_saving_account > 0) {
                saving_acc_deduct = (this.props.customer.credits.current_saving_account > order_total) ?
                    order_total :
                    this.props.customer.credits.current_saving_account;

                balance = (() => {
                    let result = parseFloat(order_total) - parseFloat(saving_acc_deduct);
                    return (result > 0) ? result : 0;
                })();
            } else {
                balance = order_total;
            }
        }

        return {
            sub_total: sub_total,
            tax: tax,
            shipping: shipping,
            order_total: order_total,
            saving_acc_deduct: saving_acc_deduct,
            balance: balance,
        }
    }

    hideModal() {
        this.setState({
            isShowModalConfirm: false
        });
    }

    confirmModal() {
        this.setState({
            isShowModalConfirm: false
        }, () => {
            this.handlePlaceOrder(true);
        });
    }

    render() {
        const customerCredit = this.props.customer.credits || {};
        let isDisabledElement = this.props.products.length === 0;
        let customer = this.props.customer.profiles;
        if (_.isEmpty(this.state.dataCalculate.addressValue) == false && this.state.dataCalculate.shippingMethod == 2) {
            customer.street = this.state.dataCalculate.addressValue[0].street;
            customer.city = this.state.dataCalculate.addressValue[0].city;
            customer.district = this.state.dataCalculate.addressValue[0].district;
            customer.postcode = this.state.dataCalculate.addressValue[0].postcode;
        }
        let isShowModalConfirm = this.state.canPlaceOrder && this.state.isShowModalConfirm;
        let isInActive = (customer.is_active == 0);
        return (
            <Row>
                <Col md={7}>
                    <ProductExplore
                        products={this.props.products}
                        customerId={this.props.customer.id || null}
                    />
                    <ShippingMethod
                        customer={customer}
                        shippingFee={this.state.dataOrder.shipping_amount}
                        onDispatchState={this.onDispatchState}
                        ref="refShippingMethod"
                    />
                    <CreditInformation
                        currentSavingAccount={customerCredit.current_saving_account || 0}
                        availableCreditLimit={customerCredit.available_credit_limit || 0}
                        availableDueLimit={customerCredit.available_due_limit || 0}
                        disableElement={isDisabledElement}
                        onDispatchState={this.onDispatchState}
                        ref="refCreditInfo"
                        insufficient_due={this.state.insufficient_due}
                        insufficient_credit={this.state.insufficient_credit}
                    />
                </Col>
                <Col md={5}>
                    <div id="OrderSummary" className="clsOrderSummary">
                        <OrderSummary
                            ref="refOrderSummary"
                            dataOrder={this.prepareDataOrder(this.state.dataOrder)}
                        />
                    </div>
                    <div>
                        <Promotion
                            disableElement={!this.state.canPlaceOrder}
                            couponCode={this.state.couponCode}
                            ref="refPromotion"
                            onDispatchState={this.onDispatchState}
                        />
                    </div>
                    <div>
                        <OrderConfirmation
                            disableElement={isDisabledElement}
                            autoConfirmation={this.state.autoConfirmation}
                            ref="refOrderConfirm"
                        />
                    </div>
                    <div>
                        <Button
                            bsStyle="primary"
                            bsSize="large"
                            disabled={(isInActive || !this.state.canPlaceOrder)}
                            onClick={() => this.handlePlaceOrder()}
                            className="btn green"
                            block>
                            {iCareLocale.place_order}
                        </Button>
                    </div>
                    <div></div>
                </Col>
                {isShowModalConfirm &&
                <div className="confirm-placeorder-modal">
                    <Modal.Dialog>
                        <Modal.Header>
                            <Modal.Title>{iCareLocale.confirm_place_order_title}</Modal.Title>
                        </Modal.Header>

                        <Modal.Body>
                            {iCareLocale.confirm_place_order_for_inactive}
                        </Modal.Body>

                        <Modal.Footer>
                            <Button onClick={() => this.hideModal()}>No</Button>
                            <Button onClick={() => this.confirmModal()} bsStyle="primary">Yes</Button>
                        </Modal.Footer>

                    </Modal.Dialog>
                </div>
                }
            </Row>
        );
    }
}

ProductPlaceOrder.propTypes = {
    customer: PropTypes.object.isRequired,
    products: PropTypes.array,
    onHidePlaceOrder: PropTypes.func
};

ProductPlaceOrder.contextTypes = {
    handleCalculationOrder: PropTypes.func,
    handleLoadSaleOrders: PropTypes.func,
    handlePlaceOrder: PropTypes.func,
    handleConfirmOrder: PropTypes.func
};

ProductPlaceOrder.childContextTypes = {
    customer: PropTypes.object,
    useSavingAccount: PropTypes.bool,
    savingAccount: PropTypes.string,
    onDispatchState: PropTypes.func
};

function getProductsByCustomerId(products, customerId) {
    if (products.length === 0) return [];
    return products.filter(product => product.customer_id === customerId);
}

function mapStateToProps(state, ownProps) {
    // Currently: Products always have 1 item.
    return {
        placeOrderLists: state.callList.placeOrderLists || [],
        products: getProductsByCustomerId(
            state.callList.placeOrderLists,
            ownProps.customer.id
        )
    };
}

function mapDispatchToProps(dispatch) {
    return {
        actions: bindActionCreators(callListActions, dispatch)
    };
}

export default connect(mapStateToProps, mapDispatchToProps)(ProductPlaceOrder);