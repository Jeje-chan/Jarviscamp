<?php

use App\Http\Controllers\TaskController;
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

Route::get('/users', function () {
    $data = [
        "title" => "Users"
    ];
    return view('content.users', $data);
});


// Route::get('/', [TaskController::class, 'index']);