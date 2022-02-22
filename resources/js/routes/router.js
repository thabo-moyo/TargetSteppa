import { createRouter, createWebHistory} from 'vue-router'
import Nprogress from 'nprogress'
import {store} from "../store";

const router = createRouter({
    mode: 'history',
    history: createWebHistory(),
    routes: [{
        path: '/',
        name: 'home',
        props: true,
        component:  () => import('../views/home'),
        beforeEnter(routeTo, routeFrom, next) {
            store.dispatch('apiProjects', null, {root: true})
                .then( () => {
                    next();
            })
        }
    }],
})

router.beforeEach((routeTo, routeFrom, next) => {
    Nprogress.start();
    next();
})

router.afterEach(() => {
    Nprogress.done();
});
export default router
