<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\BaseRepository;
use App\Repositories\BaseRepositoryInterface;
use App\Repositories\InquiryRepositoryInterface;
use App\Repositories\InquiryRepository;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\UserRepository;

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
