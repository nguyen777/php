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
    <tr><th>Mã Khách Hàng</th><th>Tên Khách Hàng</th><th>Đơn Giá</th><th>Số Phút</th><th>Hình Thức</th><th>Tháng</th><th>Tiền Nộp</th></tr>
        <?php
        include("connection.php");
        $sql = "SELECT * FROM DienThoai2020";
        $r1 = mysqli_query($conn,$sql);
        While($row = mysqli_fetch_array($r1))
        {
            $Ma = $row['MaKH'];
            $Ten = $row['TenKH'];
            $DonGia =$row['DonGia'];
            $SoPhut = $row['SoPhut'];
            $HT = $row['HinhThuc'];
            $Thang = $row['Thang'];
            if($HT=='TT')
            {
                $HinhThuc ="Trả Trước";
                $Tien = $SoPhut * $DonGia;
            }
            else
            {
                $HinhThuc ="Trả Sau";
                $Tien = 0.8*$SoPhut * $DonGia;
            }
          echo"<tr><td>$Ma</td><td>$Ten</td><td>$DonGia</td><td>$SoPhut</td><td>$HinhThuc</td><td>$Thang</td><td>$Tien</td></tr>";
          
        }
        
        ?>

    </table>
</body>
</html>