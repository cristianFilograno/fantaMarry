<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;

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


// ROTTE USER
Route::get('/user/profile/{userId}', [UserController::class, 'showProfile'])->name('user.profile');
// Route::get('/players/index', [UserController::class, 'index'])->name('player.index');
Route::put('/user/avatar/{user}', [UserController::class, 'changeAvatar'])->name('user.avatar');


// ROTTE POST
Route::get('post/index', [PostController::class, 'index'])->name('post.index');