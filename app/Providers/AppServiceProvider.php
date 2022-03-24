<?php

namespace App\Providers;

use App\Http\Contracts\TranslatorProvider;
use App\Http\Repositories\JustTranslate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(TranslatorProvider::class, function () {
            switch (config('translation.provider')) {
                case "JustTranslate":
                    return new JustTranslate();
                    break;

                case "google":
                    break;

                default:
                    return response()->json(["error" => "No Translation provider selected"], 404);
            }
        });
    }
}
