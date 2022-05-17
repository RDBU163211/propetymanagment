<?php


use App\Models\managers;
use App\Models\custemer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\managersController;
use App\Http\Controllers\custemerController;



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
Route::get('/managers/register', [managersController::class, 'register'])->name('managers/register');
Route::post('/managers/register', [managersController::class, 'store'])->name('managers/register');
Route::get('/custemer/register', [CustemerController::class, 'register'])->name('custemer/register');
Route::post('/custemer/register', [custemerController::class, 'store'])->name('custemer/register');



//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController ::class, 'index'])->name('home');
Route::get('/managers/list', [managersController::class, 'get_all'])->name('managers/list');
Route::get('/custemer/get_all', [custemerController::class, 'get_all'])->name('custemer/get_all');
Route::get('/managers/edit/{id}', [managersController::class, 'edit']);
Route::post('/managers/update',[managersController::class,'update'])->name('managers/update');
Route::get('/managers/delete/{id}', [managersController::class, 'delete']);
Route::get('/managers/search/{id}', [managersController::class, 'get_by_id']);
Route::get('/custemer/search/{id}', [custemerController::class, 'get_by_id']);
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
