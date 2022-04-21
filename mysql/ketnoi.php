<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
    //tạo database
    // $sql = "CREATE database QLBanHang";

    //xóa database
    // $sql = "DROP database QLBanHang";

    //tạo cấu trúc bảng
    // $sql = "CREATE table SanPham(Ma Varchar(10) primary key, Ten varchar(50) not null, DonViTinh varchar(10), DonGia int)";

    //thêm cột cho bảng
    // $sql = "ALTER table sanpham ADD (MoTa varchar(100))";

    //đổi kiểu dữ liệu cho cột
    // $sql = "ALTER TABLE SanPham CHANGE DonGia DonGia DECIMAL (10,2)";
    // $sql = "ALTER TABLE SanPham MODIFY DonGia DECIMAL";
 
        
     $sql = "INSERT into SanPham value($Ma,$Ten,$DonViTinh,$DonGia,$MoTa)";
       if($conn->query($sql)==true)
      {
        echo"tạo table thành công";
      }
      else
      {
        echo "có lỗi khi tạo table: " .$conn->error;
      }
      $conn ->close();

    
    


    ?>
</body>
</html>