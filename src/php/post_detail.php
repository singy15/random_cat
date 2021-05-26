<?php
require_once "common.php";

// $_GET['post_id']

// $rows = DB::select('select * from post order by random() limit 1');
// $post = $rows[0];
// 
// $author = DB::table('user')
//   ->where('user_id', '=', $post->author)
//   ->get()[0];

$variables = [
];

echo $blade->run("post_detail", $variables);
?>

