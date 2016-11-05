<?php
//OLD SCHOOL
/**
 * @deparicated
 */	
function depricate_db_connect(){

	$connect = mysqli_connect(DB_HOST,DB_USER_NAME,DB_PASSWORD,DB_NAME,true) or die('Error while connecting to '.DB_NAME.' database');


	$query = "SELECT * FROM users";
	$reusls = mysqli_query($connect,$query);

	while ($row = mysqli_fetch_row($reusls)) {
        printf ("%s (%s)\n", $row[0], $row[1]);
    }
}

// SMART

function db_connect(){
	$connect = new mysqli(DB_HOST,DB_USER_NAME,DB_PASSWORD,DB_NAME);  
        if(mysqli_connect_errno()) {   
            echo "Error: Could not connect to database."; 
            exit; 
        }
     return  $connect;
}

/***************************************************
 * 					Method 1
 ***************************************************/
function data_query($query){
	$connect = db_connect();
    if($query){

        return  mysqli_query($connect,$query);

    }else{

        die('Error While Querieng Data base</br>');

    }
}

 function fetch_array($result){

    return mysqli_fetch_assoc($result) ;

}



/***************************************************
 * 					Method 2
 ***************************************************/

function db_query_method2($query){
	$connect = db_connect();
	$reusls = $connect->query($query);
	return $reusls;
}




/*
$resutl= data_query('SELECT * FROM users');
$datas = fetch_array($resutl);
print_r($datas);
*/

$results = db_query_method2('SELECT * FROM users');

while($row = $results->fetch_assoc()){
	echo "</br>".$row['first_name']." ". $row['last_name'];
}


die;