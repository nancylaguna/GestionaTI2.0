<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * Las URIs que deben ser accesibles mientras el modo de mantenimiento esté habilitado.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
