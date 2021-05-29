<?php
require_once "common.php";

function fetch_favorite($user_id, $post_id) {
  return DB::table('favorite')
    ->where('user_id', '=', $user_id)
    ->where('post_id', '=', $post_id)
    ->first();
}

function delete_favorite($user_id, $post_id) {
  DB::table('favorite')
    ->where('user_id', '=', $user_id)
    ->where('post_id', '=', $post_id)
    ->delete();
}

function insert_favorite($user_id, $post_id) {
  DB::table('favorite')->insert([
    'user_id' => $user_id,
    'post_id' => $post_id
  ]);
}

function fetch_favorite_count($post_id) {
  return DB::table('favorite')
    ->where('post_id', '=', $post_id)
    ->count();
}

$body = json_decode(file_get_contents("php://input"), true);

$favorite = fetch_favorite($_SESSION['user_id'], $body['post_id']);

if($favorite) {
  delete_favorite($_SESSION['user_id'], $body['post_id']);
  $is_favorite = false;
} else {
  insert_favorite($_SESSION['user_id'], $body['post_id']);
  $is_favorite = true;
}

$data = array();
$data['post_id'] = $body['post_id'];
$data['is_favorite'] = $is_favorite;

print json_encode($data, JSON_PRETTY_PRINT);
?>

