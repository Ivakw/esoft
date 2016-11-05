<?php

include_once('core/db_connect.php');


/**
 * Create User 
 */
function create_user($data){
	$first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $password = $data['password'];
    $user_name = $data['user_name'];
    $profile_image = 'test.jpeg';
    $current_date = date('Y-m-d H:i:s');

    $insert_query = "
        INSERT INTO users 
          (`first_name`,`last_name`,`password`,`user_name`,`profile_image`,`created_at`)
        VALUES
          ('{$first_name}','{$last_name}','{$password}','{$user_name}','{$profile_image}','{$current_date}')  
          ";
   	$result  = insert($insert_query);


    return $result;
	
  
}