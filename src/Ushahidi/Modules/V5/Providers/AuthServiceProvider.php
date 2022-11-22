<?php

namespace Ushahidi\Modules\V5\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Ushahidi\Modules\V5\Models;
use Ushahidi\Modules\V5\Policies;
use Ushahidi\Modules\V5\Policies\CountryCodePolicy;

class AuthServiceProvider extends ServiceProvider
{

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Models\Survey::class => Policies\SurveyPolicy::class,
        Models\Category::class => Policies\CategoryPolicy::class,
        Models\Post\Post::class => Policies\PostPolicy::class,
        Models\CountryCode::class => CountryCodePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
