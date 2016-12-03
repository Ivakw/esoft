<?php
require_once './config.php';

require_once './models/user.model.php';


$user =  new Models\UserModel();
$user->createNewUser([
    'name'=>'test5',
    'email'=>'test5@gmail.com',
    'password'=>'123',
]);


$users =  $user->getUsers();
echo "<pre>";
print_r($users);