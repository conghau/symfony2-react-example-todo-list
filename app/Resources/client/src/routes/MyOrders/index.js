import {injectReducer} from 'reducers/index';

export function myOrders(store) {
    return {
        path: '/my-orders',
        /* Async getComponent is only invoked when route matches */
        getComponent (nextState, cb) {
            require.ensure([], (require) => {
                /* Webpack - use require callback to define dependencies for building */
                const MyOrderPage = require('../../containers/MyOrders/MyOrdersPage').default;
                const myOrderReducer = require('../../reducers/MyOrders/myOrderReducer').default;

                /* Add the reducer to the store on key 'counter' */
                injectReducer(store, 'myOrders', myOrderReducer);

                /* Return getComponent */
                cb(null, MyOrderPage);

                /* Webpack named bundle */
            }, 'my-orders')
        }
    }
}