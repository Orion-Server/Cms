<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\JailController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Article\ArticleReactionController;

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

Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('jail', [JailController::class, 'show'])->name('jail');

Route::prefix('hotel')
    ->name('hotel.')
    ->middleware('auth')
    ->group(function() {
        Route::get('nitro', [ClientController::class, 'nitro'])->name('nitro');
    });

Route::prefix('articles')
    ->name('articles.')
    ->group(function() {
        Route::get('/', [ArticleController::class, 'index'])->name('index');
        Route::get('{id}/{slug}', [ArticleController::class, 'show'])->name('show');

        Route::post('{id}/{slug}/reacts/{reactionId}', ArticleReactionController::class)
            ->name('reactions.toggle');
    });

Route::prefix('community')
    ->name('community.')
    ->group(function() {
        Route::get('photos', fn() => view('pages.community.photos.index'))->name('photos.index');
        Route::get('staff', fn() => view('pages.community.staff.index'))->name('staff.index');
        Route::get('rankings', fn() => view('pages.community.rankings.index'))->name('rankings.index');
    });
