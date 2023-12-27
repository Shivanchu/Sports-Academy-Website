<?php

include_once("Conn.php");

$id=$_GET["id"];


$query=mysqli_query($con,"DELETE FROM `registration_form` WHERE Serial_No='$id'");


if($query)
{
	header("Location:Form.php");
}
else
{
	header("Location:Index.php");
}

?>