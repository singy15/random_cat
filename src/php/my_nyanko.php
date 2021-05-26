<?php
require_once "common.php";

$page_size = 2;

$get_form = array();
if(!empty($_GET)) {
	foreach( $_GET as $key => $value ) {
    $get_form[$key] = htmlspecialchars( $value, ENT_QUOTES);
	} 
}

// Set initial condition
if(empty($_GET)) {
  $get_form['page'] = 0;
  $get_form['category'] = 'posted';
}

$get_form['page_count'] = 1;

// Get posts
if($get_form['category'] == 'posted') {
  $post_count = DB::table('post')
    ->where('author', '=', $_SESSION['user_id'])
    ->count();

  $get_form['page_count'] = ceil($post_count / $page_size);

  $posts = DB::table('post')
    ->where('author', '=', $_SESSION['user_id'])
    ->skip($page_size * $get_form['page'])
    ->take($page_size)
    ->get();
} elseif($get_form['category'] == 'favorite') {
  $posts = array();
}

$variables = [
  "get_form" => $get_form,
  "posts" => $posts
];
 
echo $blade->run("my_nyanko", $variables);
?>

