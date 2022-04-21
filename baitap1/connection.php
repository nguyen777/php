<?php
   $conn = mysqli_connect("localhost", "root", "27102001");
    if (!$conn)
     {
         echo "error  MySQL";
     }
$db = mysqli_select_db($conn,"qldiem");
if(!$db)
{
   echo " error  DB";
}
?>  