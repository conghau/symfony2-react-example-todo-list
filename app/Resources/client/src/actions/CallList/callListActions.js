import * as types from '../actionTypes';
import {beginAjaxCall, ajaxCallError} from '../ajaxStatusActions';
import callListApi from '../../api/CallList/callListApi';
import saleOrderListApi from '../../api/CallList/saleOrderListApi';
import productApi from '../../api/CallList/productApi';
import {toastr} from 'react-redux-toastr';
import _ from 'lodash';

export function loadCallListsSuccess(customers, totalRecords) {
    return {
        type: types.LOAD_CALL_LIST_CUSTOMER_SUCCESS,
        payload: {
            customerLists: customers,
            totalCustomerList: totalRecords,
        }
    };
}

export function loadCallListsError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_CALL_LIST_CUSTOMER_ERROR,
        payload: {
            customerLists: [],
            errors,
            message
        }
    }
}

export function loadCallLists() {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return callListApi.getCallLists().then(data => {
            data.customers.map(customer => {
                customer.isLoadedDetails = false;
            });
            dispatch(loadCallListsSuccess(
                data.customers,
                data.totalRecords
            ));
        }).catch(error => {
            dispatch(loadCallListsError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    };
}

export function loadSaleOrderListsSuccess(payload) {
    return {
        type: types.LOAD_CUSTOMER_SALE_ORDER_LIST_SUCCESS,
        payload
    };
}

export function loadSaleOrderListsError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_CUSTOMER_SALE_ORDER_LIST_ERROR,
        payload: {
            errors,
            message
        }
    }
}

export function loadSaleOrderLists(customerId, pageSize = 5, pageNum = 1) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return saleOrderListApi.getOrderByCustomerId(customerId, pageSize, pageNum).then(saleOrderLists => {
            if (!saleOrderLists) {
                dispatch(loadSaleOrderListsError({}, {type: 'danger', value: 'something_went_wrong'}));
            } else {
                dispatch(loadSaleOrderListsSuccess(
                    {
                        customer_id: customerId,
                        orders: saleOrderLists[0].orders
                    }
                ));
            }
        }).catch(error => {
            dispatch(loadSaleOrderListsError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    };
}

export function loadCustomerDetailSuccess(payload) {
    return {
        type: types.LOAD_CALL_LIST_CUSTOMER_DETAIL_SUCCESS,
        payload
    };
}

export function loadCustomerDetailError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_CALL_LIST_CUSTOMER_DETAIL_ERROR,
        payload: {
            errors,
            message
        }
    }
}

export function loadCustomerDetail(orgId, keyword, websiteId) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        callListApi.getCustomerByKeyword(orgId, keyword, websiteId).then(customer => {
            customer.isLoadedDetails = true;
            dispatch(loadCustomerDetailSuccess(
                customer
            ));
        }).catch(error => {
            dispatch(loadCustomerDetailError({}, {type: 'danger', value: error}), toastr.error(error));
            // throw(error);
        });
    };
}

export function loadSaleOrderDetailSuccess(payload) {
    return {
        type: types.LOAD_CUSTOMER_SALE_ORDER_DETAIL_SUCCESS,
        payload
    };
}

export function loadSaleOrderDetailError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_CUSTOMER_SALE_ORDER_DETAIL_ERROR,
        payload: {
            errors,
            message
        }
    }
}

export function loadSaleOrderDetail(orderIncrementId) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return saleOrderListApi.getSaleOderDetail(orderIncrementId).then(order => {
            if (!order) {
                dispatch(loadSaleOrderDetailError({}, {type: 'danger', value: 'something_went_wrong'}));
            } else {
                order.isLoadedDetails = true;
                order.isVisible = true;
                order.increment_id = orderIncrementId;
                dispatch(loadSaleOrderDetailSuccess(order));
            }
        }).catch(error => {
            dispatch(loadSaleOrderDetailError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    };
}

export function updateOrderDetailSuccess(payload) {
    return {
        type: types.UPDATE_CUSTOMER_SALE_ORDER_DETAIL_SUCCESS,
        payload
    };
}

export function updateOrderDetailError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.UPDATE_CUSTOMER_SALE_ORDER_DETAIL_ERROR,
        payload: {
            errors,
            message
        }
    }
}

