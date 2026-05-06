<?php

namespace App\Providers;

use App\Models\Community;
use App\Models\Post;
use App\Models\PostVote;
use App\Models\User;
use App\Observers\PostVoteObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (! app()->runningInConsole()) {
            Paginator::useBootstrapFive();

            View::share('newestPosts', Post::with('community')->latest()->take(5)->get());
            View::share('newestCommunities', Community::withCount('posts')->latest()->take(5)->get());

            PostVote::observe(PostVoteObserver::class);

            Gate::define('delete-post', function (User $user, Post $post) {
                return $user->is_admin || in_array($user->id, [$post->user_id, $post->community->user_id]);
            });
            Gate::define('edit-post', function (User $user, Post $post) {
                return $user->id === $post->user_id;
            });
        }
    }
}
