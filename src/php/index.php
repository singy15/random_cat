<?php
require_once "common.php";

/*
 * Fetch a post randomly
 */
function fetch_random_post() {
  $posts = DB::select('select * from post order by random() limit 1');
  return (count($posts) == 1)? $posts[0] : null;
}

/*
 * Fetch user by user_id
 */
function fetch_user_by_user_id($user_id) {
  return DB::table('user')
    ->where('user_id', '=', $user_id)
    ->first();
}

/*
 * Fetch like of user
 */
function fetch_like_user($user_id, $post_id) {
  return DB::table('like')
    ->where('user_id', '=', $user_id)
    ->where('post_id', '=', $post_id)
    ->first();
}

/*
 * Fetch like count of the post
 */
function fetch_like_count($post_id) {
  return DB::table('like')
  ->where('post_id', '=', $post_id)
  ->count();
}

/*
 * Fetch favorite of user
 */
function fetch_favorite($user_id, $post_id) {
  return DB::table('favorite')
    ->where('user_id', '=', $user_id)
    ->where('post_id', '=', $post_id)
    ->first();
}

// Get a post randomly
$post = fetch_random_post();

$author = null;
$like = null;
$like_count = null;
$favorite = null;

if($post) {
  // Get author of post
  $author = fetch_user_by_user_id($post->author);

  // Get like of user
  $like = null;
  if(isset($_SESSION['user_id'])) {
    $like = fetch_like_user($_SESSION['user_id'], $post->post_id);
  }

  // Get like count
  $like_count = fetch_like_count($post->post_id);

  // Get favorite
  $favorite = null;
  if(isset($_SESSION['user_id'])) {
    $favorite = fetch_favorite($_SESSION['user_id'], $post->post_id);
  }
}

// Variables for template
$variables = [
  "post" => $post,
  "author" => $author,
  "like" => $like,
  "like_count" => $like_count,
  "favorite" => $favorite
];

// Render template
echo $blade->run("index", $variables);
?>

