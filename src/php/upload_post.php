<?php
require_once "common.php";

// File size check
if ($_FILES['photo']['error'] === 2) {
  header('Location: http://' . $_SERVER['HTTP_HOST'] /*. dirname($_SERVER['PHP_SELF'])*/ . '/upload_failed.php');
  exit();
}

$md5 = md5_file($_FILES['photo']['tmp_name']);

$photo_filename = 
  $md5 . '.' . pathinfo($_FILES['photo']['name'])['extension'];

$result_save = move_uploaded_file( 
  $_FILES['photo']['tmp_name'], 
  './static/photo/' . $photo_filename);

$new_post = [
  'subject' => $_POST['subject'],
  'description' => $_POST['description'],
  'photo_path' => $photo_filename,
  'author' => 1, $_SESSION['user_id'],
  'user_id' => 1 $_SESSION['user_id']
];

DB::table('post')->insert($new_post);

$variables = [];

header('Location: http://' . $_SERVER['HTTP_HOST'] /*. dirname($_SERVER['PHP_SELF'])*/ . '/uploaded.php');
exit();

?>

