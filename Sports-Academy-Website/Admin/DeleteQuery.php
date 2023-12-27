<?php

include_once("Conn.php");

$id=$_GET["id"];


$query=mysqli_query($con,"DELETE FROM `contact_form` WHERE Serial_No='$id'");


if($query)
{
	header("Location:Query.php");
}
else
{
	header("Location:Index.php");
}

?>