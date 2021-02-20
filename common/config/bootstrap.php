<?php

use denis909\yii\CascadeConfig;

Yii::setAlias('@denis909/glide', dirname(dirname(__DIR__)));

CascadeConfig::addPath(dirname(dirname(__DIR__)));