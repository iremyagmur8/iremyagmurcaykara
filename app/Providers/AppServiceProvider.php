<?php

namespace App\Providers;

use App\Models\contact;
use Illuminate\Support\ServiceProvider;
use App\Models\category;
use App\Models\post;
use App\Models\doctor;
use App\Models\banner;
use Config;

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

        view()->composer('*', function ($view) {

            $vars = new \ArrayObject();
            if (!session()->get('lang'))
                session()->put('lang', 'en');
            app()->setLocale(session()->get('lang'));

            $vars->menu = category::where('parent_id', '=', 31)->orderBy('sort')->get();
            $vars->recent = post::orderByDesc('id')->limit(10)->get();

            $vars->hits = post::where("created_at", ">", date("Y-m-d H:i:s", strtotime("-1 week")))->orderByDesc('hit')->limit(10)->get();
            $vars->sitename = config()->get("solaris.site.name");

            $ids = array();
            $static = banner::where("place", 10)->pluck("shortdescription")->first();
            if ($static) {
                $ids = explode(",", $static);
            }
            $vars->contact = contact::first();
            $vars->static = post::whereIn("id", $ids)->get();

            $view->with(compact('vars'));
        });

    }
}
