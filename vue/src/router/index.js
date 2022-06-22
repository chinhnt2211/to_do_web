import { createWebHistory, createRouter } from "vue-router";

const routes = [
    {
      path: "/auth",
      redirect: "/auth/login",
      component: ()=>import("@/layouts/Auth.vue"),
      children: [
        {
          path: "/auth/login",
          component: ()=>import("@/views/auth/Login.vue"),
        },
        {
          path: "/auth/register",
          component: ()=>import("@/views/auth/Register.vue"),
        },
      ],
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;