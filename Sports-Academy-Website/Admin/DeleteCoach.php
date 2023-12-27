<?php

include_once("Conn.php");

$id=$_GET["id"];


$query=mysqli_query($con,"DELETE FROM `coach` WHERE SerialNo='$id'");


if($query)
{
	header("Location:Coach.php");
}
else
{
	header("Location:Index.php");
}

?>