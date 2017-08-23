<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();


$capsule-> addConnection(
  [
    'driver'=>'mysql',
    'host'=>'127.0.0.1',
    'username'=>'root',
    'password'=>'123',
    'database'=>'sample1',
    'charset'=>'utf8',
    'collation'=>'utf8_unicode_ci',
    'prefix'=>''
  ]
);
//echo 'Connection';
$capsule->bootEloquent();

 ?>
