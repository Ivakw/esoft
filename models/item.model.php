<?php

namespace Models;
require_once './core/DBConnect.php';

class ItemModel extends \Core\DBConnect{

    protected $table_name = "items";
    function __construct(){
       //Calling Parent Constructor in order to 
       //opent databse connection
        parent::__construct();
        
    }
  
}