<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '-G0gSYDFXB6hUGHzppRknAofQdfhx5Mj',
        ],
//        'response' => [
//            'format' => yii\web\Response::FORMAT_JSON,
//            'charset' => 'UTF-8',
//        // ...
//        ],
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
        'db' => $db,
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'api/login/<nama:\w+>/<pass:\w+>' => 'api/login',
                'api/changePass/<email:[^/]+>/<<nik:\w+>/newpass:\w+>' => 'api/change-password',
                'api/profilTeknisi/<nik:\w+>' => 'api/profil-teknisi',
                'api/CountingOpenTask/<nik:\w+>/<nama:\w+>' => 'api/counting-open-task',
                'api/CountingFinishTask/<nik:\w+>/<nama:\w+>' => 'api/counting-finish-task',
                'api/ListOpenTask/<nik:\w+>/<name:\w+>' => 'api/list-open-task',
                'api/ListFinishTask/<nik:\w+>/<name:\w+>' => 'api/list-finish-task',
                'api/DetailTask/<id:\d+>' => 'api/detail-task',
                'api/QueryTotalUang/<id:\w+>' => 'api/query-total-uang',
                'api/QueryTotalApprove/<nik:\w+>' => 'api/query-total-approve',
                'api/QueryTotalPengguna/<nik:\w+>' => 'api/query-total-pengguna',
                'api/QuerySisaUang/<nik:\w+>' => 'api/query-sisa-uang',
                'api/QueryTaskSPD/<nik:\w+>' => 'api/query-task-spd',
                'api/QueryTaskVID/<noTask:\d+>' => 'api/query-task-vid',
                'api/ListSPDAndGambar/<vid:\d+>' => 'api/list-spd-and-gambar',
                'api/GetSPDVID/<noTask:\d+>/<vid:\d+>' => 'api/get-spd-vid',
                'api/ListJenisBiaya' => 'api/list-jenis-biaya',
                'api/ListFoto/<vid:\d+>' => 'api/list-foto',
                'api/barangRusakAndFoto/<vid:\d+>' => 'api/list-barang-rusak',
                'api/BarangFoto/<vid:\d+>' => 'api/list-barang-terpasang'
            ],
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
