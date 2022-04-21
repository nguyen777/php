<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<table>
	<tr><td>Chuỗi được đảo: </td><td>
		<?php
	$chuoi = preg_split("/[\s,]+/",$_POST["chuoi"]);

	for($i= mb_strlen("$chuoi",'utf-8')-1 ;$i>=0; $i--)
	{
       if($i>0)
	    echo $chuoi[$i] ." ";
	}
	?>
	</td></tr>
</table>
 
<body>
</body>
</html>