/**
 * Created by hautruong on 24/01/2017.
 */
import initialState from '../../initialState';
import * as types from '../../../actions/actionTypes';

export default function JobPageReducer(state = initialState.jobList, action) {
    switch (action.type) {
        case types.LOAD_FE_JOB_LIST_SUCCESS:
            return Object.assign({}, state, action.payload);
        case types.LOAD_FE_JOB_LIST_ERROR:
            return Object.assign({}, state, action.payload);
        default:
            return state;
    }
}