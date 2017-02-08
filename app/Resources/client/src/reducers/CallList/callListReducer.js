import * as types from '../../actions/actionTypes';
import initialState from '../initialState';
import _ from 'lodash';

export default function callListReducer(state = initialState.callList, action) {

    switch (action.type) {
        case types.LOAD_CALL_LIST_CUSTOMER_SUCCESS:
            return Object.assign({}, state, action.payload);
        case types.LOAD_CALL_LIST_CUSTOMER_ERROR:
            return Object.assign({}, state, action.payload);
        case types.LOAD_CUSTOMER_SALE_ORDER_LIST_SUCCESS:
            state.saleOrderList[action.payload.customer_id] = action.payload.orders;
            // Add order to saleOrderList
            return Object.assign({}, state, {
                saleOrderList : state.saleOrderList
            });
        case types.LOAD_CUSTOMER_SALE_ORDER_LIST_ERROR:
            return Object.assign({}, state, action.payload);
        case types.LOAD_CALL_LIST_CUSTOMER_DETAIL_SUCCESS:
            return Object.assign({}, state, {
                customerLists : state.customerLists.map(customer => {
                    if (customer && customer.id !== action.payload.profiles.id) {
                        return customer;
                    }
                    return Object.assign({}, customer, action.payload);
                })
            });
        case types.LOAD_CALL_LIST_CUSTOMER_DETAIL_ERROR:
            return Object.assign({}, state, action.payload);
        case types.LOAD_CUSTOMER_SALE_ORDER_DETAIL_SUCCESS:
            return Object.assign({}, state, {
                saleOrderDetails : [
                    ...state.saleOrderDetails.filter(order => order.increment_id !== action.payload.increment_id),
                    Object.assign({}, action.payload)
                ]});
        case types.LOAD_CUSTOMER_SALE_ORDER_DETAIL_ERROR:
            return Object.assign({}, state, action.payload);
        case types.UPDATE_CUSTOMER_SALE_ORDER_DETAIL_SUCCESS:
            return Object.assign({}, state, {
                saleOrderDetails : [
                    ...state.saleOrderDetails.filter(order => order.increment_id !== action.payload.increment_id),
                    Object.assign({}, action.payload)
                ]});
        case types.UPDATE_CUSTOMER_SALE_ORDER_DETAIL_ERROR:
            return Object.assign({}, state, action.payload);
        case types.UPDATE_CALL_LIST_CUSTOMER_SUCCESS:
            return Object.assign({}, state, {
                customerLists : state.customerLists.map(customer => {
                    if (customer && customer.id !== action.payload.id) {
                        return customer;
                    }
                    return Object.assign({}, customer, action.payload);
                })
            });
        case types.UPDATE_CALL_LIST_CUSTOMER_ERROR:
            return Object.assign({}, state, action.payload);
        case types.SEARCH_CUSTOMER_SUCCESS:
            return Object.assign({}, state, action.payload);
        case types.SEARCH_CUSTOMER_ERROR:
            return Object.assign({}, state, action.payload);
        case types.SEARCH_COMPANY_SUCCESS:
            return Object.assign({}, state, action.payload);
        case types.SEARCH_COMPANY_ERROR:
            return Object.assign({}, state, action.payload);
        case types.SEARCH_PRODUCT_SUCCESS:
            return Object.assign({}, state, action.payload);
        case types.SEARCH_PRODUCT_ERROR:
            return Object.assign({}, state, action.payload);
        case types.LOAD_PRODUCT_DETAIL_SUCCESS:
            return Object.assign({}, state, {
                productDetails : [
                    ...state.productDetails.filter(product => product.customer_id !== action.payload.customer_id),
                    Object.assign({}, action.payload)
                ]});
        case types.LOAD_PRODUCT_DETAIL_ERROR:
            return Object.assign({}, state, action.payload);
        case types.ADD_TO_ORDER_SUCCESS:
            return Object.assign({}, state, {
                placeOrderLists : [
                    ...state.placeOrderLists.filter(product => product.customer_id !== action.payload.customer_id),
                    Object.assign({}, action.payload)
                ]});
        case types.ADD_TO_ORDER_ERROR:
            return Object.assign({}, state, action.payload);
        case types.ADD_TO_RECENTLY_SUCCESS:
            return Object.assign({}, state, {
                productRecentlyViewed : [
                    ...state.productRecentlyViewed.filter(product => product.sku !== action.payload.sku),
                    Object.assign({}, action.payload)
                ]});
        case types.ADD_TO_RECENTLY_ERROR:
            return Object.assign({}, state, action.payload);
        case types.LOAD_ICARE_CENTERS_SUCCESS:
            return Object.assign({}, state, action.payload);
        case types.LOAD_ICARE_CENTERS_ERROR:
            return Object.assign({}, state, action.payload);
        case types.UPDATE_PRODUCT_DETAIL_SUCCESS:
            return Object.assign({}, state, {
                productDetails : state.productDetails.map(product => {
                    if (product && product.customer_id !== action.payload.customer_id) {
                        return product;
                    }

                    return Object.assign({}, product, action.payload);
                })
            });
        case types.UPDATE_PRODUCT_DETAIL_ERROR:
            return Object.assign({}, state, action.payload);
        case types.LOAD_PRODUCT_REVIEWS_SUCCESS:
            return Object.assign({}, state, {
                productDetails : state.productDetails.map(product => {
                    if (product && product.id !== action.payload.id) {
                        return product;
                    }

                    return Object.assign({}, product, action.payload);
                })
            });
        case types.LOAD_PRODUCT_REVIEWS_ERROR:
            return Object.assign({}, state, action.payload);
        case types.LOAD_CUSTOMER_CALLING_SUCCESS:
            return Object.assign({}, state, {
                customerCalling: action.payload[0]
            });
        case types.LOAD_CUSTOMER_CALLING_ERROR:
            return Object.assign({}, state, action.payload);
        case types.SET_CUSTOMER_CALLING:
            return Object.assign({}, state, {
                customerCalling: action.payload
            });
        default:
            return state;
    }
}