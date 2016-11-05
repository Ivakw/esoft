<?php 

include_once('config.php');
include_once('core/db_connect.php');









?>
<?php
include_once('includes/header.php'); ?>

<?php echo IMAGE_UPLOAD_PHYSICAL_PATH  ?>
<body>

<div class="container">  
  <form id="contact" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <h3>Colorlib Contact Form</h3>
    <h4>Contact us for custom quote</h4>
    <fieldset>
      <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" name="tel" tabindex="3" required>
    </fieldset>
   
    
    <fieldset>
      <button  type="submit" name="btn_submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

<?php include_once('includes/footer.php'); ?>

</body>


</html>