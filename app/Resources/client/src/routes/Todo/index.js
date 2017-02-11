import {injectReducer} from 'reducers/index';

export function TodoRouter(store) {
    return {
        path: '/todo',
        /* Async getComponent is only invoked when route matches */
        getComponent (nextState, cb) {
            require.ensure([], (require) => {
                /* Webpack - use require callback to define dependencies for building */
                const TodoPage = require('../../containers/Todo/TodoPage').default;
                const TodoReducer = require('../../reducers/Todo/TodoReducer').default;

                /* Add the reducer to the store on key 'counter' */
                injectReducer(store, 'todoList', TodoReducer);

                /* Return getComponent */
                cb(null, TodoPage);

                /* Webpack named bundle */
            }, 'todo-list')
        }
    }
}