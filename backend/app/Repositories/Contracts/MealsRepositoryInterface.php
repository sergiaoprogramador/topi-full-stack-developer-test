<?php

namespace App\Repositories\Contracts;

interface MealsRepositoryInterface
{
    public function getAllMeals(): object|null;
}
