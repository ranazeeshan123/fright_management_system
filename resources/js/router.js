import Vue from 'Vue';
import VueRouter from 'vue-router';
import LoginComponent from './components/LoginComponent';
import AdminComponent from './components/AdminComponent';

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        redirect: '/login'
    },
    {
        path: '/login',
        component: LoginComponent,
        name: 'login'
    },
    {
        path: '/admin',
        component: AdminComponent,
        name: 'admin'
    }
]

export default new VueRouter({ routes })