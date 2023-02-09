<?php

namespace App\Providers;

use App\Service\ParserService;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class ParserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register()
    {
        //Broadcast::routes();
        //$this->app->bind(Parser::class,'App/Service/ParserService');
        //$this->app->alias(ParserService::class, 'Parser');
      //  $this->app->bind(ParserService::class, function ($app) {
            //return new ParserService($app->make(ParserService::class));
       // });
    }
}
