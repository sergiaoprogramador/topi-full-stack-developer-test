export default {
    findAllDataByMeal: {
        url: 'meals/{meal_id}/allData',
        method: 'get'
    },
    findAllMealsPaginated: {
        url: 'meals/allDataPaginated?page=',
        method: 'get'
    }
}