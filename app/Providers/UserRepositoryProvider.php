<?php

namespace App\Providers;

use App\Http\Repositories\Impl\UserRepositoryImpl;
use App\Http\Repositories\UserRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class UserRepositoryProvider extends ServiceProvider implements DeferrableProvider
{
    public $singletons = [
        UserRepository::class => UserRepositoryImpl::class,
    ];

    public function provides()
    {
        return [UserRepository::class];
    }

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
