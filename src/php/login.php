<?php
require_once "common.php";

$error = array();

if(!empty($_POST) && array_key_exists('posted', $_POST)) {
  if(empty($_POST['user_id'])) {
    $error[] = "ユーザIDを入力してください";
  }

  if(empty($_POST['password'])) {
    $error[] = "パスワードを入力してください";
  }

  $authenticated = true;

  // TODO 認証処理

  if((count($error) == 0) && ($authenticated)) {
    $_SESSION['user_id'] = 1;
    $_SESSION['user_name'] = 'kedama';

    // header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . './login_post.php', true, 307);
    header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php');
    exit();
  }
}


$variables = [
  "variable1"=>"Hello",
  "variable2"=>"World",
  "error" => $error
];
 
echo $blade->run("login", $variables);
?>

