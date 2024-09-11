let routes= [];

import dashboard from "./vue-routes-dashboard";
import categories from "./vue-routes-categories";
import taxonomy from "./vue-routes-taxonomies";

routes = routes.concat(dashboard);
routes = routes.concat(categories);
routes = routes.concat(taxonomy);

export default routes;
