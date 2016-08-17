<?php

namespace App\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app['request']->server->set('HTTPS', $this->app->environment() != 'local');

        Blade::directive('progressbary', function($arguments) {

            list($label, $value) = explode(',',str_replace(['(',')',' ', "'"], '', $arguments));

            $string =  "<span>".$label."</span><div class='progress'>".
                        "<div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow='".$value."'".
                             " aria-valuemin='0'".
                             " aria-valuemax='100' style='width: ".$value."%'>".
                            "<span class='sr-only'>".$value."% Complete (success)</span>".
                        "</div>".
                    "</div>";
            return $string;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
