<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\BaseRepository;
use App\Repository\BaseRepositoryInterface;
use App\Repository\InquiryRepositoryInterface;
use App\Repository\InquiryRepository;
use App\Repository\UserRepositoryInterface;
use App\Repository\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(InquiryRepositoryInterface::class, InquiryRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
