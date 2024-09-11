let routes= [];

import dashboard from "./vue-routes-dashboard";
import profile from "./vue-routes-profiles";

routes = routes.concat(dashboard);
routes = routes.concat(profile);

export default routes;
