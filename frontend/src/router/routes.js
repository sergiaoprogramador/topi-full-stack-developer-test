import { routes as meal } from '@/pages';

export default [
    ...meal,
    {
        path: "/:catchAll(.*)",
        name: "notFound",
        component: () => import(/* webpackChunckName: "not-found" */ "@/pages/NotFound"),
    }
]