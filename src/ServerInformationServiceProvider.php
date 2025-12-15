<?php

namespace Variotry\ServerInformation;

use Illuminate\Support\ServiceProvider;

class ServerInformationServiceProvider extends ServiceProvider
{
    protected $config = __DIR__ . '/config/server-information.php';

    public function register() : void
    {
        // config merge, bind
        $this->mergeConfigFrom( $this->config, 'server-information' );
    }

    public function boot() : void
    {
        $this->publishes( [
            $this->config => config_path( 'server-information.php' ),
        ], 'server-information:config' );
        $this->loadRoutesFrom( __DIR__ . '/routes/web.php' );
    }
}