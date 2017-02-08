import React, {PropTypes} from 'react';
import {Tabs, Tab, Modal} from 'react-bootstrap';
import CustomerOverview from './CustomerOverview';
import CustomerHistory from './CustomerHistory';
import ProductPlaceOrder from '../Product/ProductPlaceOrder';
import CompanyOverview from './CompanyOverview';
import EnterCallResult from './EnterCallResult';
import _ from 'lodash';
import * as globalConstant from '../../common/constant';
import * as callListActions from '../../../actions/CallList/callListActions';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import { Switch, Case, Default } from 'jsx-switch';
import {toastr} from 'react-redux-toastr';

class CustomerListItem extends React.Component {
    constructor(props, context) {
        super(props, context);

        this.state = {
            isPlaceOrder: false,
            isCollapsed: false,
            showModal: false,
            company: {},
            pageNum: 1,
            customerId: this.props.customer.id,
            pageSize: parseInt(globalConstant.PAGE_SIZE),
            call: false,
            callLog: {},
            callLogs: []
        };
        this.onToolsActionClick = this.onToolsActionClick.bind(this);
        this.onPlaceOrderToggle = this.onPlaceOrderToggle.bind(this);
        this.onShowPlaceOrder = this.onShowPlaceOrder.bind(this);
        this.onHidePlaceOrder = this.onHidePlaceOrder.bind(this);
        this.handleSelect = this.handleSelect.bind(this);
        this.handleCallClick = this.handleCallClick.bind(this);
        this.open = this.open.bind(this);
        this.close = this.close.bind(this);
        this.handleLoadCallLog = this.handleLoadCallLog.bind(this);
        this.handleClickPage = this.handleClickPage.bind(this);
        this.handleSaveCallLog = this.handleSaveCallLog.bind(this);
        this.handleUpdateCallLog = this.handleUpdateCallLog.bind(this);
    }

    componentWillMount() {
        let customer = this.props.customer;
        let customerCalling = this.props.customerCalling;

        try {
            if(customerCalling.customer_id
                && customerCalling.customer_id == customer.id) {
                this.setState({
                    call: true,
                    callLog: customerCalling
                });
            } else {
                this.setState({
                    call: false,
                    callLog: {}
                });
            }
        } catch (err) {}
    }

    onToolsActionClick() {

        this.setState({
            isCollapsed: !this.state.isCollapsed
        }, () => {
            const customer = this.props.customer;
            if(!customer.isLoadedDetails) {
                this.props.handleLoadDetail(
                    customer.organization_id,
                    (customer.telephone || customer.social_id),
                    customer.website_id);
            }
        });


    }

    onPlaceOrderToggle() {
        this.setState({
            isPlaceOrder: !this.state.isPlaceOrder,
            isCollapsed: true
        }, () => {
            const customer = this.props.customer;
            if(!customer.isLoadedDetails) {
                this.props.handleLoadDetail(
                    customer.organization_id,
                    (customer.telephone || customer.social_id),
                    customer.website_id);
            }
        });
    }

    onShowPlaceOrder() {
        this.setState({
            isPlaceOrder: true
        });
    }

    onHidePlaceOrder(order) {
        this.setState({
            isPlaceOrder: false,
            orderCreated: _.isEmpty(order) ? {} : order
        });
    }

    handleSelect(activeKey) {
        switch (activeKey) {
            case 2:
                if (_.isEmpty(this.state.company) && !_.isUndefined(this.props.handleLoadCompany)) {
                    App.blockUI({
                        target: `#company-overview-${this.props.customer.id}`,
                        animate: true
                    });
                    this.props.handleLoadCompany(this.props.customer.organization_id).then(data => {
                        this.setState({
                            company: data
                        });
                        App.unblockUI(`#company-overview-${this.props.customer.id}`);
                    });
                }
                break;
            case 3:
                let pageSize = this.state.pageSize;
                let customerId = this.state.customerId;
                let pageNum = this.state.pageNum;
                this.handleLoadCallLog(customerId, pageNum, pageSize);
                break;
        }
    }

