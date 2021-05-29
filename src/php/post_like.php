<?php
require_once "common.php";

function fetch_like($user_id, $post_id) {
  return DB::table('like')
    ->where('user_id', '=', $user_id)
    ->where('post_id', '=', $post_id)
    ->first();
}

function delete_like($user_id, $post_id) {
  DB::table('like')
    ->where('user_id', '=', $user_id)
    ->where('post_id', '=', $post_id)
    ->delete();
}

function insert_like($user_id, $post_id) {
  DB::table('like')->insert([
    'user_id' => $user_id,
    'post_id' => $post_id
  ]);
}

function fetch_like_count($post_id) {
  return DB::table('like')
    ->where('post_id', '=', $post_id)
    ->count();
}

$body = json_decode(file_get_contents("php://input"), true);

$like = fetch_like($_SESSION['user_id'], $body['post_id']);

if($like) {
  delete_like($_SESSION['user_id'], $body['post_id']);
  $liked = false;
} else {
  insert_like($_SESSION['user_id'], $body['post_id']);
  $liked = true;
}

$like_count = fetch_like_count($body['post_id']);

$data = array();
$data['post_id'] = $body['post_id'];
$data['liked'] = $liked;
$data['like_count'] = $like_count;

print json_encode($data, JSON_PRETTY_PRINT);
?>

