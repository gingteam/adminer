<?php

require_once __DIR__.'/../vendor/autoload.php';

function adminer_object()
{
    return new AdminerPlugin([
        new AdminerDatabaseHide([
            'mysql',
            'information_schema',
            'performance_schema',
            'sys',
        ]),
        new AdminerEditForeign(),
        new AdminerEnumOption(),
        new AdminerStructComments(),
        new AdminerTableStructure(),
        new AdminerTableIndexesStructure(),
        new AdminerDumpJson(),
        new AdminerDumpZip(),
        new AdminerLoginIp(['127.0.0.1', '::1']),
        new AdminerTheme("default-green"),
    ]);
}

require_once __DIR__.'/../adminer.php';
