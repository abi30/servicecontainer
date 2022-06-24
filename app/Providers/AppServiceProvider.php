<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Register\StudentRegister;
use App\Register\TeacherRegister;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(StudentRegister::class, function ($app) {
            return new StudentRegister(2021, 'EUR');
        });

        $this->app->bind(TeacherRegister::class, function ($app) {
            return new TeacherRegister(2009, 'USD');
        });

        $this->app->singleton(PaymentGatewayContract::class, function ($app) {

            if (request()->has('credit')) {
                return new CreditPaymentGateway('USD');
            }
            return new BankPaymentGateway('USD');
        });





        app()->bind('first_service_helper', function ($app) {
            dd('this is the first service container');
        });

        App::getFacadeApplication()->bind('second_service_helper', function ($app) {
            dd('this is the second service container');
        });
        app()->bind('third_service_helper', function ($app) {
            dd('this is the third service container');
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}