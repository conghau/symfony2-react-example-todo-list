import CoreLayout from "../layouts/CoreLayout/CoreLayout";
import Home from "./Home";
import * as Todo from "./Todo";

export function createRoutes(store) {
    return {
        path: '/',
        component: CoreLayout,
        indexRoute: Home,
        childRoutes: [
            Todo.TodoRouter(store),
        ]
    };
}

export default createRoutes;
