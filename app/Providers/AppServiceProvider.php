<?php

namespace App\Providers;


use App\Models\Category;
use App\Models\Town;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('categories')) {
            $allCategories = Category::all();
            view()->share('allCategories', $allCategories);
        }
        if (Schema::hasTable('towns')) {
            $allTowns = Town::all();
            view()->share('allTowns', $allTowns);
        }
        if (Schema::hasTable('contacts') && Schema::hasColumn('contacts', 'is_read')) {
            $unreadMessageCount = Contact::where('is_read', false)->count();
            view()->share('unreadMessageCount', $unreadMessageCount);
        }
        if (Schema::hasTable('users')) {
            view()->composer('*', function ($view) {
                $user = Auth::user();
                $view->with('user', $user);
            });
        }
    }
}
