<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = 'post'>
        <table>
            <tr> <td>Nhập Mã: </td> <td><input type="text" name ='Ma'></td></tr>
            <tr> <td>Tên sản Phẩm: </td> <td><input type="text" name ='Ten'></td></tr>
            <tr> <td>Đơn Vị  Tính: </td> <td><input type="text" name ='DonViTinh'></td></tr>
            <tr> <td>Dơn Giá: </td> <td><input type="text" name ='DonGia'></td></tr>
            <tr> <td>Mô Tả: </td> <td><input type="text" name ='MoTa'></td></tr>
            <tr> <td></td> <td><input type="submit" name ='them' value="Thêm"></td></tr>
        </table>
    </form>
    <?php
    include("ketnoimysql.php");
    //tạo database
    // $sql = "CREATE database QLBanHang";

    //xóa database
    // $sql = "DROP database QLBanHang";
    // define('WP_ALLOW_REPAIR', true);
    //tạo cấu trúc bảng
    // $sql = "CREATE table SanPham(Ma Varchar(10) primary key, Ten varchar(50) not null, DonViTinh varchar(10), DonGia int)";

    //thêm cột cho bảng
    // $sql = "ALTER table sanpham ADD (MoTa varchar(100))";

    //đổi kiểu dữ liệu cho cột
    // $sql = "ALTER TABLE SanPham CHANGE DonGia DonGia DECIMAL (10,2)";
    // $sql = "ALTER TABLE SanPham MODIFY DonGia DECIMAL";
    if(!empty($_POST['Them']))
    {
        $Ma = $_POST['Ma'];
        $Ten = $_POST['Ten'];
        $DonViTinh = $_POST['DonViTinh'];
        $DonGia = $_POST['DonGia'];;
        $MoTa = $_POST['MoTa'];
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

    }
    


    ?>
</body>
</html>