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
        <?php
        include("connection.php");
        $sql = "SELECT * FROM Diem2020";
        $r1 = mysqli_query($conn,$sql);
        While($row = mysqli_fetch_array($r1))
        {
          $anh = $row['Anh'];
          $hoten = $row['HoTen'];
          $ngaysinh = $row['Ngaysinh'];
          $Ma = $row['MaSV'];
          if($row['TBCN']<5 )
          {
            $ketqua = "Trượt";
          }
          else
          {
            $ketqua = "Đạt";
          }
          
          if($row['GioiTinh']<1)
          {
            $gioitinh = 'Nữ';
            
          }
          else
          {
            $gioitinh = 'Nam';
          }
          echo "<tr><td colspan='3'><b>Mã Số Sinh Viên:</b> $Ma</td></tr>";
          echo "<tr><th  rowspan='5'><img src ='$anh' width ='300px' height ='220px'></th>
          <dt><tr><th>Họ Tên SV: </th> <td>$hoten</td></tr>
          <tr><th>Ngày Sinh: </th><td>$ngaysinh</td></tr>
          <tr><th>Giới Tính: </th> <td>$gioitinh</td></tr>
          <tr><th>Kết Quả: </th> <td>$ketqua</td></tr></dt></tr></tr>";
          
        }
        
        ?>

    </table>
</body>
</html>