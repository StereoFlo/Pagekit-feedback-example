<?php
return [
    'install' => function ($app) {
        $util = $app['db']->getUtility();
        if ($util->tableExists('@contact_emails') === false) {
            $util->createTable('@contact_emails', function ($table) {
                $table->addColumn('id', 'integer', ['unsigned' => true, 'length' => 10, 'autoincrement' => true]);
                $table->addColumn('name', 'string');
				$table->addColumn('email', 'string');
				$table->addColumn('message', 'string');
				$table->addColumn('date', 'string');
                $table->setPrimaryKey(['id']);
            });
        }
    },

    'enable' => function ($app) {
    },

    'uninstall' => function ($app) {
        $app['config']->remove('contact');
        $util = $app['db']->getUtility();
        if ($util->tableExists('@contact_emails')) {
            $util->dropTable('@contact_emails');
        }
    },

    'updates' => [
        '0.0.5' => function ($app) {
        },
    ],
];
