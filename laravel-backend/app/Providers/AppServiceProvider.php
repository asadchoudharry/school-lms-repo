<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Models\Result;
use App\Observers\ResultObserver;

class AppServiceProvider extends ServiceProvider {
    public function register() {}
    public function boot() {
        Result::observe(ResultObserver::class);
    }
}
