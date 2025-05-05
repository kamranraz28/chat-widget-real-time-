
<?php

namespace Kamran\ChatWidget;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ChatWidgetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'kamran-chat-widget');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        Blade::component('chat-widget', Components\ChatWidget::class);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/kamran-chat-widget'),
        ], 'views');
    }

    public function register()
    {
    }
}
