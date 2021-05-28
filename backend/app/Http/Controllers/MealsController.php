<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\MealsRepositoryInterface;

class MealsController extends Controller
{

    public function __construct(
        private MealsRepositoryInterface $mealsRepositoryInterface
    ) { }

    public function getAll(): array
    {
        try {
            $allMeals = $this->mealsRepositoryInterface->getAllMeals();

            if(!$allMeals) dd("Don't exists meals!");

            dd($allMeals->toArray());

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
