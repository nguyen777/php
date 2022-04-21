<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>

   <tr><td>số Nguyên tố gồm: </td> <td>
    <?php
    
     for($i=$_POST["sodau"]; $i<=$_POST["socuoi"]; $i++)
     {
        $dem = 0;
         for($j=1; $j<$i; $j++)
         {
             if($i>1 && $i%$j==0)
             {
                $dem++;

             }

         }
     if($dem==1)
     {
         $kt++;
        echo $i ."  ";
     }
     }
     ?>
     </td></tr>
     <tr><td>Có <?= $kt?> Số nguyên tố</td></tr>
     </table>
    
</body>
</html>