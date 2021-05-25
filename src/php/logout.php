<?php
require_once "common.php";

@session_destroy();
session_start();

$error = array();

$variables = [
  "variable1"=>"Hello",
  "variable2"=>"World",
  "error" => $error
];
 
echo $blade->run("login", $variables);
?>

