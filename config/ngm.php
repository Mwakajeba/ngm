<?php

return [

    /*
    |--------------------------------------------------------------------------
    | WhatsApp (floating button)
    |--------------------------------------------------------------------------
    | Digits only: country code + national number, no + or spaces.
    | Example: 255712345678 for +255 712 345 678
    */
    'whatsapp_number' => preg_replace('/\D/', '', (string) env('NGM_WHATSAPP_NUMBER', '255222110000')),

    'whatsapp_message' => env('NGM_WHATSAPP_MESSAGE'),

    'social_instagram_url' => env('NGM_SOCIAL_INSTAGRAM_URL', '#'),
    'social_x_url' => env('NGM_SOCIAL_X_URL', '#'),
    'social_facebook_url' => env('NGM_SOCIAL_FACEBOOK_URL', '#'),

];
