<?php

use App\Http\Controllers\connexionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sauceController;
use App\Http\Controllers\inscriptionController;
use App\Http\Controllers\CreateSauceController;
use App\Models\sauce;

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

Route::get('sauce/{id}', [sauceController::class, 'show'])
    ->name('sauce.show');

Route::get('sauce', [sauceController::class, 'index'])
    ->name('sauce');

//Inscription
Route::get('register', [inscriptionController::class, 'register'])
    ->name('register');

Route::post('newUser', [inscriptionController::class, 'newUser'])
    ->name('newUser');

//Login
Route::get('login', [connexionController::class, 'login'])
    ->name('login');

Route::post('authenticate', [connexionController::class, 'authenticate'])
    ->name('authenticate');

Route::get('logout', [connexionController::class, 'logout'])
    ->name('logout');

//Add Sauce
Route::get('createSauce', [sauceController::class, 'create'])
    ->name('create');

Route::post('addSauce', [sauceController::class, 'addSauce'])
    ->name('addSauce');

//Like/Dislike Sauce
Route::get('likeSauce/{id}', [sauceController::class, 'likeSauce'])
    ->name('likeSauce');

Route::get('dislikeSauce/{id}', [sauceController::class, 'dislikeSauce'])
    ->name('dislikeSauce');

//Suppression Edition
Route::get('deleteSauce/{id}', [sauceController::class, 'deleteSauce'])
    ->name('deleteSauce');

Route::post('editSauce/{id}', [sauceController::class, 'editSauce'])
    ->name('editSauce');
