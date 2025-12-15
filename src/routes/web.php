<?php

use Illuminate\Support\Facades\Route;

if ( config('server-information.enable') )
{
    Route::middleware( 'web' )
        ->prefix( config('server-information.url_prefix' ) )
        ->as( config('server-information.name_prefix' ) . "." )
        ->group( function () {
        Route::get( 'php', function () {
            echo "Laravel framework " . app()->version();
            phpinfo();
        } )->name( 'php' );
        Route::get( 'xdebug', fn() => xdebug_info() )->name( 'xdebug' );
    } );
}