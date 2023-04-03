<?php

namespace App\Providers;

use App\Models\Accreditation;
use App\Repositories\Interfaces\OfferRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\RegCFRepositoryInterface;
use App\Repositories\OfferRepository;
use App\Repositories\RegCFRepository;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RegCFRepositoryInterface::class, RegCFRepository::class);
        $this->app->bind(OfferRepositoryInterface::class, OfferRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $accreditations = Accreditation::get();
        view()->share('accreditations', $accreditations);
    }
}
