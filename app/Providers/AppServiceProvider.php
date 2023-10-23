<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


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
        Validator::extend('phone_digits', function ($attribute, $value, $parameters, $validator) {
            // Check if the phone number has at least 10 digits
            return preg_match('/^\+255\d{7,}$/', $value);
        });

        Validator::replacer('phone_digits', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'Please enter a valid :attribute starting with "+255".');
        });
    }
}
