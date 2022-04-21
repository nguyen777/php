<?php
session_start();
$tk = "taikhoan";
$mk = "123";
?> 

<html>
<head>
	<title>Trang đăng nhập</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post">
	    	<table>
	    		<tr>
	    			<td>Người Sử Dụng: </td>
	    			<td><input type="text" name="username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Mật Khẩu: </td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input type="submit" name="gui" value="Đăng nhập"></td>
	    		</tr>
	    	</table>
  </form>
  <?php
    


     function kiemtra($a)
     {
         if(!empty($a) )
             return true;
         else
            return false;
     } 

    


    if(isset($_POST["gui"]))
    {
        if(kiemtra($_POST["username"]) && kiemtra($_POST["password"]))
        {
            
            if($_POST["username"] ==$tk && $_POST["password"]==$mk )
            {
               $_SESSION['dangnhap'] = 'dang nhap thanh cong';
               header('location: dangnhapthanhcong.php');
               exit();

            }
            else
            echo "<script>alert('tài khoản hoặc mật khẩu không chính xác! ') </script>";
            
            
        }
        elseif(kiemtra($_POST["username"]) )
            echo "<script>alert('chưa nhập Mật Khẩu ') </script>";
        elseif(kiemtra($_POST["password"]))
            echo "<script>alert('chưa nhập Người Sử Dụng') </script>";
        else
            echo "<script>alert('chưa nhập Người Sử Dụng và Mật Khẩu ') </script>";

    }

  ?>
</body>
</html>