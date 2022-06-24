<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayOrderController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
// use App\Person;

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

// app()->bind('getName', Person::class);
// $name = app()->make('getName');
// $name->setName("rakib");
// echo $name->getName();
// die();
Route::get('/', function () {

    dd(app());
    return view('welcome');
});

// Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/test', function () {

    app()->make('first_service_helper');
});

Route::get('/test1', [PayOrderController::class, 'store']);
Route::get('/student1', [StudentsController::class, 'store']);
Route::get('/teacher1', [TeachersController::class, 'store']);