<?php

namespace Arispati\AppLocale\Facades;

use Illuminate\Support\Facades\Facade;

class AppLocale extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'applocale';
    }
}