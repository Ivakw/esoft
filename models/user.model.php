<?php

namespace Models;
require_once './core/DBConnect.php';

class UserModel extends \Core\DBConnect{

    protected $table_name = "users";
    function __construct(){
       //Calling Parent Constructor in order to 
       //opent databse connection
        parent::__construct();
        
    }

    public function getUsers(){

       return  $this->find([],
        []
        );

    }

    public function createNewUser($user = []){

        return $this->insert($user);
    } 

}