<?php
require_once './utils/config.php';
$__con=null;
function dbConn(){
	global $__con;
	if(!isset($__con)){
		$con = mysqli_connect(constant("DB_HOST"), constant("DB_USER"), constant("DB_PASSWORD"), constant("DB_NAME"));
		if(!$con){
			die('Could not connect: ' . mysql_error());
		}
		mysqli_query($con, "SET NAMES UTF8");
		$__con=$con;
		return $con;
	}else return $__con;
}
?>