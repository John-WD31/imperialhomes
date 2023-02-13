<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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

/* User routes */
Route::get('/', [UserController::class, 'index']);

Route::get('/property', [UserController::class, 'property']);

Route::get('/agents', [UserController::class, 'agent']);

Route::get('/login', [UserController::class, 'login']);

//Login User
Route::post('/login/authenticate', [UserController::class, 'authenticate']);

//Show Register / Create Form
Route::get('/register', [UserController::class, 'create']);

//Create New User
Route::post('/users', [UserController::class, 'store']);

//Log User Out
Route::post('/logout', [UserController::class, 'logout']);


/* Dashboard */
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/dashboard/calendar', [DashboardController::class, 'calendar']);

Route::get('/dashboard/create', [DashboardController::class, 'create']);

Route::post('/dashboard/listings', [DashboardController::class, 'store']);

Route::get('/dashboard/{listings}/edit', [DashboardController::class, 'edit']);

Route::put('/dashboard/{listings}', [DashboardController::class, 'update']);

Route::delete('/dashboard/{listing}', [DashboardController::class, 'destroy']);

Route::get('/dashboard/forms', [DashboardController::class, 'forms']);

Route::get('/dashboard/tables', [DashboardController::class, 'tables']);
