/**
 * Created by hautruong on 24/01/2017.
 */
import {injectReducer} from 'reducers/index';

export function FeJobsRoute(store) {
    return {
        path: '/jobs',
        /*  Async getComponent is only invoked when route matches   */
        getComponent (nextState, cb) {
            require.ensure([], (require) => {
                /*  Webpack - use require callback to define
                 dependencies for bundling   */
                const JobPage = require('../../../containers/FE/JobPage').default;
                const JobPageReducer = require('../../../reducers/FE/Job/JobPageReducer').default;
                //
                // /*  Add the reducer to the store on key 'counter'  */
                injectReducer(store, 'jobList', JobPageReducer);
                //
                /*  Return getComponent   */
                cb(null, JobPage);

                /* Webpack named bundle   */
            }, 'fe-job-list');
        }
    };
}

