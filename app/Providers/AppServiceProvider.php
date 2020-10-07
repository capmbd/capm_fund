<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use View;
use DB;
use Carbon\Carbon;

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
        Schema::defaultStringLength(191);

        View::composer('BackEnd.pages.dashboard',function($rate_capmuf){
            $capm_fund = DB::table('price_rate')
                           ->where('PRO_REG_ID', '=', 1)
                           ->first();
            $rate_capmuf->with('capm_fund',$capm_fund);
        });
    }
}