let routes= [];

import dashboard from "./vue-routes-dashboard";
import categories from "./vue-routes-categories";

routes = routes.concat(dashboard);
routes = routes.concat(categories);

export default routes;
