<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $widgets = [
        \App\Widgets\NavBar::class,
    ];

    /**
     * @var array
     */
    protected $sections = [
        //\App\User::class => 'App\Http\Sections\Users',
        \App\Models\Seos::class => 'App\Http\Sections\Seo',
        \App\Models\Dates::class => 'App\Http\Sections\Dates',
        \App\Models\Option::class => 'App\Http\Sections\Options'
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
