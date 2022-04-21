<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table border="1" >
    <tr><th>Mã</th><th>Điểm Toán</th><th>Điểm Văn</th><th>Điểm Ngoại Ngữ</th><th>Tổng</th></tr>
        <?php
        include("connect.php");
        $sql = "SELECT * FROM ThiSinh2020";
        $r1 = mysqli_query($conn,$sql);
        While($row = mysqli_fetch_array($r1))
        {
            $Ma = $row['MaTS'];
            $Toan = $row["DiemToan"];
            $Van = $row["DiemVan"];
            $NN = $row["DiemNN"];
            $Khoi = $row["Khoi"];
          if($Khoi=='A')
          {
              $Tong = $NN + $Van + $Toan*2;
          }
          elseif($Khoi=='C')
          {
            $Tong = $NN + $Van*2 + $Toan;
          }
          elseif($Khoi=='D')
          {
            $Tong = $NN*2 + $Van + $Toan;
          }
          else
          {
            $Tong = $NN*2 + $Van + $Toan;
          }
          echo"<tr><td>$Ma</td><td>$Toan</td><td>$Van</td><td>$NN</td><td>$Tong</td></tr>";
          
        }
        
        ?>

    </table>

</body>
</html>