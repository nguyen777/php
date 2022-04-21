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
        <div class="tieude">THỰC HIỆN ĐẢO CHỮ</div>
        <div class = "noidung">
            <form method = "post">
                Nhập chữ muốn đảo: <input class="form-control" type="text" name="chuoi">
                <input class="form-control" type="submit" name="gui" value = "Thực Hiện">
            </form>
            <?php

            function kiemtra($a)
            {
                if(!empty($a))
                    return true;
                else
                   return false;
            }
            function daochuoi($a)
            {
                $chuoi = preg_split("/[\s,]+/",$a);
                echo "<br> chuỗi đã đảo: ";
               
	            for($i= mb_strlen("$chuoi",'utf-8')-1 ;$i>=0; $i--)
	            {
                 if($i>0)
                  $arr .= $chuoi[$i] ." ";
                 else
                   $arr .= $chuoi[$i];  
	            }
                echo $arr;
                // $comma_separated = join(" ", $arr);
               

                // echo $comma_separated ;
            }
            if(isset($_POST['gui']))
            {
                $a=$_POST['chuoi'];
                if(kiemtra($a))
                {
                    daochuoi($a);
                }
                else
               {
                echo "<br> Bạn phải nhập chữ muốn đảo không được bỏ trống";
                }
            }
            
            ?>
        </div>
    </div>
    <style type="text/css">
    #box {
        margin: 0 auto;
        width: 600px;
        border: 2px solid blue;
        border-radius:7px;
         }
    .tieude{
        padding:10px 15px;
        background:blue;
        color:#fff;
        font-weight:bold;

    }
    .noidung{
        padding:15px;
        text-align:justify;
    }

</style>
</body>
</html>