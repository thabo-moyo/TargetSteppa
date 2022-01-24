import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path: '/',
        name: 'home',
        component: () => import('../app'),
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router
