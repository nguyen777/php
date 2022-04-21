<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div id="box">
        <div name="noidung">
        <form method="post">
        <div><table border = "1px" name="dulieu" >
        <tr><th>Mã</th> <th>tên</th><th>Đơn Vị Tính</th><th>Đơn Giá</th></tr>
        
     <?php
     include("ketnoimysql.php");

     $sql = "SELECT *FROM sanpham";
     $hienthi = mysqli_query($conn,$sql);
     if(mysqli_num_rows($hienthi)>0)
     {
    
         while($row = mysqli_fetch_assoc($hienthi))
         {
             
             echo "<tr><td>" .$row['Ma'] ."</td>
             <td>" .$row['Ten'] ."</td>
             <td> " .$row['DonViTinh'] ."</td>
             <td> " .$row['DonGia'] ."</td></tr>";

         }
     }
     else {
         echo "Không thành công" .$conn->error;
     }
     $conn->close();
     ?>
     <tr><td><input type="text" id = 'ma' value="" name="ma"></td>
     <td><input type="text" id='ten' value=""  name="ten"></td>
     <td><input type="text" id='donvitinh' value=""  name="donvitinh"></td>
     <td><input type="text" id='dongia' value=""  name="dongia"></td></tr>
     </table> 
    </div>
    <br>

    <div>
        <input name="them" value="Thêm" type="submit">
        <input name="sua" value="Sửa" type="submit">
        <input name="xoa" value="Xóa" type="submit">
    </div>
    </form>
        </div>
    </div>
    <?php
    function kiemtra($a)
    {
        if(!empty($a) )
            return true;
        else
           return false;
    } 
    if(isset($_POST['them']))
    {
        
        $Ma = $_POST["ma"];
        $Ten = $_POST["ten"];
        $DonViTinh = $_POST["donvitinh"];
        $DonGia = $_POST["dongia"];

        if(kiemtra($_POST['ma']) && kiemtra($_POST['ten']) && kiemtra($_POST['donvitinh']) && kiemtra($_POST['dongia']))
        {   include("ketnoimysql.php");
            $sql = "INSERT into SanPham value('$Ma','$Ten','$DonViTinh','$DonGia')";
            if(mysqli_query($conn,$sql))
            {
                header("location: hienthi.php");
                $conn->close();
            }
            else
            {
                $result = "lỗi thêm dữ liệu" .mysqli_error($conn);
            }
            


        }
        else
        {
            echo "<script>alert('bạn chưa nhập đầy đủ dữ liệu sản phẩm') </script>";
        }
    }

    if(isset($_POST['xoa']))
    {
        
        $Ma = $_POST["ma"];
        if(kiemtra($_POST['ma']))
        {   include("ketnoimysql.php");
            $sql = "DELETE from SanPham where Ma = $Ma";
            if(mysqli_query($conn,$sql))
            {
                header("location: hienthi.php");
                $conn->close();
            }
            else
            {
                $result = "lỗi Xóa dữ liệu" .mysqli_error($conn);
            }
        }
        else
        {
            echo "<script>alert('bạn chưa nhập mã sản phẩm cần xóa') </script>";
        }

    }

    if(isset($_POST['sua']))
    {
        
        $Ma = $_POST["ma"];
        $Ten = $_POST["ten"];
        $DonViTinh = $_POST["donvitinh"];
        $DonGia = $_POST["dongia"];

        if(kiemtra($_POST['ma']) && kiemtra($_POST['ten']) && kiemtra($_POST['donvitinh']) && kiemtra($_POST['dongia']))
        { 
            include("ketnoimysql.php");
            $sql = "UPDATE SanPham set Ten = '$Ten', DonViTinh='$DonViTinh', DonGia = '$DonGia' Where Ma = '$Ma'";
            if(mysqli_query($conn,$sql))
            {
                header("location: hienthi.php");
                $conn->close();
            }
            else
            {
                $result = "lỗi sửa dữ liệu" .mysqli_error($conn);
            }
            


        }
        else
        {
            echo "<script>alert('bạn chưa nhập đầy đủ dữ liệu sản phẩm cần sửa') </script>";
        }

    }

    ?>
    <style type="text/css">
    #box {
        margin: 0 auto;
        width: 600px;
       
         }
    
    .noidung{
        padding:15px;
        text-align:justify;
    }
    
   
    
    </style>
</body>
</html>