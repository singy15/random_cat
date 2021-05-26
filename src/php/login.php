<?php
require_once "common.php";

$error = array();

if(!empty($_POST) && array_key_exists('posted', $_POST)) {
  //// Validation

  // Check user_id not empty
  if(empty($_POST['user_id'])) {
    $error[] = "ユーザIDを入力してください";
  }

  // Check password not empty
  if(empty($_POST['password'])) {
    $error[] = "パスワードを入力してください";
  }

  //// Authentication

  $authenticated = false;
  if(count($error) == 0) {
    $user = DB::table('user')
      ->where('login_id', '=', $_POST['user_id'])
      ->where('password', '=', $_POST['password']) //TODO hash
      ->first();

    if($user) {
      $authenticated = true;
    } else {
      $error[] = "ログイン失敗しました、ユーザIDとパスワードを確認してください";
    }
  }

  if((count($error) == 0) && ($authenticated)) {
    // Set session
    $_SESSION['user_id'] = $user->user_id;
    $_SESSION['user_name'] = $user->login_id;
  
    // Redirect to index
    header('Location: http://' . $_SERVER['HTTP_HOST'] /*. dirname($_SERVER['SCRIPT_NAME'])*/ . '/index.php', true, 301);
    exit();
  }
}


$variables = [
  "error" => $error
];
 
echo $blade->run("login", $variables);
?>

