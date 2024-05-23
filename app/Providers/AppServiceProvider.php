<?php

namespace App\Providers;

use App\Models\Page;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

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
        Paginator::useBootstrap();
      $pages =  Page::query()->get();
      $pageHakkimizda =  Page::query()->where('id', 1)->first();

      view()->share([
          'pages' => $pages
      ]);
    }
}
