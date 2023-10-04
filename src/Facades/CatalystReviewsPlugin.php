<?php

namespace OmniaDigital\CatalystReviewsPlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \OmniaDigital\CatalystReviewsPlugin\CatalystReviewsPlugin
 */
class CatalystReviewsPlugin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \OmniaDigital\CatalystReviewsPlugin\CatalystReviewsPlugin::class;
    }
}