export function updateOrderDetail(order) {
    return function (dispatch, getState) {
        dispatch(beginAjaxCall());
        return new Promise((resolve, reject) => {
            resolve(order);
        }).then(order => {
            if (!order) {
                dispatch(updateOrderDetailError({}, {type: 'danger', value: 'something_went_wrong'}));
            } else {
                dispatch(updateOrderDetailSuccess(order));
            }
        }).catch(error => {
            dispatch(updateOrderDetailError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    }
}

export function updateCustomerSuccess(payload) {
    return {
        type: types.UPDATE_CALL_LIST_CUSTOMER_SUCCESS,
        payload
    };
}

export function updateCustomerError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.UPDATE_CALL_LIST_CUSTOMER_ERROR,
        payload: {
            errors,
            message
        }
    }
}

export function updateCustomer(customer) {
    return function (dispatch, getState) {
        dispatch(beginAjaxCall());
        return new Promise((resolve, reject) => {
            resolve(customer);
        }).then(customer => {
            if (!customer) {
                dispatch(updateCustomerError({}, {type: 'danger', value: 'something_went_wrong'}));
            } else {
                dispatch(updateCustomerSuccess(customer
                ));
            }
        }).catch(error => {
            dispatch(updateCustomerError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    }
}
export function searchCustomerAction(dataSearch) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return callListApi.searchCustomer(dataSearch).then(data => {
            let totalRecords = data.totalRecords || 0;
            dispatch(searchCustomerSuccess(data.customers || [], totalRecords));
            if (totalRecords <= 0) {
                toastr.info('Customer not found!');
            }
        }).catch(error => {
            dispatch(searchCustomerError({}, {type: 'danger', value: 'something_went_wrong'}), toastr.error(error));
        });
    };
}

export function searchCustomerSuccess(customers, totalRecord) {
    return {
        type: types.SEARCH_CUSTOMER_SUCCESS,
        payload: {
            customerLists: customers,
            totalCustomerList: totalRecord,
            saleOrderList: [],
        }
    };
}

export function searchCustomerError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.SEARCH_CUSTOMER_ERROR,
        payload: {
            customerLists: [],
            totalCustomerList: 0,
            errors,
            message
        }
    }
}

export function searchCompanyAction(keyword) {
    return function (dispatch) {
        // dispatch(beginAjaxCall());
        return callListApi.searchCompany(keyword).then(data => {
            // dispatch(searchCompanySuccess(parserToFormatSelect2(data.data, 'net_suite_customer_id', 'company_name')));
            return parserToFormatSelect2(data.data, 'net_suite_customer_id', 'company_name');
        }).catch(error => {
            // dispatch(searchCompanyError({}, {type: 'danger', value: 'something_went_wrong'}), toastr.error(error));
            return [];
        });
    };
}

export function parserToFormatSelect2(data, fieldId = 'id', fieldText = 'text') {
    if (_.isNull(data)) {
        return [];
    }
    _.uniqBy(data, fieldId);
    let result = [];
    _.forEach(data, function (item) {
        result.push({value: _.get(item, fieldId), label: _.get(item, fieldText)});
    });
    return _.uniqBy(result, 'value');
}

export function searchCompanySuccess(company) {
    return {
        type: types.SEARCH_COMPANY_SUCCESS,
        payload: {
            companyList: company,
        }
    };
}

export function searchCompanyError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.SEARCH_COMPANY_ERROR,
        payload: {
            companyList: [],
            errors,
            message
        }
    }
}

export function searchProductAction(keyword) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return productApi.searchProduct(keyword).then(data => {
            dispatch(loadProductSuccess(data.products));
        }).catch(error => {
            dispatch(loadProductError({}, {type: 'danger', value: 'something_went_wrong'}), toastr.error(error));
        });
    };
}

export function loadProductSuccess(data) {
    return {
        type: types.SEARCH_PRODUCT_SUCCESS,
        payload: {
            productList: data,
        }
    };
}

export function loadProductError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.SEARCH_PRODUCT_ERROR,
        payload: {
            productList: [],
            errors,
            message
        }
    }
}


export function searchProductSuccess(payload) {
    return {
        type: types.SEARCH_PRODUCT_SUCCESS,
        payload
    };
}

