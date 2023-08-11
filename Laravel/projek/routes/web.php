<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    $data = [
        "title" => "Dashboard",
        "user" => [
            "name" => "Azza",
            "email" => "azza@gmail.com"
        ]
    ];
    return view('content.dashboard', $data);
});

Route::get('/users', [UserController::class, 'index']);
Route::resource('/categories', [CategoryController::class]);
Route::get('/home', [TaskController::class, 'index']);
Route::get('/task/{id}', [TaskController::class, 'show']);