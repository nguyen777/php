<html>
    <body>
        <?php
            function DaoChuoi($chuoi)
            {
                $m = explode(" ", $chuoi);
                $s = "";
                for ($i = count($m) - 1; $i >= 0; $i--)
                {
                    $s .= $m[$i] . " ";
                }
                $s = rtrim($s);
                return $s;
            }            
        ?>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nhập chuỗi</td>
                    <td><input type="text" name="Chuoi"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Đảo chuỗi"></td>
                </tr>                
            </table>
        </form>
        <?php
        if (isset($_POST["Chuoi"])) echo "Kết quả: " . DaoChuoi($_POST["Chuoi"]);
        ?>
    </body>
</html>