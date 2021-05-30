<?php
require_once "common.php";

$post_form = array();
$error = array();

if(!empty($_POST)) {

  if( !empty($_POST) ) {
    foreach( $_POST as $key => $value ) {
      $post_form[$key] = htmlspecialchars( $value, ENT_QUOTES);
    } 
  }

  //// Validation
  $input_validated = true;

  // Check user_id not empty
  if(empty($_POST['login_id'])) {
    $error[] = "ユーザIDを入力してください";
    $input_validated = false;
  }

  // Check password not empty
  if(empty($_POST['password'])) {
    $error[] = "パスワードを入力してください";
    $input_validated = false;
  }

  if(!preg_match('/\A(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)[a-zA-Z\d]{8,100}+\z/', 
      $_POST['password'])) {
      $error[] = "パスワードは半角英数大文字小文字をそれぞれ1つ含む8文字以上にしてください";
    $input_validated = false;
  }

  // Check password_confirm not empty
  if(empty($_POST['password_confirm'])) {
    $error[] = "パスワード（確認）を入力してください";
    $input_validated = false;
  }

  // Check password and password_confirm match
  if(!empty($_POST['password']) && !empty($_POST['password_confirm'])
      && $_POST['password'] != $_POST['password_confirm']) {
    $error[] = "入力されたパスワードが異なります、再度入力してください";
    $input_validated = false;
  }

  // Check login_id duplication
  if($input_validated) {
    // Fetch user by login_id
    $user_exists = DB::table('user')
      ->where('login_id', '=', $_POST['login_id'])
      ->first();

    if($user_exists) {
      $error[] = "ユーザIDは既に使われています、他のIDを指定してください";
    }
  }

  //// Signup
  if(count($error) == 0) {
    // Register user
    $new_user = [
      'login_id' => $_POST['login_id'],
      'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
    ];
    DB::table('user')->insert($new_user);

    // Redirect to signup success
    header('Location: http://' . $_SERVER['HTTP_HOST'] 
      . '/signup_success.php');
    exit();
  }
}


$variables = [
  "error" => $error,
  "post_form" => $post_form
];
 
echo $blade->run("signup", $variables);
?>

