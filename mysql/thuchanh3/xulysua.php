<?php
include("connection.php");
$ma = $_POST["txt_ma"];
$ten= $_POST["txt_ten"];
$sql= "UPDATE tblships SET Name ='$ten' WHERE ID = '$ma' ";
$query = mysqli_query($link,$sql);
mysqli_close($link);
header("location: nhapsua.php");
?>
