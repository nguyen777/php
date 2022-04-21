<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Kiểm tra -->
    <?php
            $error = [];
            if (!empty($_POST)) {
                 if(strlen($_POST['masv'])>10)
                {
                    $error['masv']  = 'Mã Sinh Viên quá dài';
                }
                else {
                    $masv = $_POST['masv'];
                }
                if(strlen($_POST['masv'])>30)
                {
                    $error['hoten']  = 'Họ Tên Sinh Viên quá dài';
                }
                else{       
                $hoten = $_POST['hoten'];
                $ngaysinh=$_POST['ngaysinh'];
                $tenkhoa =$_POST['Khoa'];
                include "connection.php";
                $sql = "SELECT MaKhoa FROM Khoa WHERE TenKhoa = '$tenkhoa'";
                $result = mysqli_query($link,$sql);
                while($row = mysqli_fetch_array($result))
                    {
                        $makhoa=$row['MaKhoa'];
                        
                    }

                }
                if(isset($_POST["gui"]))
                {
                    include "connection.php";
                    $sql = "SELECT MaSV FROM sinhvien WHERE MaSV = '$masv'";
                    $result = mysqli_query($link,$sql);
                    if (empty($_POST['hoten'])) {
                        $error['hoten'] = 'Không được bỏ trống';
                    } 
                    if($result=mysqli_num_rows($result)>0)
                    {
                        $error['masv']  = 'Mã Sinh Viên đã tồn tại';
                        mysqli_close($link); 
                    }
                    elseif (empty($_POST['masv'])) {
                        $error['masv']  = 'Không được bỏ trống';
                    }
                    else
                    {
                        ThemSinhVien($masv,$hoten,$ngaysinh,$makhoa);
                    }
                }

                if(isset($_POST["sua"]))
                {
                    SuaSinhVien($masv,$hoten,$ngaysinh,$makhoa);
                }
                if(isset($_POST["xoa"]))
                {
                    XoaSinhVien($masv);         
                }
        }
            ?>