export function searchProductError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.SEARCH_PRODUCT_ERROR,
        payload: {
            productList: [],
            errors,
            message
        }
    }
}

export function searchProduct($keyword, $pageSize, $pageNum) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return productApi.searchProduct($keyword, $pageSize, $pageNum).then(products => {
            if (!products) {
                dispatch(searchProductError({}, {type: 'danger', value: 'something_went_wrong'}));
            } else {
                dispatch(searchProductSuccess(
                    products
                ));
            }
        }).catch(error => {
            dispatch(searchProductError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    }
}

export function loadProductDetailAction(sku, customerId) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return productApi.getProductDetail(sku).then(data => {
            data.products[0].customer_id = customerId;
            data.products[0].isVisible = true;
            dispatch(loadProductDetailSuccess(data.products[0]));
        }).catch(error => {
            dispatch(loadProductDetailError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    }
}

export function loadProductDetailSuccess(payload) {
    return {
        type: types.LOAD_PRODUCT_DETAIL_SUCCESS,
        payload
    }
}

export function loadProductDetailError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_PRODUCT_DETAIL_ERROR,
        payload: {
            productDetails: [],
            errors,
            message
        }
    };
}

export function addToOrder(product, customerId) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return new Promise((resolve, reject) => {
            product.customer_id = customerId;

            resolve(product);
        }).then(product => {
            if (!product) {
                dispatch(addToOrderError({}, {type: 'danger', value: 'something_went_wrong'}));
            } else {
                dispatch(addToOrderSuccess(product));
                // toastr.success(`${product.name} ${iCareLocale.cart_message}`)
            }
        }).catch(error => {
            dispatch(addToOrderError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    };
}

export function addToOrderSuccess(payload) {
    return {
        type: types.ADD_TO_ORDER_SUCCESS,
        payload
    };
}

export function addToOrderError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.ADD_TO_ORDER_ERROR,
        payload: {
            errors,
            message
        }
    };
}

export function addToRecently(product) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return new Promise((resolve, reject) => {
            resolve(product);
        }).then(product => {
            if (!product) {
                dispatch(addToRecentlyError({}, {type: 'danger', value: 'something_went_wrong'}));
            } else {
                dispatch(addToRecentlySuccess(product));
            }
        }).catch(error => {
            dispatch(addToRecentlyError({}, {type: 'danger', value: 'something_went_wrong'}));
            dispatch(addToOrderError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    };
}

export function addToRecentlySuccess(payload) {
    return {
        type: types.ADD_TO_RECENTLY_SUCCESS,
        payload
    };
}

export function addToRecentlyError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.ADD_TO_RECENTLY_ERROR,
        payload: {
            errors,
            message
        }
    };
}

export function getICareCentersSuccess(centers) {
    return {
        type: types.LOAD_ICARE_CENTERS_SUCCESS,
        payload: {
            iCareCenters: centers
        }
    };
}

export function getICareCentersError(error, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_ICARE_CENTERS_ERROR,
        payload: {
            iCareCenters: [],
            errors,
            message
        }
    }
}

export function loadIcareCenters() {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return callListApi.getICareCenters().then(data => {
            dispatch(getICareCentersSuccess(data));
            if (data.length <= 0) {
                toastr.info('iCare centers not fount!');
            }
        }).catch(error => {
            dispatch(getICareCentersError({}, {type: 'danger', value: 'something_went_wrong'}), toastr.error(error));
        });
    }
}

export function filterIcareCenters(key) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return callListApi.getICareCenters().then(data => {
            let result = [];
            key = key.toUpperCase();
            for (let i = 0; i < data.length; i++) {
                let full_name = data[i].full_name.toUpperCase();
                let street = data[i].street.toUpperCase();
                let city = data[i].city.toUpperCase();
                let country = data[i].country.toUpperCase();
                if (full_name.indexOf(key) != -1 || street.indexOf(key) != -1 || city.indexOf(key) != -1 || country.indexOf(key) != -1) {
                    result.push(data[i]);
                }
            }
            dispatch(getICareCentersSuccess(result));
            if (result.length <= 0) {
                toastr.info('iCare centers not fount!');
            }
        }).catch(error => {
            dispatch(getICareCentersrError({}, {type: 'danger', value: 'something_went_wrong'}), toastr.error(error));
        });
    }
}


