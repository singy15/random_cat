<?php
require_once "common.php";

$post = DB::table('post')
  ->where('post_id', '=', $_GET['post_id'])
  ->first();

$author = DB::table('user')
  ->where('user_id', '=', $post->author)
  ->first();

$variables = [
  "post" => $post,
  "author" => $author
];

echo $blade->run("post_detail", $variables);
?>

