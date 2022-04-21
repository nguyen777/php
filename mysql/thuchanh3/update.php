<?php
include("connection.php");
$sql= "UPDATE tblships SET Name='Shipname' WHERE ID='A01' ";
$query = mysqli_query($link,$sql);
mysqli_close($link);
header("location: lietke.php");
?>
