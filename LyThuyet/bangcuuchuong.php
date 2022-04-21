<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<table border="0">
<tr>
<?php
for($i = 1; $i < 10; $i ++) {
    echo "<td>";
    for($j = 1; $j <= 10; $j ++) {
        echo "$i x $j = " . ($i * $j);
        echo "<br>   ";
    }
    echo "</td>";
}
?>
</tr>
</table>
</body>
</html>