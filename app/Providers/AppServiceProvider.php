<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\CheckPasswordPolicy;
use Illuminate\Support\Facades\Gate;
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

        Gate::define('check_password', [CheckPasswordPolicy::class, 'checkPassword']);


//        Gate::define('check_password', function () {
//            $user = User::find(auth()->user()->id);
//            if($user->password_route == 0){
//               return true;
//            }
//            return false;
//
//        });
    }
}
