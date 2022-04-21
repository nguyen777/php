<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
<title>Dang nhap</title>
<script lang="javascript">
    function kiemtra()
    {
        var nguoisd = document.getElementById("nguoisd").value;
        var mk = document.getElementById("mk").value;
        if(nguoisd == '')
          alert('Chua nhap tai khoan');
        else
          if(mk == '')
          alert('Chua nhap mat khau');
        else
        {
            return true;
        }
        return false;
    }
</script>
</head>
<body>
    <form method="post" action="thanhcongdangnhap.php" onsubmit="kiemtra()" >
    <table>
    <tr>
                    <td>Người Sử Dụng: </td>
                    <td><input type="text" name="nguoisd" size="30"></td>
                </tr>
                <tr>
                    <td>Mật Khẩu: </td>
                    <td><input type="password" name="mk" size="30"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"> <input type="submit" value="Đăng nhập"></td>
                </tr>
    </table>
    </form>
</body>
</body>
</html>