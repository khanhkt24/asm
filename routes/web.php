<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\NewController;
use App\Http\Controllers\backend\PermissionController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\fontend\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IdAdmin;
use App\Http\Middleware\IdMember;
use Illuminate\Support\Facades\Auth;

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

Route::get('/webShop', function () {
    return view('welcome');
});
// Route::get("/home", [HomeController::class,"index"])->name("home");
Route::get("/about", [HomeController::class,"aboutView"])->name("about");
Route::get("/contact", [HomeController::class,"contactView"]);
Route::get("/tag", [HomeController::class,"tagView"]);
Route::get("/detail/{id}", [HomeController::class,"detail"])->name('font.detal');

/**
 * Admin
 */

//---------------------------------User---------------------------------------

Route::get("/user", [UserController::class,"index"])->name("user.index")->can('user.list');

Route::get("/user/{user}/edit", [UserController::class,"edit"])->name("user.edit")->can('user.edit');
Route::put("/user/{user}", [UserController::class,"update"])->name("user.update")->can('user.edit');
Route::delete("/user/{user}", [UserController::class,"destroy"])->name("user.destroy")->can('user.delete');

//---------------------------------Permission---------------------------------------

Route::get("/permission", [PermissionController::class,"index"])->name("permission.index");
Route::get("/permission/create", [PermissionController::class,"create"])->name("permission.create");
Route::post("/permission", [PermissionController::class,"store"])->name("permission.store");
Route::get("/permission/{permission}/edit", [PermissionController::class,"edit"])->name("permission.edit");
Route::put("/permission/{permission}", [PermissionController::class,"update"])->name("permission.update");
Route::delete("/permission/{permission}", [PermissionController::class,"destroy"])->name("permission.destroy");

//---------------------------------Roles---------------------------------------

Route::get("/role", [RoleController::class,"index"])->name("role.index");
Route::get("/role/create", [RoleController::class,"create"])->name("role.create");
Route::post("/role", [RoleController::class,"store"])->name("role.store");
Route::get("/role/{role}/edit", [RoleController::class,"edit"])->name("role.edit");
Route::put("/role/{role}", [RoleController::class,"update"])->name("role.update");
Route::delete("/role/{role}", [RoleController::class,"destroy"])->name("role.destroy");


// Route::resource('new', NewController::class);
// Route::resource('add', NewController::class);
// Route::get("/", [NewController::class,"index"])->name("new.index");

Route::get("/new/create", [NewController::class,"create"])->name("new.create")->can('news.post');
Route::post("/new", [NewController::class,"store"])->name("new.store")->can('news.post');
Route::get("/new/{new}/edit", [NewController::class,"edit"])->name("new.edit")->can('news.edit');
Route::put("/new/{new}", [NewController::class,"update"])->name("new.update")->can('news.edit');
Route::delete("/new/{new}", [NewController::class,"destroy"])->name("new.destroy")->can('news.delete');

/**
 * LOGIN
 */

Route::get("login", [AdminController::class,"showFormLogin"])->name("login");
Route::post("login", [AdminController::class,"handeleLogin"]);


Route::get("register", [AdminController::class,"showFormRegister"])->name("register");
Route::post("register", [AdminController::class,"handeleRegister"]);

Route::post("logout", [AdminController::class,"showFormlogout"])->name("logout");

Route::get('member',[HomeController::class,'dashboard'])
->name('member.home')
->middleware(['auth','is_member']);

Route::get('admin',[NewController::class,"index"])
->name('admin.home')
->middleware(['auth','is_admin']);













