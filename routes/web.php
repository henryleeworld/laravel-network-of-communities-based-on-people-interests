<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\CommunityPostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostCommentController;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('c/{slug}',
    [CommunityController::class, 'show'])
    ->name('communities.show');

Route::get('p/{postId}',
    [CommunityPostController::class, 'show'])
    ->name('communities.posts.show');

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('communities', CommunityController::class)
        ->except('show');
    Route::resource('communities.posts', CommunityPostController::class)
        ->except('show');
    Route::resource('posts.comments', PostCommentController::class);
    Route::post('posts/{post_id}/report', [CommunityPostController::class, 'report'])->name('post.report');
});
