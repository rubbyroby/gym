<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClassementsController;
use App\Http\Controllers\ResultatsController;
use App\Http\Controllers\EquipesController;
use App\Http\Controllers\MatchsController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\JoueursController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/classements', ClassementsController::class);
Route::get('/classements/create', [ClassementsController::class, 'create']);
Route::get('/classements', [ClassementsController::class, 'store']);
Route::put('/classements/{id}', [ClassementsController::class, 'update']);
Route::get('/classements/{id}/edit', [ClassementsController::class, 'edit']);
Route::delete('/classements/{id}', [ClassementsController::class, 'destroy']);


Route::resource('/resultats/index', ResultatsController::class);
Route::resource('/resultats/create', ResultatsController::class,[]);
Route::resource('/resultats/update', ResultatsController::class,[]);


Route::resource('/equipes/index', EquipesController::class);
Route::resource('/equipes/create', EquipesController::class,[]);
Route::resource('/equipes/update', EquipesController::class,[]);

Route::resource('/matchs/index', MatchsController::class);
Route::resource('/matchs/create', MatchsController::class,[]);
Route::resource('/matchs/update', MatchsController::class,[]);

Route::resource('/sports/index', SportsController::class);
Route::resource('/sports/create', SportsController::class,[]);
Route::resource('/sports/update', SportsController::class,[]);

Route::resource('/joueurs/index', JoueursController::class);
Route::resource('/joueurs/create', JoueursController::class,[]);
Route::resource('/joueurs/update', JoueursController::class,[]);