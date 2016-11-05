<?php 

include_once('config.php');
include_once('core/db_connect.php');


$error_messages = [
  'first_name'=>'First Name cannot be left blank',
  'last_name'=>'Last Name cannot be left blank',
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
    

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $user_name = $_POST['user_name'];
    $profile_image = 'test.jpeg';
    $current_date = date('Y-m-d H:i:s');

    $insert_query = "
        INSERT INTO users 
          (`first_name`,`last_name`,`password`,`user_name`,`profile_image`,`created_at`)
        VALUES
          ('{$first_name}','{$last_name}','{$password}','{$user_name}','{$profile_image}','{$current_date}')  
          ";
   $result  = db_query_method2($insert_query);

   if($result){
      $message['new_user_added'] = "New user created";
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
    <?php echo (isset($message['new_user_added']))?$message['new_user_added']:"" ?> 
    <fieldset>
      <input placeholder="First Name" type="text" name="first_name" tabindex="1"  autofocus>
      <?php echo (isset($message['first_name']))?$message['first_name']:"" ?>
    </fieldset>
    <fieldset>
      <input placeholder="Last Name" type="text" name="last_name" tabindex="2" >
      <?php echo (isset($message['last_name']))?$message['last_name']:"" ?>
    </fieldset>
    <fieldset>
      <input placeholder="User Name" type="text" name="user_name" tabindex="3" >
      <?php echo (isset($message['user_name']))?$message['user_name']:"" ?>
    </fieldset>
    <fieldset>
      <input placeholder="Password" type="password" name="password" tabindex="4" >
      <?php echo (isset($message['password']))?$message['password']:"" ?>
    </fieldset>
    <fieldset>
      <input placeholder="Profile" type="file" name="profile_image" tabindex="5" >
    </fieldset>
    
    <fieldset>
      <button  type="submit" name="btn_submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

<?php include_once('includes/footer.php'); ?>

</body>


</html>