<?php

return [
    'components' => [
        'glide' => [
            'class' => 'denis909\glide\components\Glide',
            'sourcePath' => '@frontend/web/storage',
            'cachePath' => '@frontend/web/cache',
            //'maxImageSize' => env('GLIDE_MAX_IMAGE_SIZE'),
            //'signKey' => env('GLIDE_SIGN_KEY'),
            'defaults' => [
                'q' => 90
            ]
        ]
    ]
];