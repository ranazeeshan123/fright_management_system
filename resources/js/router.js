import Vue from 'Vue';
import VueRouter from 'vue-router';
import Login from './components/Authentication/Login';
import Register from './components/Authentication/Register';
import AdminDashboard from './components/AdminDashboard';
import OperatorDashboard from './components/OperatorDashboard';
import Home from './components/Home';

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
        meta: {
            auth: undefined
        }
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
        meta: {
            auth: false
        }
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
        meta: {
            auth: false
        }
    },
    //OPERATOR
    {
        path: '/dashboard',
        name: 'dashboard',
        component: OperatorDashboard,
        meta: {
            auth: { roles: 1, redirect: { name: 'login' }, forbiddenRedirect: '/403' }
        }
    },
    //ADMIN
    {
        path: '/admin',
        name: 'admin.dashboard',
        component: AdminDashboard,
        meta: {
            auth: { roles: 2, redirect: { name: 'login' }, forbiddenRedirect: '/403' }
        }
    }
]

const router = new VueRouter({
    history: true,
    mode: 'history',
    routes,
})

export default router