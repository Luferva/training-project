<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ExerciceController;
use App\Http\Controllers\Admin\MainMuscleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('category', CategoryController::class);

Route::resource('main_muscle', MainMuscleController::class);

Route::resource('exercise', ExerciceController::class);



