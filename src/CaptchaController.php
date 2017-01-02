<?php

namespace Iancurtis\Captcha;

use Illuminate\Routing\Controller;
use Iancurtis\Captcha\Facades\Captcha;

/**
 * Class CaptchaController
 * @package Iancurtis\Captcha
 */
class CaptchaController extends Controller
{

    /**
     * get CAPTCHA
     *
     * @param \Iancurtis\Captcha\Captcha $captcha
     * @param string $config
     * @return \Intervention\Image\ImageManager->response
     */
    public function getCaptcha($config = 'default')
    {
        return Captcha::create($config);
    }

}
