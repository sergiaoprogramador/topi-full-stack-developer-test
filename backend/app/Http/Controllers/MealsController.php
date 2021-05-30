<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\MealsRepositoryInterface;
use App\Traits\ResponseAPI;

class MealsController extends Controller
{
    use ResponseAPI;

    public function __construct(
        private MealsRepositoryInterface $mealsRepositoryInterface
    ) { }

    public function getAll(): object
    {
        try {
            $allMeals = $this->mealsRepositoryInterface->getAllMeals();
            // dd($allMeals);

            if(!$allMeals) return $this->error("Not exists meals!", 404);

            return $this->success("All meals", $allMeals->toArray(), 200);
        } catch (\Throwable $th) {
            // Implement callback of error
        }
    }

    public function getMeal(int $meal_id): object
    {
        try {
            $meal = $this->mealsRepositoryInterface->getMealById($meal_id);

            if(!$meal) return $this->error("Not exists Meal for this ID $meal_id", 404);

            return $this->success("Meal - ID $meal_id", $meal, 200);
        } catch (\Throwable $th) {
            //callback error
        }
    }

    public function getCategoryMeal(int $meal_id): object
    {
        try {
            $categoryMeal = $this->mealsRepositoryInterface->getCategoryByMeal($meal_id);

            if(!$categoryMeal) return $this->error("Not exists Category for this Meal", 404);

            return $this->success("Meal Category ", $categoryMeal, 200);
        } catch (\Throwable $th) {
            //callback error
        }
    }

    public function getAreaMeal(int $meal_id): object
    {
        try {
            $areaMeal = $this->mealsRepositoryInterface->getAreaByMeal($meal_id);

            if(!$areaMeal) return $this->error("Not exists Area for this Meal", 404);

            return $this->success("Area Category ", $areaMeal, 200);
        } catch (\Throwable $th) {
            //callback error
        }
    }
}
