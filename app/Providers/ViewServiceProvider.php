<?php


namespace App\Providers;

use App\Http\View\Composers\BaseComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    public function boot(): void {
        View::composer('nav', BaseComposer::class);
    }
}
