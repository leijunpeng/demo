<?php


namespace Leijunpeng\Demo\Providers;


use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\ServiceProvider;

class AbstractServiceProvider extends ServiceProvider
{
    protected  $middlewareAliases = [
        'jwt:auth' => Authenticate::class,

    ];

}