<?php
require_once "common.php";

$post_form = array();

if( !empty($_POST) ) {
	foreach( $_POST as $key => $value ) {
		$post_form[$key] = htmlspecialchars( $value, ENT_QUOTES);
	} 
}

$error = array();

if(!empty($_POST) && array_key_exists('posted', $_POST)) {

  if(empty($_FILES['photo']['name'])) {
    $error[] = "画像を選択してください";
  }

  if(empty($_POST['subject'])) {
    $error[] = "タイトルを入力してください";
  }

  if(mb_strlen($_POST['subject']) > 20) {
    $error[] = "タイトルは20文字以内で入力してください";
  }

  if(mb_strlen($_POST['description']) > 100) {
    $error[] = "コメントは100文字以内で入力してください";
  }

  if(empty($_POST['agreed'])) {
    $error[] = "利用規約に同意するにチェックを入れてください";
  }

  if(count($error) == 0) {
    header('Location: http://' . $_SERVER['HTTP_HOST'] /*. dirname($_SERVER['PHP_SELF'])*/ . '/upload_post.php', true, 307);
    exit();
  }
}


$variables = [
  "post_form" => $post_form,
  "error" => $error
];

echo $blade->run("upload", $variables);
 
?>

