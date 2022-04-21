<?php
session_start();
?>
<html>
    <body>
        <h4>Registered Session</h4>
        <?php
        //$userid="123";
        //$email="test@yahoo.com";
        //$fullname="Nguyen van ba";
       // session_register("userid");
       // session_register("emai","fullname");
	  $_SESSION['userid'] = "123";
      $_SESSION['email'] = "test@gmail.com";
      $_SESSION['fullname'] = "Nguyen nhat du";

        ?>
    </body>
</html>

