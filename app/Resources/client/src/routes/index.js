import CoreLayout from "../layouts/CoreLayout/CoreLayout";
import Home from "./Home";
import * as jobPageRouter from "./FE/Job";

export function createRoutes(store) {
    return {
        path: '/',
        component: CoreLayout,
        indexRoute: Home,
        childRoutes: [
            jobPageRouter.FeJobsRoute(store),
        ]
    };
}

export default createRoutes;
