<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <p>Mã Khách Hàng: <input type="text" name="ma"></p>
        <p>Tên Khách Hàng: <input type="text" name="ten"></p>
        <p>Đơn Giá: <input type="text" name="dongia"></p>
        <p>Số Phút: <input type="text" name="sophut"></p>
        <p>Hình Thức: <select name="hinhthuc">
            <option value="TT">Trả Trước</option>
            <option value="TS">Trả Sau</option>
        </select></p>
        <p>Tháng: <input type="text" name="thang"></p>
        <p><input type="submit" name="them" value="Thêm"></p>
    </form> 
    <?php
    if(isset($_POST['them']))
    {
        $Ma = $_POST['ma'];
        $HoTen = $_POST['ten'];
        $DonGia = $_POST['dongia'];
        $SoPhut = $_POST['sophut'];
        $HinhThuc = $_POST['hinhthuc'];
        $Thang = $_POST['thang'];
        include "connection.php";
        $sql = "INSERT INTO DienThoai2020 VALUE('$Ma','$HoTen','$DonGia','$SoPhut','$HinhThuc','$Thang')";
        if(mysqli_query($conn,$sql))
        {
            mysqli_close($conn); 
            echo "<script>alert('Thêm Thành công') </script>";
        }
        else
        {
            echo "<script>alert('Thêm Không Thành công') </script>";
        }
        mysqli_close($conn);
    }
    ?>

</body>
</html>