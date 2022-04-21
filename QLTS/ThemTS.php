<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if(isset($_POST['hienthi']))
    {
      header("location: HienThi.php");
    }
    if(isset($_POST['back']))
    {
      header("location: main.php");
    }
    if(isset($_POST['them']))
    {
        $ma = $_POST['mats'];
        $hoten= $_POST['hoten'];
        $khoi = $_POST['khoi'];
        $diemtoan = $_POST['diemtoan'];
        $diemvan = $_POST['diemvan'];
        $diemngoaingu = $_POST['diemngoaingu'];
        ThemSinhVien($ma,$hoten,$khoi,$diemtoan, $diemvan, $diemngoaingu);
    }
    ?>
</head>
<body>
    <form method="post" action="">
        <p>Mã Thí Sinh<input type="text" name="mats"></p>
        <p>Họ Tên Thí Sinh: <input type="text" name="hoten"></p>

        <p>Khối: <select name="khoi">
        <option value="A">A</option>
        <option value="C">C</option>
        <option value="D">D</option>
        </select></p>
        <p>Điểm Toán: <input type="text" name="diemtoan"></p>
        <p>Điểm Văn: <input type="text" name="diemvan"></p>
        <p>Điểm Tiếng Anh: <input type="text" name="diemngoaingu"></p>
        <p><input type="submit" name="them" value="Thêm"></p>
    </form>

    <?php
    function ThemSinhVien($a,$b,$c,$d,$e ,$f)
    {
        include "connection.php";
                $sql = "INSERT INTO thisinh VALUE('$a','$b','$c','$d','$e','$f')";
                if(mysqli_query($link,$sql))
                {
                    mysqli_close($link); 
                    echo "<script>alert('Thêm Thành công') </script>";
                }
                mysqli_close($link); 
                
    }
    ?>
</body>
</html>