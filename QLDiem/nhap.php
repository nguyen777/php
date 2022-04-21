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
        $ma = $_POST['ma'];
        $hoten= $_POST['hoten'];
        $ngaysinh = $_POST['ngaysinh'];
        $gioitinh = $_POST['gioitinh'];
        $tbcn = $_POST['tbcn'];
        $anh = $_POST['anh'];
        ThemSinhVien($ma,$hoten,$ngaysinh,$gioitinh, $tbcn, $anh);
    }
    ?>
</head>
<body>
    <form method="post" action="">
        <p>Mã Sinh Viên <input type="text" name="ma"></p>
        <p>Họ Tên: <input type="text" name="hoten"></p>
        <p>Ngày Sinh <input type="date" name="ngaysinh"></p>
        <p>Giới Tính: <select name="gioitinh">
        <option value="1">Nam</option>
        <option value="0">Nữ</option>
        </select></p>
        <p>TBCN: <input type="text" name="tbcn"></p>
        <p>Ảnh: <input type="file" name="anh"></p>
        <p><input type="submit" name="them" value="Thêm">
        <input type="submit" name="back" value="Quay Lại Main">
      <input type="submit" name="hienthi" value="Hiển Thị Sinh Viên"></p>
    </form>

    <?php
    function ThemSinhVien($a,$b,$c,$d,$e ,$f)
    {
        include "connection.php";
                $sql = "INSERT INTO Diem2020 VALUE('$a','$b','$c','$d','$e','$f')";
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