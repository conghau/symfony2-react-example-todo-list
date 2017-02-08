import React, {PropTypes} from 'react';
import {Row, Col, Alert} from 'react-bootstrap';
import {connect} from 'react-redux';
import {bindActionCreators} from 'redux';
import * as callListActions from '../../actions/CallList/callListActions';
import CustomerList from 'components/CallList/Customer/CustomerList';
import CustomerListItem from 'components/CallList/Customer/CustomerListItem';
import ProductCheatSheet from 'components/CallList/Product/ProductCheatSheet';
import Loader from 'components/common/Loader';
import '../CallList/CallList.scss';
import SearchBar from 'components/CallList/Customer/SearchBar';
import Pagination from 'rc-pagination';
import 'rc-pagination/assets/index.css';
import * as globalConstant from '../../components/common/constant';
import LOCALE from 'rc-pagination/lib/locale/en_US';
import CallingWidget from 'components/CallList/Customer/CallingWidget';
import _ from 'lodash';

class iCareMemberPage extends React.Component {
    constructor(props, context) {
        super(props, context);

        this.state = {
            alertVisible: true,
            pageNum: 1,
            pageSize: parseInt(globalConstant.PAGE_SIZE),
            dataSearch: {},
        };
        this.handleClickPage = this.handleClickPage.bind(this);
        this.handleLoadCustomerDetail = this.handleLoadCustomerDetail.bind(this);
        this.handleLoadSaleOrders = this.handleLoadSaleOrders.bind(this);
        this.handleLoadSaleOrderDetail = this.handleLoadSaleOrderDetail.bind(this);
        this.handleUpdateOrderDetail = this.handleUpdateOrderDetail.bind(this);
        this.handleUpdateCustomer = this.handleUpdateCustomer.bind(this);
        this.handleSearchCustomer = this.handleSearchCustomer.bind(this);
        this.handleSortCustomer = this.handleSortCustomer.bind(this);
        this.handleGetCompany = this.handleGetCompany.bind(this);
        this.handleSearchProduct = this.handleSearchProduct.bind(this);
        this.handleAlertDismiss = this.handleAlertDismiss.bind(this);
        this.handleAddToOrder = this.handleAddToOrder.bind(this);
        this.handleSearchProduct = this.handleSearchProduct.bind(this);
        this.handleAddToRecently = this.handleAddToRecently.bind(this);
        this.handleLoadOrderDetail = this.handleLoadOrderDetail.bind(this);
        this.handleUpdateProduct = this.handleUpdateProduct.bind(this);
        this.handleLoadProductReviews = this.handleLoadProductReviews.bind(this);
        this.handleCalculationOrder = this.handleCalculationOrder.bind(this);
        this.handleLoadCompany = this.handleLoadCompany.bind(this);
        this.handleLoadCategory = this.handleLoadCategory.bind(this);
        this.handlePlaceOrder = this.handlePlaceOrder.bind(this);
        this.handleConfirmOrder = this.handleConfirmOrder.bind(this);
        this.handleSetActiveCalling = this.handleSetActiveCalling.bind(this);
        this.handleUpdateCallLog = this.handleUpdateCallLog.bind(this);
    }

    getChildContext() {
        return {
            handleLoadSaleOrders: this.handleLoadSaleOrders,
            handleLoadSaleOrderDetail: this.handleLoadSaleOrderDetail,
            handleUpdateOrderDetail: this.handleUpdateOrderDetail,
            handleSortCustomer: this.handleSortCustomer,
            handleSearchProduct: this.handleSearchProduct,
            handleAddToOrder: this.handleAddToOrder,
            handleAddToRecently: this.handleAddToRecently,
            handleLoadOrderDetail: this.handleLoadOrderDetail,
            handleUpdateProduct: this.handleUpdateProduct,
            handleLoadProductReviews: this.handleLoadProductReviews,
            handleCalculationOrder: this.handleCalculationOrder,
            handleUpdateCustomer: this.handleUpdateCustomer,
            handlePlaceOrder: this.handlePlaceOrder,
            handleConfirmOrder: this.handleConfirmOrder,
            handleLoadCategory: this.handleLoadCategory,
            handleSetActiveCalling: this.handleSetActiveCalling,
            handleUpdateCallLog: this.handleUpdateCallLog
        };
    }

