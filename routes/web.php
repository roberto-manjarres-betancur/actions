<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SampleController;

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

Route::get('/welcome', [SampleController::class, 'welcome']);
Route::get('/new_page', [SampleController::class, 'new_page']);


















Route::get('/', function () {
    return view('welcome');
});