export function updateProductSuccess(payload) {
    return {
        type: types.UPDATE_PRODUCT_DETAIL_SUCCESS,
        payload
    };
}

export function updateProductError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.UPDATE_PRODUCT_DETAIL_ERROR,
        payload: {
            errors,
            message
        }
    }
}

export function updateProduct(product) {
    return function (dispatch, getState) {
        dispatch(beginAjaxCall());
        return new Promise((resolve, reject) => {
            resolve(product);
        }).then(product => {
            if (!product) {
                dispatch(updateProductError({}, {type: 'danger', value: 'something_went_wrong'}));
            } else {
                dispatch(updateProductSuccess(product
                ));
            }
        }).catch(error => {
            dispatch(updateProductError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    }
}

export function loadProductReviewSuccess(payload) {
    return {
        type: types.LOAD_PRODUCT_REVIEWS_SUCCESS,
        payload
    };
}

export function loadProductReviewError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_PRODUCT_REVIEWS_ERROR,
        payload: {
            errors,
            message
        }
    }
}

export function loadProductReview(productId) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return productApi.getProductReview(productId).then(data => {
            let product = {};
            if (!data[0].reviews) {
                dispatch(loadProductReviewError({}, {type: 'danger', value: 'something_went_wrong'}));
            } else {
                product.id = productId;
                product.reviews = data[0].reviews;
                dispatch(loadProductReviewSuccess(product));
            }
        }).catch(error => {
            dispatch(loadProductReviewError({}, {type: 'danger', value: error}), toastr.error(error));
        });
    };
}

export function calculateOrderAction(data) {
    return function (dispatch) {
        return saleOrderListApi.getOrderSummary(data).then(summary => {
            return summary;
        }).catch(error => {
            toastr.error(error);
            return {};
        });
    }
}

export function placeOrderActionSuccess() {
    return {
        type: types.PLACE_ORDER_SUCCESS
    };
}

export function placeOrderActionError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.PLACE_ORDER_ERROR
    };
}

export function placeOrderAction(data) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return saleOrderListApi.postPlaceOrder(data).then(order => {
                toastr.info('Place Order Success !');
                dispatch(placeOrderActionSuccess());
                return {order: order[0], code: 200};
        }).catch(error => {
            toastr.error(error);
            dispatch(placeOrderActionError({}, error));
            return {order: [], code: 500};
        });
    }
}
export function loadProductReviewById(productId) {
    return function (dispatch) {
        return productApi.getProductReview(productId).then(data => {
            // data: [
            // {
            //    "avg_rating_percent": "",
            //    "reviews": []
            // }
            // ]

            if (data[0]) return data[0];
            else return [];
        }).catch(error => {
            return [];
        });
    };
}

export function confirmOrderAction(data) {
    return function (dispatch) {
        return saleOrderListApi.postConfirmOrder(data).then(response => {
            return {code: 200};
        }).catch(error => {
            toastr.error(error);
            return {code: 500};
        });
    }
}

export function loadCompanyDetail(id) {
    return function(dispatch) {
        return callListApi.getCompanyDetail(id).then(response => {
            return response;
        }).catch(error => {
            toastr.error(error);
            return {code: 500, message: error}
        });
    };
}

export function getProductCategory() {
    return function (dispatch) {
        return productApi.getProductCategory().then(response => {
            if (response && _.isEmpty(response) === false) return response;
            else return {};
        }).catch(error => {
            return {};
        });
    };
}

export function getCallLogSuccess(payload) {
    return {
        type: types.LOAD_CALL_LOG_SUCCESS
    };
}

export function getCallLogError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_CALL_LOG_ERROR,
        payload: {
            errors,
            message
        }
    };
}

export function loadCallLog(id, pageNum, pageSize) {
    return function(dispatch) {
        // dispatch(beginAjaxCall());
        return callListApi.getCallLog(id, pageNum, pageSize).then(callLogs => {
            //dispatch(getCallLogSuccess(callLogs));
            return ({code: 200, callLogs: callLogs});
        }).catch(error => {
            //dispatch(getCallLogError({}, {type: 'danger', value: error}));
            return ({code: 500, callLogs: []});
        });
    };
}

