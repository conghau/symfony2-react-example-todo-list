import {injectReducer} from 'reducers/index';

export function callList(store) {
    return {
        path: '/call-list',
        /*  Async getComponent is only invoked when route matches   */
        getComponent (nextState, cb) {
            require.ensure([], (require) => {
                /*  Webpack - use require callback to define
                 dependencies for bundling   */
                const CallListPage = require('../../containers/CallList/CallListPage').default;
                const callListReducer = require('../../reducers/CallList/callListReducer').default;
                //
                // /*  Add the reducer to the store on key 'counter'  */
                injectReducer(store, 'callList', callListReducer);
                //
                /*  Return getComponent   */
                cb(null, CallListPage);

                /* Webpack named bundle   */
            }, 'call-list');
        }
    };
}

