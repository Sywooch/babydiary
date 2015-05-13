<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language'=>'ru-RU',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '3NJmF1OaoyabQlZTkGxYjZ2HvFyDGVKK',
            'class' => 'app\components\LangRequest',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => array(
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'class'=>'app\components\LangUrlManager',
            'rules' => array(
                'admin' => 'admin/index',

                'admin/dictionaries/age' => 'dct-age/index',
                'admin/dictionaries/age/<action:\w+>' => 'dct-age/<action>',
                'admin/dictionaries/doctors' => 'dct-doctor/index',
                'admin/dictionaries/doctors/<action:\w+>' => 'dct-doctor/<action>',
                'admin/dictionaries/progress' => 'dct-progress/index',
                'admin/dictionaries/progress/<action:\w+>' => 'dct-progress/<action>',

                'admin/<action:\w+>' => 'admin/<action>',
                'admin/<controller:\w+>/<action:\w+>' => '<controller>/<action>',

                'admin/dictionaries/<controller:\w+>' => '<controller>/index',
                'admin/dictionaries/<controller:\w+>/' => '<controller>/index',
                'admin/dictionaries/<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),

        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages', // if advanced application, set @frontend/messages
                    'sourceLanguage' => 'ru',
                    'fileMap' => [
                        //'main' => 'main.php',
                    ],
                ],
            ],
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
