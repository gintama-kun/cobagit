<?php

return [
    'secret' => env('CAPTCHA_SECRET', '6LeVidQUAAAAAE3Vr9fbszpSdrhmN-GRJXMtPXst'),
    'sitekey' => env('CAPTCHA_SITEKEY', '6LeVidQUAAAAAGNSJ1dYMWQMvSmJBG9yWhl0J2wY'),
    /**
     * @var string|null Default ``null``.
     * Custom with function name (example customRequestCaptcha) or class@method (example \App\CustomRequestCaptcha@custom).
     * Function must be return instance, read more in repo ``https://github.com/thinhbuzz/laravel-google-captcha-examples``
     */
    'request_method' => null,
    'options' => [
        'multiple' => false,
        'lang' => app()->getLocale(),
    ],
    'attributes' => [
        'theme' => 'dark'
    ],
];
