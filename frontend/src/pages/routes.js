
export default [
    {
        path: "/",
        component: () => import(/* webpackChunkName: "meal-layout" */ "./layout/MealLayout"),
        children: [
            {
                path: "",
                name: "meal-home",
                component: () => import(/* webpackChunkName: "meal" */ "./Meals")
            }
        ] 
    }
];
