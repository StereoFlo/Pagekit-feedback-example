<?php

use Pagekit\Application;

return [
    'name' => 'contact',

    'type' => 'extension',

    'main' => function (Application $app) {
    },

    'autoload' => [
            'Pagekit\\Contact\\' => 'src'
    ],

    'resources' => [
            'contact:' => ''
    ],

    'routes' => [
        '/contact' => [
            'name' => '@contact/admin',
            'controller' => 'Pagekit\\Contact\\Controller\\ContactController'
        ],
        'contact' => [
            'name' => '@contact',
            'label' => 'Contact',
            'controller' => 'Pagekit\\Contact\\Controller\\SiteController',
            'protected' => true
        ]
    ],

    'menu' => [
        'contact' => [
            'label' => 'Contact',
            'url' => '@contact/admin',
            'icon' => 'contact:icon.png'
        ],
        'contact: panel' => [
            'parent' => 'contact',
            'label' => 'List emails',
            'icon' => 'contact:icon.png',
            'url' => '@contact/admin'
        ],
        'contact: settings' => [
            'parent' => 'contact',
            'label' => 'Settings',
            'url' => '@contact/admin/settings'
        ]
    ],
];
