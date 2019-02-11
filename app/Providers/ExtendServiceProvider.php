<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use Illuminate\Validation\Validator;

class ExtendServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer(
            // 'extend.index', function($view){
            //     $view->with('view_message','composer message!');
            // }
            'extend.index', 'App\Http\Composers\ExtendComposer'
        );
    }
}
