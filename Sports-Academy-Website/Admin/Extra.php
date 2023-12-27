<?php

include_once("Conn.php");

$name=$_REQUEST['Name'];
$s=$_REQUEST['Sport'];
$sp=$_REQUEST['Specialization'];


$query=mysqli_query($con,"insert into coach(Name,Sport,Specialization) 
	values ('$name','$s','$sp')");


if($query)
{
	header("Location:Coach.php");
}
else
{
	header("Location:Add Coach.php");
}


?>