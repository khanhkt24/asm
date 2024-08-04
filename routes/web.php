<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\NewController;
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

Route::get('/hahahahah', function () {
    return view('welcome');
});
Route::get("/home", [HomeController::class,"index"])->name("home");
Route::get("/about", [HomeController::class,"aboutView"])->name("about");
Route::get("/contact", [HomeController::class,"contactView"]);
Route::get("/tag", [HomeController::class,"tagView"]);
Route::get("/login", [HomeController::class,"loginView"]);
Route::get("/detail", [HomeController::class,"detailView"]);

/**
 * Admin
 */

Route::get("/admin", [AdminController::class,"admin"])->name("admin");

// Route::resource('new', NewController::class);
// Route::resource('add', NewController::class);
Route::get("/", [NewController::class,"index"])->name("new.index");

Route::get("/new/create", [NewController::class,"create"])->name("new.create");
Route::post("/new", [NewController::class,"store"])->name("new.store");
Route::get("/new/{new}/edit", [NewController::class,"edit"])->name("new.edit");
Route::put("/new/{new}", [NewController::class,"update"])->name("new.update");
Route::delete("/new/{new}", [NewController::class,"destroy"])->name("new.destroy");











