<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" >
        <p>Mã Thí Sinh: <input type="text" name="ma" ></p>
        <p>Họ Tên: <input type="text" name="hoten"></p>
        <p>Khối: <select name="khoi">
            <option value="A">A</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select></p>
        <p>Điểm Toán: <input type="text" name="toan"></p>
        <P>Điểm Văn: <input type="text" name="van"></P>
        <p>Điểm Ngoại Ngữ: <input type="text" name="nn"></p>
        <p><input type="submit" name="them" value="Thêm"></p>
    </form>
    <?php
    if(isset($_POST['them']))
    {
        $Ma = $_POST['ma'];
        $HoTen = $_POST['hoten'];
        $Khoi = $_POST['khoi'];
        $Toan = $_POST['toan'];
        $Van = $_POST['van'];
        $NN = $_POST['nn'];
        include "connect.php";
        $sql = "INSERT INTO ThiSinh2020 VALUE('$Ma','$HoTen','$Khoi','$Toan','$Van','$NN')";
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