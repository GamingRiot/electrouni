<?php

use App\Http\Controllers\Auth\ChangePassword;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthController\Login;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ForumPostController;
use App\Http\Controllers\ForumTopicsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileSettings\AboutController;
use App\Http\Controllers\ProfileSettings\EducationController;
use App\Http\Controllers\ProfileSettings\HobbiesController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

Route::get('/login', [LoginController::class, 'login'])->middleware("guest")->name("login");
Route::post('/login', [LoginController::class, 'handleLogin']);
Route::get('/register', [RegisterController::class, 'register'])->middleware("guest")->name("register");
Route::post('/register', [RegisterController::class, 'handleRegister']);
Route::get("/logout", function () {
    Auth::logout();
    return redirect("/");
});
Route::get('/edit-password', [ChangePassword::class, 'index'])->middleware("auth");
Route::post('/edit-password', [ChangePassword::class, 'update'])->middleware("auth");
Route::resource('/profile', ProfileController::class)->middleware("auth");
Route::resource('/about', AboutController::class)->middleware("auth");
Route::resource('/education', EducationController::class)->middleware("auth");
Route::resource('/hobbies', HobbiesController::class)->middleware("auth");
Route::get('/feed', [FeedController::class, 'index'])->middleware("auth");
Route::post('/feed', [FeedController::class, 'store'])->middleware("auth");
Route::get('/like/{post}', [PostController::class, 'like'])->name("like")->middleware("auth");
Route::get('/post/{post}', [PostController::class, 'comment'])->middleware("auth")->name("comment");
Route::post('/post/{post}', [PostController::class, 'storeComment'])->middleware("auth");
Route::get('/post/{post}/delete/{comment}', [PostController::class, 'deleteComment'])->middleware("auth")->name("deleteCom");
Route::get('/delete/{post}', [PostController::class, 'destroy'])->middleware("auth")->name("delete");
Route::get('/edit/{post}', [PostController::class, 'edit'])->middleware("auth")->name("edit");
Route::post('/edit/{post}', [PostController::class, 'update'])->middleware("auth");

Route::get('/forum', [ForumTopicsController::class, 'index'])->middleware("auth");
Route::get('/forum/create', [ForumTopicsController::class, 'create'])->middleware("auth");
Route::post('/forum/create', [ForumTopicsController::class, 'store'])->middleware("auth");

Route::get('/forum/{forum}', [ForumController::class, 'index'])->middleware("auth");
Route::get('/forum/{forum}/create', [ForumController::class, 'create'])->middleware("auth");
Route::post('/forum/{forum}/create', [ForumController::class, 'store'])->middleware("auth");

Route::get('/forum/{forum}/{post}', [ForumPostController::class, 'index'])->middleware("auth");
Route::post('/forum/{forum}/{post}', [ForumPostController::class, 'store'])->middleware("auth");
