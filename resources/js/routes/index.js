import { createRouter, createWebHistory } from "vue-router";

import HomeComponent from '../vue/views/Home.vue'
import DashboardComponent from '../vue/views/Dashboard.vue'


const routes = [
    {
        path:'/',
        name:'home',
        component: HomeComponent
    },
    {
        path:'/dashboard',
        name:'',
        component: DashboardComponent
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router
