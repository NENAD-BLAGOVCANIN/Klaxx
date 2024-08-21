<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use Illuminate\Console\Scheduling\Schedule;

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
        View::composer('*', function ($view) {
            $categories = Category::with('subcategories')->whereNull('parent_category_id')->get();

            $view->with('categories', $categories);
        });

        // $schedule = app(Schedule::class);
        // $schedule->command('listings:expire')->everyFiveMinutes();
    }
}
