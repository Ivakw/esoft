<?php 
define ('AUTH_VAR','user');



function session_init(){
	session_start();
}



/**
 * Create Session
 */
function create_session($key,$value){
	
	if(!isset($_SESSION[$key])){
		$_SESSION[$key] = $value;
	
	}
	
}

/**
 * Get Session
 */
function get_session($key){

	if(isset($_SESSION[$key])){
		return $_SESSION[$key];
	
	}
	return null;
	
}

/**
 * Delete Existing Session 
 */
function delete_session($key){

	if(isset($_SESSION[$key])){
		unset($_SESSION[$key]);
		return true;
	}
	return null;
	
} 

/**
 * Get current Active session when user logged in to the system
 * This function can be invoked whenever current session informatio needed
 */
function get_current_auth_session(){
	return get_session( AUTH_VAR);
}

/**
 * remove current auth session from the system
 * This function can be invoked from logged out function
 */
function remove_current_auth_session(){

	return delete_session(AUTH_VAR);
}

/**
 * Create Auth session to store logged user information on the session
 * This function can beinvoked when user sigin in page
 */
function create_auth_session($user){
	return create_session(AUTH_VAR,$user);
}

























session_init();


















