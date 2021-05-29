<?php
require_once "common.php";

$page_size = 9;

$get_form = array();
if(!empty($_GET)) {
	foreach( $_GET as $key => $value ) {
    $get_form[$key] = htmlspecialchars( $value, ENT_QUOTES);
	} 
}

// Set initial condition
if(empty($_GET)) {
  $get_form['page'] = 0;
  $get_form['category'] = 'favorite';
}

$get_form['page_count'] = 1;

// Get posts
if($get_form['category'] == 'posted') {
  /*
   * Fetch posted
   */

  $post_count = DB::table('post')
    ->where('author', '=', $_SESSION['user_id'])
    ->count();

  $get_form['page_count'] = ceil($post_count / $page_size);
  if($get_form['page_count'] == 0) {
    $get_form['page_count'] = 1;
  }

  $posts = DB::table('post')
    ->where('author', '=', $_SESSION['user_id'])
    ->skip($page_size * $get_form['page'])
    ->take($page_size)
    ->get();
} elseif($get_form['category'] == 'favorite') {
  /*
   * Fetch favorite
   */

  $sql = <<< SQL
      select 
        p.* 
      from favorite as f
      left join post as p
        on f.post_id = p.post_id
      where f.user_id = :user_id
      order by p.post_id 
      limit :limit 
      offset :offset
  SQL;

  $sql_count = <<< SQL
      select 
        count(p.post_id) as cnt
      from favorite as f
      left join post as p
        on f.post_id = p.post_id
      where f.user_id = :user_id
  SQL;

  $params = [
    'user_id' => $_SESSION['user_id'],
    'limit' => $page_size,
    'offset' => $page_size * $get_form['page']
  ];

  $params_count = [
    'user_id' => $_SESSION['user_id']
  ];

  $post_count = DB::select($sql_count, $params_count)[0]->cnt;

  $get_form['page_count'] = ceil($post_count / $page_size);
  if($get_form['page_count'] == 0) {
    $get_form['page_count'] = 1;
  }

  $posts = DB::select($sql, $params);
}

$variables = [
  "get_form" => $get_form,
  "posts" => $posts
];
 
echo $blade->run("my_nyanko", $variables);
?>

