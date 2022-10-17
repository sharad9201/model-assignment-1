<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\HomepageController;

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
    return view('Homepage');
});
Route::get('/post',[PostController::class, 'index'])->name('post.position');
Route::get('/advertise',[AdvertisementController::class, 'index'])->name('advertisement.topics');
Route::get('/comment',[CommentController::class, 'index']) ->name('comment.comment_text');
Route::get('/community',[CommunityController::class, 'index'])->name('community.name');
Route::get('/category',[CategoryController::class, 'index'])->name('category.business');
Route::get('/homepage',[HomepageController::class, 'index']);




