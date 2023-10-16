<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // Add URL rules here

                'comment/view' => 'comment/view',
                'comment/update' => 'comment/update',
                'comment/search' => 'comment/search',
                'comment/index' => 'comment/index',
                'comment/create' => 'comment/create',

                // Rule for post/create
                'post/view' => 'post/view',
                'post/update' => 'post/update',
                'post/search' => 'post/search',
                'post/index' => 'post/index',
                'POST post/create' => 'post/create',

                // Rule for user/index
                'user/view' => 'user/view',
                'user/update' => 'user/update',
                'user/search' => 'user/search',
                'user/index' => 'user/index',
                'user/create' => 'user/create',

                'index/gii' => 'index/gii',


            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
