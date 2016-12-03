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
        $result = $this->connection->query($query);
        $out = [];
        while($row =$result->fetch_assoc() ){
            $out[] = $row;
        }
       return $out;

    }

    public function insert($data = []){

        $query = "INSERT INTO ".$this->table_name;
        $_columns = "";
        $_values = "";
        $index = 1;
        foreach($data as $column_name=>$value){
            $_columns   .= (count($data) > $index)? " $column_name ,":$column_name;
            $_values    .= (count($data) > $index)? "'{$value}',":"'{$value}'"; 
            $index++;
        }

        $query = $query."(".$_columns.")"." VALUES ( {$_values} )" ;
        
        $this->connection->query($query);
        return  $this->connection->insert_id;

    }



}