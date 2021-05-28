<?php

namespace App\Repositories\Providers;

use App\Repositories\Contracts\MealsRepositoryInterface;
use App\Repositories\Eloquent\MealsRepository;
use Carbon\Laravel\ServiceProvider;

class RegisterRepositoriesServiceProvider extends ServiceProvider
{
    public $singletons = [
        MealsRepositoryInterface::class => MealsRepository::class
    ];
}
