<?php

namespace PionixLabs\GluImage\Facades;

use Illuminate\Support\Facades\Facade;

class GluImage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return static::getFacadeApplication()->make('glu-image');
    }
}
