<?php
require_once "common.php";

$rows = DB::select('select * from post order by random() limit 1');
$post = $rows[0];

$author = DB::table('user')
  ->where('user_id', '=', $post->author)
  ->get()[0];

$variables = [
  "post" => $post,
  "author" => $author
];

echo $blade->run("index", $variables);
?>

