<?php

namespace DiscordLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \DiscordLaravel\DiscordLaravel
 */
class DiscordLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \DiscordLaravel\DiscordLaravel::class;
    }
}