    handleCallClick() {
        // Check customer (iCare Member) is inactive, so can not do calling action.
        const customer = this.props.customer;
        if(_.isUndefined(customer.is_active) === false
            && customer.is_active == false) {
            let error = (iCareLocale['customer.message_inactive'] || 'Unable to place a call. This iCare Member is inactive.');
            toastr.error(error);
            return;
        }

        let th = this;

        if(this.state.call == false) {
            this.props.actions.getCallingAction(iCareUserMoreInfo.userId).then(response => {
                if (response.code === 200){
                    toastr.error(iCareLocale['call_log.calling_another_icare_member']);
                } else {
                    th.props.actions.getLastCallAction(th.state.customerId).then(res => {
                        if(res.code == 200){
                            let lastEndCall = res.lastCall.call_end;
                            if (res.call_step != "calling"){
                                if (moment().diff(lastEndCall, 'days') >= iCareLimitDays){
                                    th.setState(
                                        {call: true},
                                        () => {

                                            let date = moment.utc().format('YYYY-MM-DD\\TH:mm:ss');
                                            let data = {
                                                "status": "enabled",
                                                "customer_id": this.state.customerId,
                                                "customer_name": this.props.customer.full_name,
                                                "call_start": date,
                                                "call_step": "calling"
                                            };
                                            this.handleSaveCallLog(data);
                                            data['user_id'] = iCareUserMoreInfo.userId;
                                            this.props.actions.setCustomerCalling(data);
                                        });
                                } else {
                                    toastr.error(iCareLocale['call_log.more_then_15']);
                                }
                            } else {
                                toastr.error(iCareLocale['call_log.icare_member_calling']);
                            }
                        } else {
                            th.setState(
                                {call: true},
                                () => {
                                    let date = moment.utc().format('YYYY-MM-DD\\TH:mm:ss');
                                    let data = {
                                        "status": "enabled",
                                        "customer_id": this.state.customerId,
                                        "customer_name": this.props.customer.full_name,
                                        "call_start": date,
                                        "call_step": "calling"
                                    };
                                    this.handleSaveCallLog(data);
                                    data['user_id'] = iCareUserMoreInfo.userId;
                                    this.props.actions.setCustomerCalling(data);
                            });
                        }
                    });
                }
            });
        } else {
            if(_.isEmpty(this.state.orderCreated) == false){
                this.setState({
                        call: false},
                    () => {
                        let date = moment.utc().format('YYYY-MM-DD\\TH:mm:ss');
                        let callLog = this.state.callLog;
                        callLog.note = "order created: "+this.state.orderCreated.increment_id;
                        callLog.call_step = "call_end";
                        callLog.call_end = date;
                        callLog.call_result_code = "order_created";
                        this.handleUpdateCallLog(callLog.id, callLog);
                    });
            } else{
                this.setState({
                    //call: false,
                    isPlaceOrder: false,
                    showModal: true
                });
            }
        }
    }

    handleSaveCallLog(data){
        let th = this;
        this.props.actions.saveCallLogAction(data).then(res => {
            if (res.code == 200) {
               th.setState({callLog : res.callLog}, () => {
                   this.props.actions.setCustomerCalling(this.state.callLog);
               });
            } else {
                // TODO: Add action
            }
        });
    }

    handleUpdateCallLog(id, data, reminderTime){
        let th = this;
        this.props.actions.updateCallLogAction(id, data).then(res => {
            if (res.code == 200) {
                th.setState({
                    callLog : res.callLog,
                    showModal: false,
                    call: false
                }, () => {
                    this.props.actions.setCustomerCalling({});
                });
            } else {
                // TODO: Add action
            }
        });

        if(data.call_result_code == 'call_back_later'){
            let dataPost = {
                "status": "enabled",
                "customer_id": this.props.customer.id,
                "customer_name": this.props.customer.full_name,
                "customer_phone": this.props.customer.telephone,
                "reminder_time": reminderTime
            };

            this.props.actions.saveReminderAction(dataPost);
        }
    }

    close() {
        this.setState({
            showModal: false
        });
    }

    open(type) {
        this.setState({
            showModal: true
        });
    }

    handleLoadCallLog(id, pageNum, pageSize){
        let th = this;
        App.blockUI({
            target: ".call-log-history-"+this.state.customerId,
            animate: true
        });
        this.props.actions.loadCallLog(id, pageNum, pageSize).then(response => {
            if(response.code == 200){
                th.setState({callLogs: response.callLogs});
            }else{

            }

            App.unblockUI('.call-log-history-'+this.state.customerId);
        });
    }

