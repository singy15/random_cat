<?php
require_once "common.php";

if(!empty($_POST['post_id'])) {
  $post = DB::table('post')
    ->where('post_id', '=', $_POST['post_id'])
    ->first();
  
  DB::table('post')
    ->where('post_id', '=', $post->post_id)
    ->delete();

  DB::table('like')
    ->where('post_id', '=', $post->post_id)
    ->delete();

  DB::table('favorite')
    ->where('post_id', '=', $post->post_id)
    ->delete();

  unlink('static/photo/' . $post->photo_path);
}

$variables = [];

header('Location: http://' . $_SERVER['HTTP_HOST'] . '/my_nyanko.php');
exit();

?>

