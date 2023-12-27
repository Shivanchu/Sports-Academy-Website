<?php

$server="localhost";
$username="root";
$password="";
$dbname="project";

//It connects frontend with the Backend(DataBase)
$con=mysqli_connect($server,$username,$password,$dbname); 
if($con) //Or if($con) Both are same
{
	echo "";
}
else
{
	mysqli_connect_error();
}

?>