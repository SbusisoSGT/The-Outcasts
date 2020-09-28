<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Article;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerArticlePolicies();
        
    }

    public function registerArticlePolicies()
    {
        Gate::define('create-article', function ($user) {
            return $user->hasAnyRoles(['Author', 'Publisher', 'Admin']);
        });

        Gate::define('update-article', function ($user, Article $article) {
            return $user->hasAnyRoles(['Publisher', 'Admin']) or $user->id == $article->user_id;
        });

        Gate::define('publish-article', function ($user) {
            return $user->hasAnyRoles(['Publisher', 'Admin']);
        });
    }
}
