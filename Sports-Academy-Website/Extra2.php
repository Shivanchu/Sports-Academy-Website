<?php

include_once("Conn.php");

$fname=$_REQUEST['firstname'];
$lname=$_REQUEST['lastname'];
$em=$_REQUEST['email'];
$ct=$_REQUEST['mobile'];
$issue=$_REQUEST['issue'];
$ques=$_REQUEST['question'];


$query=mysqli_query($con,"insert into contact_form(First_Name,Last_Name,EMail,Contact,Issue,Other_Issue) 
	values ('$fname','$lname','$em','$ct','$issue','$ques')");


if($query)
{
	header("Location:index.php");
}
else
{
	header("Location:Registration.php");
}
?>