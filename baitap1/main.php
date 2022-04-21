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
        <p><input type="submit" name="hienthi" value="Hiển Thị"></p>
        <p><input type="submit" name="them" value="Thêm"></p>
    </form>
    <?php
    if(isset($_POST['hienthi']))
    {
        header("location: hienthi.php");
    }
    if(isset($_POST['them']))
    {
        header("location: nhap.php");
    }
    ?>
</body>
</html>