<?php

namespace App\Repositories\Contracts;

interface MealsRepositoryInterface
{
    public function getAllMeals(): object|null;

    public function getMealById(int $meal_id): object|null;

    public function getCategoryByMeal(int $meal_id): array|null;

    public function getAreaByMeal(int $meal_id): array|null;
}
