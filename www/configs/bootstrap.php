<?php
use Illuminate\Database\Capsule\Manager as Capsule;

require   __DIR__ . '/../vendor/autoload.php';

$capsule = new Capsule;

$capsule->addConnection([
    'driver'=>'mysql',
    'host'=>'127.0.0.1',
    'database'  => 'nazin-perfium',
    'username'  => 'ahp',
    'password' => 'amir3553',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

