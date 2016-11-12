<?php 

include_once('config.php');
include_once('bl/user.bl.php');
include_once('utility/utility.php');
include_once('utility/session.php');
$error_messages = [
  'user_name'=>'User Name cannot be left blank',
  'password'=>'Password cannot be left blank'

];


if(isset($_POST['btn_submit'])){
	$message = [];
	foreach($error_messages as $error_key=>$error_value){

		if(isset($_POST[$error_key]) && $_POST[$error_key] == ''){
		  $message[$error_key] =  $error_messages[$error_key]; 
		}

	}
	
	if(empty($message)){
	
	
		$user = do_sign_in($_POST['user_name'],$_POST['password']);
		
		if($user['status'] == 400){
			$message[$user['section']] = $user['message'];
		}else{
		
		
			create_session('user',$user);
		
			header('Location: dashboard');
		
		}
		
		
		
		
	
	}
}









?>
<?php
include_once('includes/header.php'); ?>

<body>

<div class="container">  
  <form id="contact" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <h3>Colorlib Contact Form</h3>
    <h4>Contact us for custom quote</h4>
   
    <fieldset>
      <input placeholder="User Name" type="text" name="user_name" tabindex="1" >
	  <?php echo (isset($message['user_name']))?$message['user_name']:"" ?>
    </fieldset>
    <fieldset>
      <input placeholder="Password" type="password" name="password" tabindex="2" >
	   <?php echo (isset($message['password']))?$message['password']:"" ?>
    </fieldset>
   
    
    <fieldset>
      <button  type="submit" name="btn_submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

<?php include_once('includes/footer.php'); ?>

</body>


</html>