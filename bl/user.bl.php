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
    $profile_image = $data['image_name'];
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


/**
 * Sign in 
 * Do user login to the system
 */
function do_sign_in($user_name,$password){

	$query = "SELECT User.* FROM users as User  
			WHERE User.user_name = '{$user_name}'";
	

	$result =  db_query_method2($query);
	//CHECK IF THE USER EXIST
	if($result == NULL){
	
		return [
			'status'	=> 400,
			'section'	=> 'user_name',
			'message'	=> 'User does not exist in the system'
		];
	}
	
	//CHECK PASSOWRD VALIDATION
	$user = $result->fetch_assoc(); // DATABASE USDR

	if($user['password'] != $password){
	
		return [
			'status'	=> 400,
			'section'	=> 'password',
			'message'	=> 'Password does not match '
		];
	}
	
	return [
		'status' 	=>	200,
		'user'		=> 	$user
		
	];


}






















