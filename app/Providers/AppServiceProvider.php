<?php

namespace App\Providers;

use App\Http\View\Composers\ChannelComposer;
use App\Models\Channel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Share in every single view lol!!
        // View::share('channels', Channel::orderBy('name')->get());

        // Granular views with wildcards
        // View::composer(
        //     [
        //         // 'post.create',
        //         'post.*',
        //         'channel.index'
        //     ],
        //     function ($view) {
        //         $view->with('channels', Channel::orderBy('name')->get());
        //     }
        // );

        // Dedicated class
        View::composer('partials.channels.*', ChannelComposer::class);
    }
}
