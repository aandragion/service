<?php

$con = mysqli_connect('localhost', 'root', '', 'db_bioskop');
if(!$con){
	die(mysqli_connect_error());
}

// $hostname_localhost ="localhost:3306";

// $database_localhost ="db_bioskop";
 
// $username_localhost ="root";

// $password_localhost ="";

// $con = mysql_connect($hostname_localhost,$username_localhost,$password_localhost)

// or

// trigger_error(mysql_error(),E_USER_ERROR);