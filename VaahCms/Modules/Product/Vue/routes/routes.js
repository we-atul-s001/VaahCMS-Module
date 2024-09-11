let routes= [];

import dashboard from "./vue-routes-dashboard";
import products from "./vue-routes-products";

routes = routes.concat(dashboard);
routes = routes.concat(products);

export default routes;
