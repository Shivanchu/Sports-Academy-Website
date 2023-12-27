<?php

include_once("Conn.php");

$fname=$_REQUEST['firstname'];
$lname=$_REQUEST['lastname'];
$gen=$_REQUEST['gender'];
$em=$_REQUEST['email'];
$dob=$_REQUEST['dob'];
$add=$_REQUEST['address'];
$ct=$_REQUEST['mobile'];
$city=$_REQUEST['city'];
$pin=$_REQUEST['pin'];
$state=$_REQUEST['state'];
$sc=$_REQUEST['SportsCategory'];
$d=$_REQUEST['Duration'];
$l=$_REQUEST['level'];


$query=mysqli_query($con,"insert into registration_form(First_Name,Last_Name,EMail,Contact,Gender,DOB,Address,City,AreaPin,State,SC,Duration,Level) 
	values ('$fname','$lname','$em','$ct','$gen','$dob','$add','$city','$pin','$state','$sc','$d','$l')");


if($query)
{
	header("Location:index.php");
}
else
{
	header("Location:Registration.php");
}
?>