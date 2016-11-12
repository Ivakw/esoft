<?php
include_once('utility/session.php');

?>


Loging out .......
<?php

remove_current_auth_session();
header('Location: /');	

