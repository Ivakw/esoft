<?php
require_once './config.php';

require_once './models/user.model.php';


$user =  new Models\UserModel();

$users =  $user->getUsers();
echo "<pre>";
print_r($users);