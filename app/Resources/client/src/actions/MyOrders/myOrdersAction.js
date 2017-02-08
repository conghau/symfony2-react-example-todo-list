import * as types from '../actionTypes';
import {beginAjaxCall, ajaxCallError} from '../ajaxStatusActions';
import saleOrderListApi from '../../api/CallList/saleOrderListApi';
import {toastr} from 'react-redux-toastr';
import _ from 'lodash';

export function loadSaleOrderByUserSuccess(payload) {
    return {
        type: types.LOAD_MY_ORDER_LIST_SUCCESS,
        payload: payload
    };
}

export function loadSaleOrderByUserError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_MY_ORDER_LIST_ERROR,
        payload: {
            orders: {},
            errors: errors,
            message: message
        }
    };
}

export function loadSaleOrderByUser() {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return saleOrderListApi.getSaleOrdersByUser().then(data => {
            if(data.orders
                && _.isEmpty(data.orders) === false) {
                let orders = {};

                // Reformat orders from array to object (collection)
                _.each(data.orders, function(order) {
                    if(order.increment_id) {
                        _.setWith(orders, order.increment_id, order);
                    }
                });

                dispatch(loadSaleOrderByUserSuccess(orders));
            } else {
                dispatch(loadSaleOrderByUserError({}, {type: 'warning', value: 'have no orders'}));
            }
        }).catch(error => {
            dispatch(loadSaleOrderByUserError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    };
}

export function loadSaleOrderDetailSuccess(payload) {
    return {
        type: types.LOAD_MY_ORDER_DETAIL_SUCCESS,
        payload
    };
}

export function loadSaleOrderDetailError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_MY_ORDER_DETAIL_ERROR,
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
            if (_.isEmpty(order) === false) {
                let orderDetail = {};
                order.isVisible = true;
                _.setWith(orderDetail, orderIncrementId, order);
                dispatch(loadSaleOrderDetailSuccess(orderDetail));
            } else {
                dispatch(loadSaleOrderDetailError({}, {type: 'warning', value: 'order is empty.'}));
            }
        }).catch(error => {
            dispatch(loadSaleOrderDetailError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    };
}

export function updateSaleOrderDetailSuccess(payload) {
    return {
        type: types.UPDATE_MY_ORDER_DETAIL_SUCCESS,
        payload
    };
}

export function updateSaleOrderDetailError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.UPDATE_MY_ORDER_DETAIL_ERROR,
        payload: {
            errors,
            message
        }
    }
}

export function updateSaleOrderDetail(order) {
    return function (dispatch, getState) {
        dispatch(beginAjaxCall());
        return new Promise((resolve, reject) => {
            resolve(order);
        }).then(order => {
            dispatch(updateSaleOrderDetailSuccess(order));
        }).catch(error => {
            dispatch(updateSaleOrderDetailSuccess({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    }
}

export function cancelOrderSuccess(payload) {
    return {
        type: types.CANCEL_MY_ORDER_SUCCESS,
        payload: payload
    };
}

export function cancelOrderError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.CANCEL_MY_ORDER_ERROR,
        payload: {
            errors,
            message
        }
    }
}

export function cancelOrder(orderNo, note) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return saleOrderListApi.cancelOrder(orderNo, note).then(data => {
            if(_.isUndefined(data.is_updated) === false
                && data.is_updated == true) {
                let order = {};
                order.increment_id = orderNo;
                order.status = 'canceled';
                dispatch(cancelOrderSuccess(order));
            } else {
                dispatch(cancelOrderError(error, {type: 'danger', value: 'Can not cancel order.'}));
            }
        }).catch(error => {
            dispatch(cancelOrderError(error, {type: 'danger', value: 'Can not cancel order.'}));
        })
    }
}