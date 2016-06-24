<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
		'authManager' => [
            'class' => 'yii\rbac\PhpManager',
			'defaultRoles' => ['user', 'manager', 'admin'],
			'itemFile' => '@common/components/rbac/items.php',
			'assignmentFile' => '@common/components/rbac/assignments.php',
			'ruleFile' => '@common/components/rbac/rules.php',
        ],
    ],
];
