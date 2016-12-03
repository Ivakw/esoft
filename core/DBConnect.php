<?php
/**
 * this is DB connection class
 **/

namespace Core;
use Mysqli;
class DBConnect {

    private $connection = NULL;
    protected $table_name = NULL;
    protected $name = "PIUSHA";
    /**
     * Open Current connection
     * Initiate DBConnect Construct
     */
    public function __construct(){
        //echo "<br/>CALLING DBConnect Parent Construct";
        $this->connection = new mysqli(DB_HOST,DB_USER_NAME,DB_PASSWORD,DB_NAME);  
        if(mysqli_connect_errno()) {   
            echo "Error: Could not connect to database."; 
            exit; 
        }
   
    }



    /**
     * Find data from the database
     * This function will execute SELECT query with the where clause
     */
    public function find($columns =[],$where = []){

        $_columns   = " * "; //DEFAULT
        $_where     = "WHERE 1 = 1"; //DEFUALT
        if(!empty($columns)){
            $_columns = implode(',',$columns);
        }
        // email => "abc@gmail.com
        //
        if(!empty($where)){
            foreach($where as $column_name=>$value){
               $_where .= " AND `{$column_name}` = '{$value}'"; 
            }
        }

        $query = "SELECT {$_columns} FROM ".$this->table_name;
        $query .= " ".$_where;

       return $this->connection->query($query)->fetch_array();

    }



}