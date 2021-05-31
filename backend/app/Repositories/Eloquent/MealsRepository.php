<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\MealsRepositoryInterface;
use App\Models\Meal;

class MealsRepository implements MealsRepositoryInterface
{
    public function getAllMeals(): ?object
    {
        $meals = Meal::all();

        if(!$meals) return null;

        return $meals;
    }

    public function getMealById(int $meal_id): ?object
    {
        $meal = Meal::find($meal_id);

        if(!$meal) return null;

        return $meal;
    }

    public function getCategoryByMeal(int $meal_id): ?array
    {
        $meal = $this->getMealById($meal_id);

        $category = $meal->category;

        if(!$category) return null;

        return $category->toArray();
    }

    public function getAreaByMeal(int $meal_id): ?array
    {
        $meal = $this->getMealById($meal_id);

        $area = $meal->area;

        if(!$area) return null;

        return $area->toArray();
    }

    public function getAllDataByMeal(int $meal_id): ?array
    {
        $meal = $this->getMealById($meal_id);

        $allDataMeal = $meal->with('category', 'area')->get();

        $allDataMeal = $allDataMeal->find($meal_id);

        if(!$allDataMeal) return null;

        return $allDataMeal->toArray();
    }

    public function getAllMealsPaginate(): ?array
    {
        $pagedMeals = Meal::paginate(3);

        if(!$pagedMeals) return null;

        return $pagedMeals->toArray();
    }
}
