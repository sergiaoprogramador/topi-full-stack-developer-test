
export default [
    {
        path: "/",
        component: () => import(/* webpackChunkName: "meal-layout" */ "./layout/MealLayout"),
        children: [
            {
                path: "",
                name: "meal-home",
                component: () => import(/* webpackChunkName: "meal" */ "./Meals")
            },
            {
                path: "meal/:meal_id",
                name: "meal-page",
                component: () => import(/* webpackChunkName: "meal-page" */ "./MealPage")
            }
        ] 
    }
];
