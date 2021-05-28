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

            if(!$allMeals) $this->error("Don't exists meals!", 404);

            return $this->success("All meals", $allMeals->toArray(), 200);
        } catch (\Throwable $th) {
            // Implement callback of error
        }
    }
}
