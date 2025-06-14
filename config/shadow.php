<?php

return [


    /**
     * Default theme : default, dark
     */
    "default_theme" => "default",


    /**
     * enable dark mode amd dark mode switcher
     *
     */
    "darkmode_enabled" => false,

    /**
     * ReCaptcha settings, will be used in sign up and login forms
     */
    "recaptcha" => [
        "enabled" => env("RECAPTCHA_ENABLED", false),
        "site_key" => env("RECAPTCHA_SITE_KEY", ""),
        "secret_key" => env("RECAPTCHA_SECRET", ""),
    ],

    /**
     * The number of keys that can be generated per app
     */
    "keys_per_app" => env("KEYS_PER_APP", 2),


    /**
     * Locales ex: ['en', 'ar']
     */
    "locales" => [
        'en' => 'English',
        'ar' => 'العربية'
    ]
];
