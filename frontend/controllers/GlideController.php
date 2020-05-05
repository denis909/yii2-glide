<?php

namespace denis909\glide\frontend\controllers;

use trntv\glide\actions\GlideAction;

class GlideController extends \yii\web\Controller
{

    public function actions()
    {
        return [
            'index' => GlideAction::class
        ];
    }

}