    componentWillMount() {
        //this.props.actions.loadCallLists();
        //this.props.actions.searchCompanyAction();


        // Load Customer is calling
        this.props.actions.getCallingByUserId(iCareUserMoreInfo.userId);
    }

    handleLoadCustomerDetail(orgId, keyword, websiteId) {
        this.props.actions.loadCustomerDetail(
            orgId,
            keyword,
            websiteId);
    }

    handleLoadSaleOrders(customerId) {
        this.props.actions.loadSaleOrderLists(customerId);
    }

    handleLoadSaleOrderDetail(orderId) {
        this.props.actions.loadSaleOrderDetail(orderId);
    }

    handleUpdateOrderDetail(order) {
        this.props.actions.updateOrderDetail(order);
    }

    handleUpdateCustomer(customer) {
        this.props.actions.updateCustomer(customer);
    }

    handleSearchCustomer(term) {
        this.setState(previousState => {
            if (!_.isEqual(previousState.dataSearch, term)) {
                previousState.pageNum = 1;
                previousState.dataSearch = term;
            }
        }, () => {
            this.props.actions.searchCustomerAction(Object.assign({}, term, {
                pageSize: this.state.pageSize,
                pageNum: this.state.pageNum
            }))
        });
    }

    handleSortCustomer(sortBy) {
        this.props.actions.loadCallLists();
    }

    handleGetCompany(term) {
        return this.props.actions.searchCompanyAction(term);
    }

    handleSearchProduct(term) {
        this.props.actions.searchProductAction(term);
    }

    handleAlertDismiss() {
        this.setState({alertVisible: false});
    }

    handleClickPage(pageNumber) {
        this.setState({pageNum: pageNumber}, () => {
            this.handleSearchCustomer(this.state.dataSearch)
        });
    }

    handleAddToOrder(product, customerId) {
        this.props.actions.addToOrder(product, customerId);
        this.handleAddToRecently(product);
    }

    handleAddToRecently(product) {
        this.props.actions.addToRecently(product);
    }

    handleLoadOrderDetail(sku, customerId) {
        this.props.actions.loadProductDetailAction(sku, customerId);
    }

    handleUpdateProduct(product) {
        this.props.actions.updateProduct(product);
    }

    handleLoadProductReviews(productId) {
        // this.props.actions.loadProductReview(productId);
        return this.props.actions.loadProductReviewById(productId);
    }

    handleCalculationOrder(data) {
        return this.props.actions.calculateOrderAction(data);
    }

    handlePlaceOrder(data) {
        return this.props.actions.placeOrderAction(data);
    }

    handleConfirmOrder(orderId) {
        return this.props.actions.confirmOrderAction({incrementId: orderId});
    }

    handleLoadCompany(orgId) {
        return this.props.actions.loadCompanyDetail(orgId);
    }

