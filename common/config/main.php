<?php

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'SetValues' => [
            'class' => 'common\components\SetValues'
        ],
        'RemoveDirectory' => [
            'class' => 'common\components\RemoveDirectory'
        ],
        'UploadFile' => [
            'class' => 'common\components\UploadFile'
        ],
        'NumToWord' => [
            'class' => 'common\components\NumToWord'
        ],
        'EncryptDecrypt' => [
            'class' => 'common\components\EncryptDecrypt'
        ],
        'Modalview' => [
            'class' => 'common\components\ModalViewWidget'
        ],
    ],
];
