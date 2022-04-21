<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1px" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Sách</th>
                <th>Tác giả</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                for($i=1;$i<=10;$i++) {
                    echo "
                        <tr>
                            <td>$i</td>
                            <td>Tên sách $i</td>
                            <td>Tác giả $i</td>
                        </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>