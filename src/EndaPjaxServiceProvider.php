<?php
/**
 * User: 袁超<yccphp@163.com>
 * Time: 2015.10.28 下午12:01
 */
namespace YuanChao\Pjax;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class EndaPjaxServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadViewsFrom(__DIR__ . '/views', 'pjax');

        $this->publishes([
            __DIR__ . '/pjax' => base_path('public/plugin/pjax'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}