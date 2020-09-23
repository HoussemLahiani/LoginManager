<?php

include("db_connect.php");

$response=array();

if( isset($_POST["mail"]) && isset($_POST["pass"]) )
{
	
	$mail=$_POST["mail"];
	$pass=$_POST["pass"];
	
	$req=mysqli_query($connection," select * from user where mail='$mail' and pass='$pass'  ");
	if(mysqli_num_rows($req) > 0)
	{
		
		$response["success"]=1;
		$response["message"]="login done successfully";
		echo json_encode($response);
		
	}
	else{
		$response["success"]=0;
		$response["message"]="no user with this email or password";
		echo json_encode($response);
		
	}
	
	
}
else
{
	
	$response["success"]=0;
		$response["message"]="required field is missing";
		echo json_encode($response);
	
	
	
	
}







?>