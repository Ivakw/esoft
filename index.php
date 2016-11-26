<?php
require_once './config.php';
require_once './core/DBConnect.php';
//require_once './db/DBConnect.php';

$dbCon =  new Core\DBConnect();

echo $dbCon->connect();