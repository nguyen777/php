<!DOCTYPE html>
<html>
<body>
 
<p>Khi bạn gửi nhấn nút gửi thông tin từ form (submit) hàm sẽ được kích hoạt và hiển thị thông báo.</p>
 
<form  method="post" onsubmit="


<?=kiemtra()?>">
Tên của bạn : <input type="text" name="name">
<input type="submit" value="Gửi đi">
</form>
 
<?php
 function kiemtra()
 {
     if( !empty($_POST('name')))
     {
        echo "<script> alert('gửi đi thành công') </script>";
        header('location: nhansubmit.php');
         exit();

     }
     else
     {
         echo "<script> alert('bạn chưa nhập tin gửi đi') </script>";
     }
 }

?>
<!-- <script>
function myFunction() {
alert("Bạn đã gửi thông tin từ form đi");
}
</script> -->
 
</body>
</html>