<?php
/**
 * this is DB connection class
 **/

namespace Core;
use Mysqli;
class DBConnect {

    private $connection = NULL;
    protected $table_name = NULL;
    /**
     * Open Current connection
     */
    public function connect(){
        $this->connection = new mysqli(DB_HOST,DB_USER_NAME,DB_PASSWORD,DB_NAME);  
        if(mysqli_connect_errno()) {   
            echo "Error: Could not connect to database."; 
            exit; 
        }
     return  $this->connection;
    }

}