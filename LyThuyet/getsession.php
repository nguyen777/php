<?php
session_start();
?>
<html>
    <body>
        <h4>Get Session</h4>
        <?php
        echo 'useId:' . $_SESSION['userid'] . "<br/>";
        echo 'Email:' . $_SESSION['email'] . "<br/>";
        echo 'fullName:' . $_SESSION['fullname'] . "<br/>";

        ?>
    </body>
</html>