<?php

namespace Jetimob\Studio360\Facades;

use Illuminate\Support\Facades\Facade;

class Studio360 extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'jetimob.studio360';
    }
}
