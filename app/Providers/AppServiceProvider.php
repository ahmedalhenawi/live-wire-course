<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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

//        Blade::if('btnstyle');
//        Blade::directive("btnstyle" , function (string $step){
//
//            list($steps ,$current_step ) = explode(",",$step);
//            dd($steps);
//            if ($steps == $current_step){
//                return"btn-primary";
//
//            }elseif($steps > $current_step ){
//                echo "btn-info";
//            }elseif($steps < $current_step){
//                echo "btn-default";
//            };
//        });
    }
}
