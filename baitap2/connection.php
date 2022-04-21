<?php
   $conn = mysqli_connect("localhost", "root", "27102001");
    if (!$conn)
     {
         echo "error  MySQL";
     }
$db = mysqli_select_db($conn,"qldienthoai2020");
if(!$db)
{
   echo " error  DB";
}
?>  