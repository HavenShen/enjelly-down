<?php
/**
 * Created by PhpStorm.
 * User: HavenShen
 * Date: 15/12/22
 * Time: 下午3:18
 */

namespace HavenShen\EnjellyDown\Facades;

use Illuminate\Support\Facades\Facade;

class EnjellyDown extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(){
        return 'EnjellyDown';
    }
}