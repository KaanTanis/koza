<?php

namespace KaanTanis\Koza\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static rows(array $fields)
 */
class Layout extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'layout';
    }
}
