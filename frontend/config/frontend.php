<?php

return [
    'modules' => [
        'glide' => [
            'class' => 'yii\base\Module',
            'controllerNamespace' => 'denis909\glide\frontend\controllers',
            'viewPath' => '@denis909/glide/frontend/views',
            'defaultRoute' => 'glide'
        ]
    ],
    'components' => [
        'urlManager' => [
            'rules' => [
                'glide/<action>' => 'glide/glide/<action>'
            ]
        ]
    ]
];