<?php

/**
 * Arquivo para configurar as conexões nas principais bases de dados
 */

 //mysql:host=localhost;port=3306;dbname=nome_da_base
$mysql = [
    'type'      => 'mysql',
    'host'      => 'localhost',
    'database'  => 'nome_do_banco',
    'port'      => 3306,
    'username'  => 'user',
    'passwoard' => '' 
];

//pgsql:host=localhost;port=5432;dbname=nome_da_base
$postgre = [
    'type' => 'pgsql',
    'host' => 'localhost',
    'port' => 5432,
    'database' => 'nome_da_base',
    'username'  => 'user',
    'passwoard' => '' 
];

$oracle = [

];

//sqlsrv:Server=localhost;Database=testdb"
$sqlServer = [
    'type' => 'sqlsrv',
    'host' => 'localhost',
    'database' => 'nome_da_base',
];

