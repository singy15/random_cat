<?php
require_once "common.php";

$rows = DB::select('select * from post order by random() limit 1');
$post = $rows[0];

$author = DB::table('user')
  ->where('user_id', '=', $post->author)
  ->get()[0];

$like = DB::table('like')
  ->where('user_id', '=', $_SESSION['user_id'])
  ->where('post_id', '=', $post->post_id)
  ->first();

$like_count = DB::table('like')
  ->where('post_id', '=', $post->post_id)
  ->count();

$variables = [
  "post" => $post,
  "author" => $author,
  "like" => $like,
  "like_count" => $like_count
];

echo $blade->run("index", $variables);
?>

