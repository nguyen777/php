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
        <p>Mã Học Sinh: <input type="text" name="ma"></p>
        <p>Họ Và Tên: <input type="text" name="ten"></p>
        <p>Ngày Sinh: <input type="date" name="date"></p>
        <p>Giới Tính: <select name="gioitinh">
            <option value="0">Nữ</option>
            <option value="1">Nam</option>
        </select></p>
        <p>Trung Bình Cả Năm: <input type="text" name="tbcn"></p>
        <p>Ảnh: <input type="file" name="anh"></p>
        <p><input type="submit" name="them" value="Thêm"></p>
    </form> 
    <?php
    if(isset($_POST['them']))
    {
        $Ma = $_POST['ma'];
        $HoTen = $_POST['ten'];
        $NgaySinh = $_POST['date'];
        $GioiTinh = $_POST['gioitinh'];
        $TBCN = $_POST['tbcn'];
        $Anh = $_POST['anh'];
        include "connection.php";
        $sql = "INSERT INTO Diem2020 VALUE('$Ma','$HoTen','$NgaySinh','$GioiTinh','$TBCN','$Anh')";
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