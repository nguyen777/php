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
        <tr><th>Mã Thí Sinh</th><th>Diểm Toán</th><th>Điểm Văn</th><th>Điểm Ngoại Ngữ</th><th>Tổng Điểm</th></tr>
        <?php
        include("connection.php");
        $sql = "SELECT * FROM thisinh";
        $r1 = mysqli_query($link,$sql);
        While($row = mysqli_fetch_array($r1))
        {
            $mats = $ros['MaTS'];
            $diemtoan = $ros['DiemToan'];;
            $diemvan = $ros['DiemVan'];
            $diemngoaingu = $ros['DiemNgoaiNgu'];
            $khoi = $ros['Khoi'];
            if($khoi=='D'|| $khoi =='d')
            {
                $tongdiem = $diemngoaingu * 2 + $diemtoan + $diemvan ;
            }
            if($khoi=='C'|| $khoi =='c')
            {
                $tongdiem = $diemngoaingu + $diemtoan + $diemvan *2 ;
            }
            // if($khoi=='B'|| $khoi =='b')
            // {
            //     $tongdiem = $diemngoaingu + $diemtoan + $diemvan ;
            // }
            if($khoi=='A'|| $khoi =='a')
            {
                $tongdiem = $diemngoaingu + $diemtoan *2 + $diemvan ;
            }
           
            echo " <tr><td>$mats</td> <td>$diemtoan</td><td>$diemvan</td><td>$diemngoaingu</td><td>$tongdiem</td></tr> ";
          
        }
        
        ?>

    </table>
</body>
</html>