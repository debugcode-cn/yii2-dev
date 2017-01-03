<?php

// 主要用于执行一些Yii应用引导的代码，比如定义一系列的路径别名:

Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

Yii::setAlias('@api', dirname(dirname(__DIR__)) . '/api');