    renderCustomerList(caption, customers, ...arg) {
        if ((this.props.totalCustomerList <= 0)) {
            if (_.isEmpty(this.state.dataSearch)) {
                return (
                    <section className="intro row text-center">
                        <img id="intro-image"
                             alt="The picture showing a call list"
                             className="intro-image img-responsive center-block"
                             src="/bundles/icareweb/img/empty_states/call-list-empty-state.gif"/>

                        <h2>{iCareLocale.icare_member_empty_state_title}</h2>
                        <p>{iCareLocale.icare_member_empty_state_value}</p>
                    </section>
                )
            }
            return (
                <div>
                    {
                        (() => {
                            if (this.state.alertVisible) {
                                return (
                                    <Alert bsStyle="info" onDismiss={this.handleAlertDismiss}>
                                        <span dangerouslySetInnerHTML={
                                            {__html: (iCareLocale['search.no_result'] || '')}
                                            }>
                                        </span>
                                    </Alert>
                                );
                            }
                        })()
                    }

                    <section className="intro row text-center">
                        <img id="intro-image"
                             alt="The picture showing a call list"
                             className="intro-image img-responsive center-block"
                             src="/bundles/icareweb/img/empty_states/no-member.png"/>
                        <h2>{iCareLocale.icare_member_no_result_state_title}</h2>
                        <p>{iCareLocale.icare_member_no_result_state_value}</p>
                    </section>
                </div>
            )
        }

        return (
            <CustomerList caption={caption} handleSortCustomer={this.handleSortCustomer}>
                {customers.map(customer => {
                    if (customer) {
                        return (<CustomerListItem
                            key={customer.id}
                            handleLoadDetail={this.handleLoadCustomerDetail}
                            handleUpdateCustomer={this.handleUpdateCustomer}
                            handleLoadCompany={this.handleLoadCompany}
                            customer={customer}
                        />);
                    } else {
                        return (<div></div>);
                    }
                })}
                <Pagination
                    className="ant-pagination" defaultCurrent={1}
                    current={this.state.pageNum}
                    showTotal={(total, range) => {
                        return `${range[0]} - ${range[1]} of ${total} items`;
                    }}
                    total={_.parseInt(this.props.totalCustomerList)}
                    pageSize={_.parseInt(globalConstant.PAGE_SIZE)} locale={LOCALE}
                    onChange={this.handleClickPage}/>
            </CustomerList>
        );
    }
    
    handleLoadCategory() {
        return this.props.actions.getProductCategory();
    }

    handleSetActiveCalling(data) {
        this.props.actions.setCustomerCalling(data);
    }

    handleUpdateCallLog(id, data) {
        return this.props.actions.updateCallLogAction(id, data);
    }

    render() {
        const customers = this.props.customers;
        const caption = customers.length > 0 ?
            `${iCareLocale.call_list} (${this.props.totalCustomerList})` :
            null;
        return (
            <div id="callList" className="call-list">
                <Row>
                    <Col md={12}>
                        <SearchBar onSearch={this.handleSearchCustomer} handleLoadCompany={this.handleGetCompany}/>
                    </Col>
                </Row>
                <Row>
                    <Col md={8}>
                        {this.renderCustomerList(caption, customers)}
                    </Col>
                    <Col md={4}>
                        <p>&nbsp;</p>
                        {_.isEmpty(this.props.customerCalling) == false &&
                            <CallingWidget callLogs={[this.props.customerCalling]}/>
                        }

                        {/*<ProductCheatSheet />*/}
                    </Col>
                </Row>

                {this.props.loading &&
                <Loader text="Loading..." overlay={true}/>
                }
            </div>
        );
    }
}

iCareMemberPage.propTypes = {
    actions: PropTypes.object.isRequired,
    customers: PropTypes.array.isRequired,
};

iCareMemberPage.childContextTypes = {
    handleLoadSaleOrders: PropTypes.func,
    handleLoadSaleOrderDetail: PropTypes.func,
    handleUpdateOrderDetail: PropTypes.func,
    handleSortCustomer: PropTypes.func,
    handleSearchProduct: PropTypes.func,
    handleAddToOrder: PropTypes.func,
    handleAddToRecently: PropTypes.func,
    handleLoadOrderDetail: PropTypes.func,
    handleUpdateProduct: PropTypes.func,
    handleLoadProductReviews: PropTypes.func,
    handleCalculationOrder: PropTypes.func,
    handleUpdateCustomer: PropTypes.func,
    handlePlaceOrder: PropTypes.func,
    handleConfirmOrder: PropTypes.func,
    handleLoadCategory: PropTypes.func,
    handleSetActiveCalling: PropTypes.func,
    handleUpdateCallLog: PropTypes.func
};

function mapStateToProps(state, ownProps) {
    return {
        customers: state.callList.customerLists,
        loading: state.ajaxCallsInProgress > 0,
        totalCustomerList: state.callList.totalCustomerList,
        customerCalling: state.callList.customerCalling
    };
}

function mapDispatchToProps(dispatch) {
    return {
        actions: bindActionCreators(callListActions, dispatch)
    };
}

export default connect(mapStateToProps, mapDispatchToProps)(iCareMemberPage);