</head>
<body>
<div id="box">
      <form method = "post" action="" name="dulieu">
          <div class="inputsv"><br>
               <div class="tieude"><CENTER>QUẢN LÝ SINH VIÊN</CENTER></div>
                <div>  <BR>Mã Sinh Viên: <input class="form-control" type="text" name="masv" id="masv" value="<?= $masv ?>">
                <!-- báo lỗi -->
                <?php
                echo (!empty($error['masv'])) ?
                '<span style="color: red;  ">' . $error['masv'] . '</span>' : false;
                ?></div> <br>
                <div><BR> Ho Và Tên:   <input class="form-control" type="text" name="hoten" id="hoten" value="<?= $hoten ?>">
                <!-- báo lỗi -->
                <?php
                echo (!empty($error['hoten'])) ?
                '<span style="color: red; ">' . $error['hoten'] . '</span>' : false;
                ?></div> <br>
                <div><BR>Ngày Sinh:   <input class="form-control" type="date"  name='ngaysinh' value="<?= $ngaysinh ?>"></div><br>
                <div><BR>Khoa: <select id="Khoa" name="Khoa"><br>
                    <?php
                    include "connection.php";
                    $sql = "SELECT * FROM Khoa";
                    $result = mysqli_query($link,$sql);
                    while($row = mysqli_fetch_array($result))
                    {
                        $ma=$row['MaKhoa'];
                        $ten = $row['TenKhoa'];
                    
                    ?>
                    <option value="<?=$ten?>"><?=$ten?></option>
                    <?php }?>
                </select></div> 
                <!-- thêm -->
                <div><BR><input class="form-control" type="submit" name="gui" value = "Thêm">
                <!-- sửa -->
                <input type="submit" value="Sửa" name="sua">
                <!-- xóa -->
                <input type="submit" value="Xóa" name="xoa" onclick="return thongbao()">
                </div></div><br>

                <!-- Tìm kiếm -->
                <div class="search"><br>
                <div class="tieude"><CENTER>TÌM KIẾM SINH VIÊN</CENTER></div>
                <div><br>
                <p>chọn mục cần tìm:<select id="chon" name="chon" onclick=" return input()"><br>
                    <option value="">chọn</option>
                    <option value="ma">Mã sinh viên</option>
                    <option value="ten">Họ Tên</option>
                    <option value="date">Ngày sinh</option>
                    <option value="khoa">khoa</option>
                    <option value="all">Show all</option>
                    
                </select></p>
                <p id="input"></p>
                </div></div>     
            </form>

            <!-- show dữ liệu mysql -->
            <div>
                <table><br>                 
            <tr><th>Mã Sinh Viên</th><th>Họ Và Tên</th><th>Ngày Sinh</th><th>Tên Khoa</th></tr>
             <?php
             if(isset($_POST['tim']) && $_POST['chon']=='ma' && !empty($_POST['search']))
             {
                $search =$_POST['search'];
                $sql = "SELECT sv.MaSV, sv.HoTen, sv.NgaySinh, k.TenKhoa FROM sinhvien as sv,Khoa  as k Where sv.Makhoa=k.Makhoa and sv.MaSV like '%$search%'" ;
             }
             elseif(isset($_POST['tim']) && $_POST['chon']=='ten' && !empty($_POST['search']))
             {
                 $search =$_POST['search'];
                $sql = "SELECT sv.MaSV, sv.HoTen, sv.NgaySinh, k.TenKhoa FROM sinhvien as sv,Khoa  as k Where sv.Makhoa=k.Makhoa and sv.HoTen like '%$search%'";
             }
             elseif(isset($_POST['tim']) && $_POST['chon']=='date' && !empty($_POST['search']))
             { 
                $search=$_POST["search"];
                $sql = "SELECT sv.MaSV, sv.HoTen, sv.NgaySinh, k.TenKhoa FROM sinhvien as sv,Khoa  as k Where sv.Makhoa=k.Makhoa and sv.NgaySinh like '%$search%'";
             }
             elseif(isset($_POST['tim']) && $_POST['chon']=='khoa' && !empty($_POST['search']))
             {
                $search =$_POST['search'];
                $sql = "SELECT sv.MaSV, sv.HoTen, sv.NgaySinh, k.TenKhoa FROM sinhvien as sv,Khoa  as k Where sv.Makhoa=k.Makhoa and  k.TenKhoa like '%$search%'" ;
             }
             else
             {
                $sql = "SELECT sv.MaSV, sv.HoTen, sv.NgaySinh, k.MaKhoa, k.TenKhoa FROM sinhvien as sv, Khoa  as k Where sv.Makhoa=k.Makhoa";
             }
               include("connection.php");  
               $r1 = mysqli_query($link,$sql);
               While($row = mysqli_fetch_array($r1))
            {
                $msv = $row['MaSV'];
                $tensv= $row['HoTen'];
                $tenk = $row['TenKhoa'] ;
                $date = preg_split("/\-/",$row['NgaySinh']);
                for($i= count($date)-1;$i>=0; $i--)
	           {
                if($i>0)
                $ngays .= $date[$i] ."/";
                else
                $ngays.= $date[$i];  
	            }
                echo "<tr onclick='Event(this)'><td>" .$msv ."</td>
                <td>" .$tensv ."</td>
                <td> " .$ngays ."</td>
                <td> " .$tenk ."</td></tr>";
                $ngays = null;
            }
            mysqli_close($link); 
            ?>
                </table></div>
    </div>

<!-- hàm php -->
    <?php
    function ThemSinhVien($a,$b,$c,$d)
    {
        include "connection.php";
                $sql = "INSERT INTO sinhvien VALUE('$a','$b','$c','$d')";
                if(mysqli_query($link,$sql))
                {
                    mysqli_close($link); 
                    echo "<script>alert('Thêm Thành công') </script>";
                }
                
    }
    
    function SuaSinhVien($a,$b,$c,$d)
    {
        include "connection.php";
        $sql = "UPDATE sinhvien Set HoTen = '$b', NgaySinh = '$c', MaKhoa ='$d' Where MaSV ='$a' ";
        if(mysqli_query($link,$sql))
        {
            mysqli_close($link); 
            echo "<script>alert('Sửa Thành công') </script>"; 
        }
            
         
    }

    function XoaSinhVien($a)
    {
        include "connection.php";
        $sql = "DELETE FROM sinhvien Where MaSV ='$a' ";
        if(mysqli_query($link,$sql))
        {
            mysqli_close($link); 
        }
    }
    ?>

