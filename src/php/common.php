<?php
require_once "vendor/autoload.php";

/*
 * Configuration for BladeOne
 */

Use eftec\bladeone\BladeOne;
$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_AUTO);


/*
 * Configuration for Illuminate/Database
 */

class_alias(Illuminate\Database\Capsule\Manager::class, 'DB');

// Database
$database = new DB();

// Connection
$config = [
  'driver'    => 'sqlite',
  'database'  => 'random_cat.db',
];

$database->addConnection($config);
$database->setAsGlobal();
$database->bootEloquent();

session_start();

?>