export function saveCallLogActionSuccess() {
    return {
        type: types.SAVE_CALL_LOG_SUCCESS
    };
}

export function saveCallLogActionError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.SAVE_CALL_LOG_ERROR
    };
}

export function saveCallLogAction(data) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return callListApi.saveCallLog(data).then(callLog => {
            // toastr.info('Save call log Success !');
            dispatch(saveCallLogActionSuccess());
            return {callLog: callLog, code: 200};
        }).catch(error => {
            toastr.error(error);
            dispatch(saveCallLogActionError({}, error));
            return {callLog: [], code: 500};
        });
    }
}

export function updateCallLogActionSuccess() {
    return {
        type: types.UPDATE_CALL_LOG_SUCCESS
    };
}

export function updateCallLogActionError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.UPDATE_CALL_LOG_ERROR
    };
}

export function updateCallLogAction(id, data) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return callListApi.updateCallLog(id, data).then(callLog => {
            toastr.info('Save call log Success !');
            dispatch(updateCallLogActionSuccess());
            return {callLog: callLog, code: 200};
        }).catch(error => {
            toastr.error(error);
            dispatch(updateCallLogActionError({}, error));
            return {callLog: [], code: 500};
        });
    }
}

export function getLastCallAction(id) {
    return function(dispatch) {
        return callListApi.getLastCall(id).then(lastCall => {
            if(_.isEmpty(lastCall) == false){
                return ({code: 200, lastCall: lastCall});
            }else{
                return ({code: 500, lastCall: {}});
            }
        }).catch(error => {
            return ({code: 500, lastCall: {}});
        });
    };
}

export function getCallingAction(userId) {
    return function(dispatch){
        return callListApi.getCalling(userId).then(calling => {
            if(_.isEmpty(calling) == false){
                return ({code: 200 , calling: calling.items});
            }else{
                return ({code: 500, calling:{}});
            }
        }).catch(error => {
            return ({code: 500, calling: {}});
        });
    }
}

export function getCallingByUserIdSuccess(payload) {
    return {
        type: types.LOAD_CUSTOMER_CALLING_SUCCESS,
        payload: payload
    }
}

export function getCallingByUserIdError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_CUSTOMER_CALLING_ERROR,
        payload: {
            errors: errors,
            message: message
        }
    }
}

export function getCallingByUserId(userId) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return callListApi.getCalling(userId).then(calling => {
            if(_.isEmpty(calling) === false){
                return dispatch(getCallingByUserIdSuccess(calling.items));
            } else {
                return dispatch(getCallingByUserIdError({}, {type: 'danger', value: error}));
            }
        }).catch(error => {
            return dispatch(getCallingByUserIdError({}, {type: 'danger', value: error}));
        });
    }
}

export function setCustomerCallingSuccess(payload) {
    return {
        type: types.SET_CUSTOMER_CALLING,
        payload: payload
    }
}

export function setCustomerCalling(data) {
    return function (dispatch) {
        return dispatch(setCustomerCallingSuccess(data));
    }
}

export function saveReminderAction(data) {
    return function (dispatch) {
        return callListApi.saveReminder(data).then(reminder => {
            return {reminder: reminder, code: 200};
        }).catch(error => {
            toastr.error(error);
            return {reminder: [], code: 500};
        });
    }
}

export function loadCityAction(cityName) {
    return function(dispatch) {
        return callListApi.getCities().then(response => {
            let cities =  parserToFormatSelect2(data, 'value', 'value');
            return dispatch(loadCitySuccess(cities));
            // if(_.isEmpty(response) == false){
            //     let data = [];
            //     response[0].map((value,key)=>{
            //         data.push({id: value, value: value});
            //     });
            //
            //     return parserToFormatSelect2(data, 'id', 'value');
            // }else{
            //     return {code: 500, message: error}
            // }
        }).catch(error => {
            toastr.error(error);
            // return {code: 500, message: error}
            return dispatch(loadCityError(error));
        });
    };
}
export function loadCitySuccess(payload) {
    return {
        type: types.LOAD_LIST_CITY_SUCCESS,
        payload: payload
    }
}

export function loadCityError(errors, message = '') {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_LIST_CITY_ERROR,
        payload: {
            errors: errors,
            message: message
        }
    }
}