<!-- hàm javascript -->
    <script>
        const $$ = document.querySelectorAll.bind(document);
        const $ = document.querySelector.bind(document);
        const element = $$('tr');
        function Event(e) {
            let children = e.children;
            let valueMaSV = children[0].innerText;
            let valueHoTen = children[1].innerText;
            let valueNgaySinh = children[2].innerText;
            let d = valueNgaySinh.substring(0, 2);
            let m = valueNgaySinh.substring(3,5);
            let y = valueNgaySinh.substring(6);
            let valueTenKhoa = children[3].innerText;
            $('input[name="masv"]').value = valueMaSV;
            $('input[name="hoten"]').value = valueHoTen;
            $('input[name="ngaysinh"]').value = y + '-'+ m+ '-'+d;
            $('select[name="Khoa"]').value = valueTenKhoa       
        }

        function thongbao()
        {
            var masv = document.forms["dulieu"]["masv"].value;
            if (masv == null || masv == "") {
                return alert('Vui lòng chọn '); 
            }
            else
            {


                return confirm('Bạn có muốn xóa sinh viên này?');
            } 
        }

        function input()
        {
            var chon = document.getElementById('chon').value;
            if(chon === "date")
            {
                var element = document.getElementById('input');
                element.innerHTML ="<input type='date' name='search' id='search' placeholder='Nhập sinh viên cần tìm'> <input type='submit' name='tim' value='Tìm'>";
                console.log(element);
	            console.log(element.innerHTML);
            }

            else if(chon ==='ma' || chon ==='ten' ||  chon ==='khoa')
            {
                var element = document.getElementById('input');
                element.innerHTML ="<input type='text' name='search' id='search' placeholder='Nhập sinh viên cần tìm'> <input type='submit' name='tim' value='Tìm'>";
                console.log(element);
	            console.log(element.innerHTML);
            }
            else if(chon =='all')
            {
                var element = document.getElementById('input');
                element.innerHTML ="<input type='submit' name='tim' value='SHOW'>";
                console.log(element);
	            console.log(element.innerHTML);
            }
            else
            {
                var element = document.getElementById('input');
                element.innerHTML ="<span style ='color: red;'>vui lòng chọn mục cần tìm!</span>";
                console.log(element);
	            console.log(element.innerHTML); 
            }
            
        
        }
   
    </script>

    <!-- thêm css -->
    <style>
        .inputsv{
            text-align: center;
            border-width: 2px;
            border-style: solid;
            border-color: black;
            align-self: auto;
            width: 400px;
            height: 308px; 
            position: absolute;
            top: 20%;
            left: 40%;
            transform: translate(-50%,-50%);
            background-color: white;
            font-size: 16px;
            
        }

        .search{
            
            border-width: 2px;
            border-style: solid;
            border-color: black;
            width: 400px;
            height: 308px; 
            position: absolute;
            top: 14.5%;
            left: 40%;
            transform: translate(50%,-33%);
            text-align: center;
            background-color: white;
            font-size: 20px;
        }

        .box{ 
             /* display: flex;
            align-items: center;
            justify-content: center;  */
             /* display: grid;
            place-items: center; */
            position: relative;
        } 

        table{
            border: 1px solid black;
            /* align: center ;
            border: 1;  */
            /* cellpadding: "0"; 
            cellspacing="0"  */
            width:925px;
            position: absolute;
            top: 500px;
            left: 51%;
            transform: translate(-50%,-50%);
            text-align: center;
        }

        .tieude{
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 20px;
            width: 60%;
            margin: 0 auto 15px;
            background-color: aquamarine;
        }

        tr {color:black; }
    tr:nth-child(odd) {background-color: aquamarine;}
    tr:nth-child(even){background-color: yellow;}
    
    tr:not(:first-child):hover {
        background-color: #c9c9c9;
        cursor: pointer;
    }

    </style>
    

</body>
</html>