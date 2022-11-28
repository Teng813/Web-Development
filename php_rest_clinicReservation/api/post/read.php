<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Blog post query
  $result = $post->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any posts
  if($num > 0) {
    // Post array
    $posts_arr = array();
    $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $post_item = array(
        'user_id' => $user_id,
        'user_password' => $user_password,
        'user_name' => $user_name,
        'user_gender' => $user_gender,
        'user_email' => $user_email,
        'user_dob' => $user_dob,
        'user_phoneNo' => $user_phoneNo,
        'user_address' => $user_address,
        'address_city' => $address_city,
        'address_zip' => $address_zip,
        'address_state' => $address_state
      );

      // Push to "data"
      //array_push($posts_arr, $post_item);
      array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($posts_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Posts Found')
    );
  }
