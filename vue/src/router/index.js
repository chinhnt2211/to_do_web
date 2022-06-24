import { createWebHistory, createRouter } from "vue-router";

const routes = [
    {
        path: "/",
        redirect: "/home",
        component: ()=>import('@/layouts/Default.vue'),
        children: [
            {
                path: "/home",
                name: "Home",
                component: ()=>import('@/views/Index.vue'),
            },
            {
                path: "/todo",
                name: "Todo",
                component: ()=>import('@/views/Todo.vue'),
            },
        ]
    },

    {
        path: "/auth",
        redirect: "/signin",
        component: ()=>import('@/layouts/Auth.vue'),
        children: [
            {
                path: "/signin",
                name: "SignIn",
                component: ()=>import('@/views/Sigin.vue'),
            }
        ]
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;