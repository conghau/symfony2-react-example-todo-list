import * as types from '../../actions/actionTypes';
import initialState from '../initialState';
import _ from 'lodash';

export default function myOrderReducer(state = initialState.myOrders, action) {
    switch (action.type) {
        case types.LOAD_MY_ORDER_LIST_SUCCESS:
            return Object.assign({}, state, {
                orders: action.payload
            });
        case types.LOAD_MY_ORDER_LIST_ERROR:
            return Object.assign({}, state, action.payload);
        case types.LOAD_MY_ORDER_DETAIL_SUCCESS:
            _.assign(state.orderDetails, action.payload);
            return Object.assign({}, state, {
                orderDetails : state.orderDetails
            });
        case types.LOAD_MY_ORDER_DETAIL_ERROR:
            return Object.assign({}, state, action.payload);
        case types.UPDATE_MY_ORDER_DETAIL_SUCCESS:
            _.set(state.orderDetails, action.payload.increment_id, action.payload);
            return Object.assign({}, state, {
                orderDetails : state.orderDetails
            });
        case types.UPDATE_MY_ORDER_DETAIL_ERROR:
            return Object.assign({}, state, action.payload);
        case types.CANCEL_MY_ORDER_SUCCESS:
            try {
                state.orders[action.payload.increment_id].status = action.payload.status;
                state.orderDetails[action.payload.increment_id].order_detail.status = action.payload.status;
            } catch (err) {}

            return Object.assign({}, state, {
                orders: state.orders,
                orderDetails: state.orderDetails
            });
        case types.CANCEL_MY_ORDER_ERROR:
            return Object.assign({}, state, action.payload);
        default:
            return state;
    }
}