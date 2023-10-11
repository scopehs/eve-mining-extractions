<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        $project_title = '| MNDS Calendar';
        View::share('title', $project_title);   

        # Boot In EVE Provider
        $socialite = $this->app->make('Laravel\Socialite\Contracts\Factory');
        $socialite->extend(
            'eveonline',
            function ($app) use ($socialite) {
                $config = $app['config']['services.eveonline'];
                return $socialite->buildProvider(EVEOnlineSocialiteProvider::class, $config);
            }
        );

        # Throw in the character details into side bar.

        # Get the character of the logged in user.
        view()->composer(
            'layouts.ledger.master',
            function ($view) {
                $character = User::where('id', Auth::id())
                ->with('token.character.corporation')
                ->first();
                $view->with('character', $character);
            }
        );

    }
}
