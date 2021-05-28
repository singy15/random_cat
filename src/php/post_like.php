<?php
require_once "common.php";

$body = json_decode(file_get_contents("php://input"), true);

$like = DB::table('like')
  ->where('user_id', '=', $_SESSION['user_id'])
  ->where('post_id', '=', $body['post_id'])
  ->first();

if($like) {
  DB::table('like')
    ->where('user_id', '=', $_SESSION['user_id'])
    ->where('post_id', '=', $body['post_id'])
    ->delete();

  $liked = false;
} else {
  $new_like = [
    'user_id' => $_SESSION['user_id'],
    'post_id' => $body['post_id']
  ];

  DB::table('like')->insert($new_like);

  $liked = true;
}

$like_count = DB::table('like')
  ->where('post_id', '=', $body['post_id'])
  ->count();

$data = array();
$data['post_id'] = $body['post_id'];
$data['liked'] = $liked;
$data['like_count'] = $like_count;

print json_encode($data, JSON_PRETTY_PRINT);
?>

