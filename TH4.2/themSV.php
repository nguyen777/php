<?php 
    require_once "ketNoiCSDL.php";
    if(!empty($_POST)) {
        $MaSV = $_POST['MaSV'];
        $FullName = $_POST['FullName'];
        $Birtday = $_POST['Birtday'];
        $Khoa = $_POST['Khoa'];

        $alert = [];
        
        $sql = "SELECT MaSV FROM SinhVien WHERE MaSV = $MaSV";
        $result = $conn->query($sql);
        if(empty($MaSV)) {
            $alert['MaSV']['required'] = 'Bạn chưa nhập MaSV';
        } else if(mysqli_num_rows($result)>0) {
            $alert['MaSV']['min'] = 'MaSV đã tồn tại';
        }

        if(empty($FullName)) {
            $alert['FullName']['required'] = "Bạn chưa nhập họ và tên";
        }
        if(empty($Birtday)) {
            $alert['Birtday']['required'] = "Bạn chưa chọn ngày sinh";
        }

        if(!empty($MaSV)&&!empty($FullName)&&!empty($Birtday)&&!empty($Khoa)&&mysqli_num_rows($result)==0) {
            $sql = "INSERT INTO SinhVien VALUES('$MaSV','$FullName','$Birtday','$Khoa')";
            $result = $conn->query($sql);
            if($result===TRUE) {
                echo "sửa thành công";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }
    body {
        padding: 50px;
    }
    span {
        color: red;
    }
    p {
        display: inline-block;
        width: 90px;
    }

    td {
        padding: 10px 20px;
        text-align: center;
    }
    a+a {
        margin-left: 10px;
    }

    table {
        border-collapse: collapse;
        margin-top: 50px;
    }

    tr:not(:first-child):hover {
        background-color: #c9c9c9;
        cursor: pointer;
    }

</style>
<body>
    <h2>THÊM THÔNG TIN SINH VIÊN</h2>
    <form  method="POST">
        <p>MaSV</p>
        <input type="text" name="MaSV" id="" value="<?=isset($MaSV)?$MaSV:false?>">
        <span>
            <?=isset($alert['MaSV']['required'])?$alert['MaSV']['required']:false?>
            <?=isset($alert['MaSV']['min'])?$alert['MaSV']['min']:false?>
        </span>
        <br>
        <p>Họ Và Tên</p>
        <input type="text" name="FullName" id="" value="<?=isset($FullName)?$FullName:false?>">
        <span><?=isset($alert['FullName']['required'])?$alert['FullName']['required']:false?></span>
        <br>
        <p>NgaySinh</p>
        <input type="date" name="Birtday" id="" value="<?=isset($Birtday)?$Birtday:false?>">
        <span><?=isset($alert['Birtday']['required'])?$alert['Birtday']['required']:false?></span>
        <br>
        <p>Khoa</p>
        <select name="Khoa" id="">
            <?php 
                $sql = "SELECT * FROM Khoa";
                $result = $conn->query($sql);

                foreach($result as $item) {
                    echo '
                        <option value="'.$item['MaKhoa'].'">'.$item['TenKhoa'].'</option>
                    ';
                }
            ?>
        </select>
        <br>
        <input type="submit" name="submit" value="Thêm">
    </form>
    
    <table border="1">
        <tr>
            <td>MaSV</td>
            <td>Họ Và Tên</td>
            <td>Ngày Sinh</td>
            <td>Ma Khoa</td>
            <td>Tên Khoa</td>
        </tr>
        <?php 
            $sql = "SELECT sinhvien.MaSV, HoTen, NgaySinh,sinhvien.MaKhoa ,TenKhoa  FROM sinhvien, khoa WHERE sinhvien.MaKhoa = khoa.MaKhoa ORDER BY `sinhvien`.`MaSV` ASC";
            $result = $conn -> query($sql);
            foreach($result as $item) {
                echo '
                    <tr onclick="Event(this)">
                        <td>'.$item['MaSV'].'</td>
                        <td>'.$item['HoTen'].'</td>
                        <td>'.$item['NgaySinh'].'</td>
                        <td>'.$item['MaKhoa'].'</td>
                        <td>'.$item['TenKhoa'].'</td>
                    </tr>
                ';
            }
            $conn -> close();
        ?>
    </table>
    <script>
        const $$ = document.querySelectorAll.bind(document);
        const $ = document.querySelector.bind(document);
        const element = $$('tr');
        
        function Event(e) {
            let children = e.children;
            let valueMaSV = children[0].innerText;
            let valueHoTen = children[1].innerText;
            let valueNgaySinh = children[2].innerText;
            let valueTenKhoa = children[3].innerText;

            $('input[name="MaSV"]').value = valueMaSV;
            $('input[name="FullName"]').value = valueHoTen;
            $('input[name="Birtday"]').value = valueNgaySinh;
            $('select').value = valueTenKhoa
            

            
        }
        // alert('oke')
    </script>
</body>
</html>