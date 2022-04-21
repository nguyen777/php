
<?php
$servername="localhost";
$username = "root";
$password = "27102001";
$dbname = 'qlbanhang';

//tạo kết nối
$conn = new mysqli($servername, $username,$password,$dbname);

//kiểm tra kết lối
if($conn->connect_error)
{
    die("kết lối không thành công: " .$conn->connect_error);
}
?>