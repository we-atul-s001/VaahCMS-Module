let routes= [];
let routes_list= [];

import List from '../pages/profiles/List.vue'
import Form from '../pages/profiles/Form.vue'
import Item from '../pages/profiles/Item.vue'

routes_list = {

    path: '/profiles',
    name: 'profiles.index',
    component: List,
    props: true,
    children:[
        {
            path: 'form/:id?',
            name: 'profiles.form',
            component: Form,
            props: true,
        },
        {
            path: 'view/:id?',
            name: 'profiles.view',
            component: Item,
            props: true,
        }
    ]
};

routes.push(routes_list);

export default routes;

