<?php
include_once('utility/session.php');


?>

<?php
include_once('includes/header.php'); ?>

<body>

<div class="content-wrapper">  
sdasdsadsa
	<?php
		var_dump( get_current_auth_session());
	 ?>
	<a href="/logout">Logout</a>
</div>

<?php include_once('includes/footer.php'); ?>

</body>


</html>