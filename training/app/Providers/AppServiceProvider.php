<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        Paginator::useBootstrap();
        $setting = Setting::first();
        $categoriess = Category::orderBy('id','desc')->take(6)->get();
        $courses = Course::orderBy('id','desc')->take(6)->get();
        View::share([
            'setting'=>$setting ,
            'categoriess'=>$categoriess,
            'courses'=>$courses,
            ]);
    }
}
