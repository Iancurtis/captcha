<?php

namespace Mews\Captcha;

use Illuminate\Routing\Controller;
use Mews\Captcha\Facades\Captcha;

/**
 * Class CaptchaController
 * @package Mews\Captcha
 */
class CaptchaController extends Controller
{

    /**
     * get CAPTCHA
     *
     * @param \Mews\Captcha\Captcha $captcha
     * @param string $config
     * @return \Intervention\Image\ImageManager->response
     */
    public function getCaptcha($config = 'default')
    {
        return Captcha::create($config);
    }

}
