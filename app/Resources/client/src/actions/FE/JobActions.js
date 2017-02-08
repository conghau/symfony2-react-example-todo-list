/**
 * Created by hautruong on 24/01/2017.
 */

import * as types from '../actionTypes';
import {beginAjaxCall, ajaxCallError} from '../ajaxStatusActions';
import JobAPI from '../../api/Job/JobApi';
import {toastr} from 'react-redux-toastr';
import _ from 'lodash';

/** List */
export function loadFEJobListAction() {
    return function (dispatch) {
        dispatch(beginAjaxCall());
        return JobAPI.getJobApi().then(data => {
            console.log(data);
            dispatch(loadFEJobListActionSuccess(
                data,
                data['hydra:totalItems'] || 0
            ));
        }).catch(error => {
            dispatch(loadFEJobListActionError({}, {type: 'danger', value: 'something_went_wrong'}));
            throw(error);
        });
    };
}
export function loadFEJobListActionSuccess(jobs, total) {
    return {
        type: types.LOAD_FE_JOB_LIST_SUCCESS,
        payload: {
            jobs: jobs,
            totalJob: total,
        }
    };
}
export function loadFEJobListActionError(errors, message) {
    errors = errors || {};
    message = message || {};
    return {
        type: types.LOAD_FE_JOB_LIST_ERROR,
        payload: {
            jobs: [],
            errors,
            message
        }
    }
}
/** end list */