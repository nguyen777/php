<?php
   $link = mysqli_connect("localhost", "root", "27102001");
    if (!$link)
     {
         echo "error  MySQL";
     }
$db = mysqli_select_db($link,"qldiem");
if(!$db)
{
   echo " error  DB";
}
?>  
