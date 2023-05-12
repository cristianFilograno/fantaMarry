<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TeamController;

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

// ROTTE PUBLIC
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/rules', [PublicController::class, 'rules'])->name('regole');
Route::get('/leaderboard', [PublicController::class, 'showLeaderboard'])->name('leaderboard');
Route::get('/user/index', [PublicController::class, 'index'])->name('user.index');



// ROTTE USER
Route::get('/user/profile/{userId}', [UserController::class, 'showProfile'])->name('user.profile');
Route::put('/user/avatar/{user}', [UserController::class, 'changeAvatar'])->name('user.avatar');

// ROTTE PLAYER

// ROTTE ADMIN
Route::put('/player/score/{player}', [AdminController::class, 'changeScore'])->name('user.score');

// ROTTE POST
Route::get('post/index', [PostController::class, 'index'])->name('post.index');

// ROTTE TEAM
Route::get('team/create', [TeamController::class, 'create'])->name('team.create');
Route::post('team/store', [TeamController::class, 'store'])->name('team.store');