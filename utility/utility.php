<?php


/**
 * Create new file name
 */
function create_file_name($file){
	$path_info = pathinfo($file['name']);	

	// rename the file as system needs
	$new_file_name = time().'.'.$path_info['extension'];
	return $new_file_name;
}
/**
 * Upload Content to the system
 * @param $file file object
 */
function content_upload($file,$upload_path,$new_file_name){

	if(empty($file)){
		return ['status'=> 'error','message'=>'File Object is empty.'];
	}

	if($file['error'] !== 0){
		return ['status'=> 'error','message'=>'Error while uploading'];
	}
	//TO DO :: Do the rest of validation from here

	//Get file details
	//[dirname] => .
    //[basename] => test.jpg
    //[extension] => jpg
    //[filename] => test
	
	$_upload_base_path = IMAGE_UPLOAD_PHYSICAL_PATH.$upload_path;

	if(!is_dir($_upload_base_path)){
		mkdir($_upload_base_path);
	}
	$is_uploaded = move_uploaded_file($file['tmp_name'], $_upload_base_path.'/'.$new_file_name);

	return [
		'status'=>'success',
		'file_name'=>$new_file_name
	];
	

}
