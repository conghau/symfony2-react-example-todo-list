import * as types from '../actionTypes';
import {beginAjaxCall, ajaxCallError} from '../ajaxStatusActions';
import todoApi from '../../api/Todo/todoApi';
import {toastr} from 'react-redux-toastr';
import _ from 'lodash';
import moment from 'moment';

export function loadListTodoSuccess(payload) {
    return {
        type: types.LOAD_TODO_LIST_SUCCESS,
        payload: payload
    };
}

export function loadListTodoError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_TODO_LIST_ERROR,
        payload: {
            todos: {},
            errors: errors,
            message: message
        }
    };
}

export function loadListTodo() {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return todoApi.loadListTodo().then(data => {
            dispatch(loadListTodoSuccess(data));
        }).catch(error => {
            console.log(error);
            dispatch(loadListTodoError({}, {type: 'danger', value: 'something_went_wrong'}));
            // throw(error);
        });
    };
}

export function loadListTodoDetailSuccess(payload) {
    return {
        type: types.LOAD_TODO_DETAIL_LIST_SUCCESS,
        payload: payload
    };
}

export function loadListTodoDetailError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_TODO_DETAIL_LIST_ERROR,
        payload: {
            todos: {},
            errors: errors,
            message: message
        }
    };
}

export function loadListTodoDetail(todoId) {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return todoApi.loadListTodoDetail(todoId).then(data => {
            console.log(data);
            let list = data["hydra:member"] || [];
            dispatch(loadListTodoDetailSuccess({id: todoId, data: list}));
        }).catch(error => {
            console.log(error);
            dispatch(loadListTodoDetailError({}, {type: 'danger', value: 'something_went_wrong'}));
            // throw(error);
        });
    };
}

export function saveTodoItemAction(data) {
    _.assign(data, {
            createdAt: moment().format('YYYY-MM-DD\THH:mm:ss'),
            updatedAt: moment().format('YYYY-MM-DD\THH:mm:ss'),
            status: 'enabled'
        }
    );
    return function (dispatch) {
        //dispatch(beginAjaxCall());
        return todoApi.saveTodoItem(data).then(re => {
            //dispatch(loadListTodoSuccess(data));
            toastr.info('Save success');
            return true;

        }).catch(error => {
            console.log(error);
            toastr.info('Save Error');
            return false;

            //dispatch(loadListTodoError({}, {type: 'danger', value: 'something_went_wrong'}));
            // throw(error);
        });
    };
}

export function saveTodoAction(data) {
    _.assign(data, {
            createdAt: moment().format('YYYY-MM-DD\THH:mm:ss'),
            updatedAt: moment().format('YYYY-MM-DD\THH:mm:ss'),
            status: 'enabled'
        }
    );
    return function (dispatch) {
        //dispatch(beginAjaxCall());
        return todoApi.saveTodo(data).then(re => {
            //dispatch(loadListTodoSuccess(data));
            toastr.info('Save success');
            return true;

        }).catch(error => {
            console.log(error);
            toastr.info('Save Error');
            return false;

            //dispatch(loadListTodoError({}, {type: 'danger', value: 'something_went_wrong'}));
            // throw(error);
        });
    };
}