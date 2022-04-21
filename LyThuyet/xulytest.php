<?php
$_GET = array(
    'id' => $_POST["nhaptest"],
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="xulyxau.php" method="post">
      <table>
          <?php

           if(isset($_POST['nhaptest']))
           {
            for($i=0;$i<$_POST["nhaptest"];$i++)
            {
                echo "<tr><td>test xâu " .($i+1) ." </td><td><input type='text' name = $i ></td></tr>";
                $myarr[$i]=$_POST["test"];
            }
           }          
          ?>
          <tr><td></td><td><input class="form-control" type="submit" name="gui" value="thực Hiện"></td>
        </tr>
        </table>
    </form>
</body>
</html>