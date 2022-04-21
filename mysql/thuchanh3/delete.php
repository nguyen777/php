<?php
include("connection.php");
$ma = $_POST['txt_ma'];
$sql="DELETE  FROM tblships WHERE  ID='$ma'";
$query = mysqli_query($link,$sql);
mysqli_close($link);
header("location: nhapxoa.php");
?>
