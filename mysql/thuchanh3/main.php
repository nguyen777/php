<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id='box'>
        <div name="dulieu">
            <form method="POST">
            <table align="center" border="1" cellpadding="0" cellspacing="0" width="800">
                <tr><th>ID</th><th>Name</th></tr>
                <?php
                include("connection.php");
                $sql = "SELECT * FROM tblships";
                $r1 = mysqli_query($link,$sql);
                While($row = mysqli_fetch_array($r1))
                {
                  $ma=$row["ID"];
                  $ten=$row["Name"];
                ?>
               <tr>
	           <td><?php echo($ma);?></td>
	           <td><?php echo($ten);?></td>
	            </tr>
	           <?php
                }
                 ?>
                  <?php
                mysqli_close($link);
                 ?>
                 <tr><td><input type="text" id = 'id' value="" name="id"></td>
                <td><input type="text" id='name' value=""  name="name"></td>

            </table>
            <input type="submit" name="them" value="Thêm">
            <input type="submit" name="sua" value="Sửa">
            <input type="submit" name="xoa" value="Xóa">
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
        include("connection.php");
        $ma = $_POST["id"];
        $ten= $_POST["name"];
        $sql= "INSERT INTO tblships VALUES('$ma', '$ten')";
        if(kiemtra($_POST['id'])&& kiemtra($_POST['id']))
        {
            
            if(mysqli_query($link,$sql))
            {
                mysqli_close($link); 
                echo "<script>alert('Thêm Thành công') </script>";
                // header("location: main.php");
            }
            elseif(mysqli_error($link)=="Duplicate entry '$ma' for key 'PRIMARY'")
            {
                echo mysqli_error($link);
                echo "<script>alert('Nhập trùng ID') </script>";
            }
            else
            {
                echo "lỗi thêm dữ liệu " .mysqli_error($link);
            }
            

        }
        else
        {
            echo "<script>alert('bạn chưa nhập đầy đủ dữ liệu') </script>";
        }
    }
    if(isset($_POST['sua']))
    { 
        header("location: nhapsua.php");
    }
    if(isset($_POST['xoa']))
    {
        header("location: Nhapxoa.php");
    }
        
?>
    <style type="text/css">
    #box {
        margin: 0 auto;
        width: 600px;
       
         }
    
    .dulieu{
        padding:15px;
        text-align:justify;
    }
    
   
    
    </style>
    
</body>
</html>