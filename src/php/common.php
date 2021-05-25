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
  'host'      => 'localhost',
  'database'  => 'random_cat.db',
  // 'username'  => 'user',
  // 'password'  => 'password',
  // 'charset'   => 'utf8mb4',
  // 'collation' => 'utf8mb4_general_ci',
];

$database->addConnection($config);
$database->setAsGlobal();
$database->bootEloquent();

?>

