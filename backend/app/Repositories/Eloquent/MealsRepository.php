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
}
