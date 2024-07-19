<?php

use App\Http\Controllers\fontend\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|                        Web Routes FONTEND
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
Route::get("/home", [HomeController::class,"index"])->name("home");
Route::get("/about", [HomeController::class,"aboutView"])->name("about");
Route::get("/contact", [HomeController::class,"contactView"]);
Route::get("/tag", [HomeController::class,"tagView"]);
Route::get("/login", [HomeController::class,"loginView"]);
Route::get("/detail", [HomeController::class,"detailView"]);






