<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});         



Route::get('/dashboard', [DashboardController::class,  'index']);
Route::get('/dashboard/create', [DashboardController::class, 'create']);
Route::post('/dashboard', [DashboardController::class, 'store']);
Route::get('/dashboard/edit/{id}', [DashboardController::class, 'edit']);
Route::get('/dashboard/delete/{id}', [DashboardController::class, 'delete']);