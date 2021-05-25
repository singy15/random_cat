<?php
require_once "common.php";

$variables = ["variable1"=>"Hello",
    "variable2"=>"World",
];
 
echo $blade->run("my_nyanko", $variables);
?>

