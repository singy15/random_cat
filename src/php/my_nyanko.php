<?php
require "vendor/autoload.php";
Use eftec\bladeone\BladeOne;
$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_AUTO);

$variables = ["variable1"=>"Hello",
    "variable2"=>"World",
];
 
echo $blade->run("my_nyanko", $variables);
?>

