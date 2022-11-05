<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TestFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Test';
    }
}
