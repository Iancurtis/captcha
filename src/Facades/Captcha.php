<?php

namespace Iancurtis\Captcha\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iancurtis\Captcha
 */
class Captcha extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor() { return 'captcha'; }

}
