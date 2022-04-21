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
    $keywords =$_POST['date'];
    $delimiters = array("/","-"," ");
    $keywords = str_replace($delimiters, $delimiters[0], $keywords);
    $arrKeyword= explode($delimiters[0], $keywords);
    for($i= count($arrKeyword)-1;$i>=0; $i--)
	            {
                    if($arrKeyword[$i]<10 && $arrKeyword[$i]>0 && strlen($arrKeyword[$i])==1)
                    {
                        $arrKeyword[$i] = "0" .$arrKeyword[$i];
                    }
                  if($i>0)
                  {
                    $search .= $arrKeyword[$i] ."-";
                  }
                  else
                   $search.= $arrKeyword[$i];  
	            }
                $search = rtrim($search);
                echo $search;
                $sql = "SELECT sv.MaSV, sv.HoTen, sv.NgaySinh, k.TenKhoa FROM sinhvien as sv,Khoa  as k Where sv.Makhoa=k.Makhoa and sv.NgaySinh like '%$search%'" ;
                include("connection.php");  
                $r1 = mysqli_query($link,$sql);
                While($row = mysqli_fetch_array($r1))
             {
                 $msv = $row['MaSV'];
                 $tensv= $row['HoTen'];
                 $tenk = $row['TenKhoa'] ;
                 $date = preg_split("/\-/",$row['NgaySinh']);
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
                 $ngays = null;
             }
             mysqli_close($link); 
             ?>
                 </table>
</body>
</html>