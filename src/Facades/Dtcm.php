<?php

namespace Index\Dtcm\Facades;

use Illuminate\Support\Facades\Facade;

class Dtcm extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dtcm';
    }
}
