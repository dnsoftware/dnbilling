<?php

namespace Dnsoftware\Dnbilling;

use Illuminate\Support\ServiceProvider;

class DnbillingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //$this->mergeConfigFrom(__DIR__ . '/../config/dnbilling.php', 'dnbilling');
        $this->loadTranslationsFrom(__DIR__ . '/lang', 'dnsoftware');

        $this->publishes([
            __DIR__ . '/../lang' => resource_path('lang/vendor/dnsoftware')
        ], 'lang');

        $this->publishes([
            __DIR__.'/../config/dnbilling.php' => config_path('dnbilling.php'),
        ], 'config');
    }

    public function register()
    {

    }



}