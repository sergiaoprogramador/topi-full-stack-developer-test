<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function () {
    return "TOPi - Full Stack Developer Test - A Sample Laravel API";
});

Route::get('/meals', [MealsController::class, 'getAll']);
Route::get('/meals/{meal_id}', [MealsController::class, 'getMeal']);
Route::get('/meals/{meal_id}/category', [MealsController::class, 'getCategoryMeal']);
Route::get('/meals/{meal_id}/area', [MealsController::class, 'getAreaMeal']);