    handleClickPage(pageNumber) {
        let pageSize = this.state.pageSize;
        let customerId = this.state.customerId;
        this.setState({pageNum: pageNumber}, () => {
            this.handleLoadCallLog(customerId, pageNumber, pageSize);
        });
    }

    render() {
        const customer = this.props.customer;
        return (
            <div className="portlet box grey">
                <div className="portlet-title">
                    <div className="caption">
                        <Switch>
                            <Case expr={this.state.call == true}>
                                <span className="circle-end-call">
                                    <i className="material-icons shake" onClick={this.handleCallClick}>call_end</i>
                                </span>
                            </Case>
                            <Default>
                                <span className="circle">
                                    <i className="fa fa-phone" data-hover-content={iCareLocale.call} onClick={this.handleCallClick}></i>
                                </span>
                            </Default>
                        </Switch>
                        <a href="javascript:;" onClick={this.onToolsActionClick}>
                            {customer.full_name}
                        </a>
                    </div>
                    <div className="tools">
                        <a href="javascript:;"
                           className="toggle"
                           onClick={this.onToolsActionClick}>
                            {this.state.isCollapsed ?
                                <i className="fa fa-angle-up"></i> :
                                <i className="fa fa-angle-down"></i>
                            }
                        </a>
                    </div>
                    <div className="actions">
                        <a href="javascript:;"
                           onClick={this.onPlaceOrderToggle}
                           className="btn btn-circle grey-mint btn-outline sbold">
                            {this.state.isPlaceOrder ? (
                                <span><i className="fa fa-street-view"></i> {iCareLocale.icare_member}</span>
                            ) : (
                                <span><i className="fa fa-plus"></i> {iCareLocale.place_order}</span>
                            )}
                        </a>
                    </div>

                </div>

                <Modal
                    show={this.state.showModal || false}
                    bsSize="large"
                    backdrop = "static"
                    keyboard={false}
                    onHide={this.close}
                    aria-labelledby="contained-modal-title-lg">
                    <Modal.Header closeButton>
                        <Modal.Title>
                            {iCareLocale.select_call_result}
                        </Modal.Title>
                    </Modal.Header>
                    <Modal.Body className="bg-default">
                        <EnterCallResult handleUpdateCallLog={this.handleUpdateCallLog} callLog={this.state.callLog}/>
                    </Modal.Body>
                </Modal>

                {customer.isLoadedDetails &&
                    <div className="portlet-body tabs-below" style={{"display": (() => {
                        if(this.state.isCollapsed) return 'block';
                        return 'none';
                    })()}}>

                        {this.state.isPlaceOrder ? (
                            <div >
                                <ProductPlaceOrder
                                    customer={customer}
                                    onHidePlaceOrder={this.onHidePlaceOrder}/>
                            </div>
                        ) : (
                            <Tabs defaultActiveKey={1}
                                  onSelect={this.handleSelect}
                                  id={`customer-tab-${customer.id}`}
                                  className="tabbable-line">
                                <Tab eventKey={1} title={iCareLocale['overview']}>
                                    <div>
                                        <CustomerOverview
                                            customer={customer}
                                        />
                                    </div>
                                </Tab>
                                <Tab eventKey={3} title={iCareLocale['call_history']}>
                                    <div className={"call-log-history-" + this.state.customerId}>
                                        <CustomerHistory callLogs={this.state.callLogs} handleClickPage={this.handleClickPage} pageNum={this.state.pageNum}/>
                                    </div>
                                </Tab>
                                <Tab eventKey={2} title={iCareLocale['customer']}>
                                    <div id={`company-overview-${customer.id}`}>
                                        <CompanyOverview company={this.state.company}/>
                                    </div>
                                </Tab>
                            </Tabs>
                        )}

                    </div>
                }
            </div>
        );
    }
}

CustomerListItem.propTypes = {
    customer: PropTypes.object.isRequired,
    handleLoadDetail: PropTypes.func.isRequired,
    handleUpdateCustomer: PropTypes.func.isRequired,
    handleLoadCompany: PropTypes.func
};

function mapStateToProps(state, ownProps) {
    return {
        customerCalling: state.callList.customerCalling
    };
}

function mapDispatchToProps(dispatch) {
    return {
        actions: bindActionCreators(callListActions, dispatch)
    };
}

export default connect(mapStateToProps, mapDispatchToProps)(CustomerListItem);
