<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
    <form method="post" action="">
        <p><input type="text" name="date"> <input type="submit" name="submit"></p>
    </form>
    <table align="center" border="1" cellpadding="0" cellspacing="0" width="800"><br>                 
        <tr><th>Mã Sinh Viên</th><th>Họ Và Tên</th><th>Ngày Sinh</th><th>Tên Khoa</th></tr>
    <?php
    if(isset($_POST['submit']) && !empty($_POST['date']))
    {
        $date =  $_POST["date"];
        $search=date_create_from_format('d/m/Y',"$date");
        echo $search;
        $sql = 'SELECT sv.MaSV, sv.HoTen, sv.NgaySinh, k.TenKhoa FROM SinhVien as sv INNER JOIN Khoa as k ON sv.MaKhoa = k.MaKhoa WHERE DATE_FORMAT(sv.NgaySinh, "%d/%m/%Y") = ' .date_format($search, "d/m/Y") .'';

    }
    else
    {
        $sql = "SELECT sv.MaSV, sv.HoTen, sv.NgaySinh, k.MaKhoa, k.TenKhoa FROM sinhvien as sv, Khoa  as k Where sv.Makhoa=k.Makhoa";
    }
    include("connection.php");  
               $r1 = mysqli_query($link,$sql);
               While($row = mysqli_fetch_array($r1))
            {
                $msv = $row['MaSV'];
                $tensv= $row['HoTen'];
                $tenk = $row['TenKhoa'] ;
                $date =  explode("-", $row['NgaySinh']);
                for($i= count($date)-1;$i>=0; $i--)
	           {
                if($i>0)
                $ngays .= $date[$i] ."-";
                else
                $ngays.= $date[$i];  
	            }
                echo "<tr onclick='Event(this)'><td>" .$msv ."</td>
                <td>" .$tensv ."</td>
                <td> " .$ngays ."</td>
                <td> " .$tenk ."</td></tr>";
                $ngays=null;
            }
            mysqli_close($link);
    ?>
    </table>
</body>
</html>