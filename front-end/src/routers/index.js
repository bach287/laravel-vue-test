import {createRouter, createWebHistory} from "vue-router";
import User from '../view/user/index.vue'

const routes = [
    {
        path: '/user',
        name: 'user',
        component: User
    }
];
const router = createRouter({
    history: createWebHistory(),
    routes
})
export default router;
