<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
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
        Blade::directive('datetime', function (string $expression) {
            return "<?php echo ($expression)->format('d.m.Y H:i'); ?>";
        });
        Blade::directive('date', function (string $expression) {
            return "<?php echo ($expression)->format('d.m.Y'); ?>";
        });
        Paginator::defaultView('components.pagination');
    }
}
