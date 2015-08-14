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
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'enableSession' => true,
            'loginUrl' => '/user/auth'
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
        ],
        'mail' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.yandex.ru',
                'username' => 'kovalchuk.aleksey.s',
                'password' => 'h_2!|?=0',
                'port' => '465'
            ],
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
            'enableStrictParsing' => true,
            //'class'=>'app\components\LangUrlManager',
            'rules' => [
                //API
                'api/get-validation-messages' => 'site/get-validation-messages',

                //ADMIN
                'admin/home' => 'backend/admin/index',

                'admin/dictionaries/age' => 'backend/dct-age/index',
                'admin/dictionaries/age/<action:\w+>' => 'backend/dct-age/<action>',
                'admin/dictionaries/doctors' => 'backend/dct-doctor/index',
                'admin/dictionaries/doctors/<action:\w+>' => 'backend/dct-doctor/<action>',
                'admin/dictionaries/progress' => 'backend/dct-progress/index',
                'admin/dictionaries/progress/<action:\w+>' => 'backend/dct-progress/<action>',
                'admin/dictionaries/solidFood' => 'backend/dct-solid-food/index',
                'admin/dictionaries/solidFood/<action:\w+>' => 'backend/dct-solid-food/<action>',
                'admin/dictionaries/teeth' => 'backend/dct-tooth/index',
                'admin/dictionaries/teeth/<action:\w+>' => 'backend/dct-tooth/<action>',
                'admin/dictionaries/vaccination' => 'backend/dct-vaccination/index',
                'admin/dictionaries/vaccination/<action:\w+>' => 'backend/dct-vaccination/<action>',

                'admin/child' => 'backend/child/index',
                'admin/child/<action:\w+>' => 'backend/child/<action>',

                'admin/<action:\w+>' => 'backend/admin/<action>',
                'admin/<controller:\w+>/<action:\w+>' => 'backend/<controller>/<action>',

                'admin/dictionaries/<controller:\w+>' => 'backend/<controller>/index',
                'admin/dictionaries/<controller:\w+>/' => 'backend/<controller>/index',
                'admin/dictionaries/<controller:\w+>/<action:\w+>' => 'backend/<controller>/<action>',
                'sign-up' => 'user/sign-up',
                'sign-in' => 'user/sign-in',
                'user/check-unique' => 'user/check-unique',
                '<controller:\w+>/' => '<controller>/index',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',

                '/' => 'site',


                // REST for UI
                //['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
            ],
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
