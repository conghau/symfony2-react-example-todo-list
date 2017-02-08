import {injectReducer} from 'reducers/index';

export function iCareMember(store) {
    return {
        path: '/icare-member',
        /*  Async getComponent is only invoked when route matches   */
        getComponent (nextState, cb) {
            require.ensure([], (require) => {
                /*  Webpack - use require callback to define
                 dependencies for bundling   */
                const CallListPage = require('../../containers/iCareMember/iCareMemberPage').default;
                const callListReducer = require('../../reducers/CallList/callListReducer').default;
                //
                // /*  Add the reducer to the store on key 'counter'  */
                injectReducer(store, 'callList', callListReducer);
                //
                /*  Return getComponent   */
                cb(null, CallListPage);

                /* Webpack named bundle   */
            }, 'icare-member');
        }
    };
}

