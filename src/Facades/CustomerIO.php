<?php

namespace FabioFerreira\CustomerIO\Facades;

use Illuminate\Support\Facades\Facade;

class CustomerIO extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'customerio';
    }
}
