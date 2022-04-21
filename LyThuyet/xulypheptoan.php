<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<table border="0">

<tr>

<td>Số Thứ Nhất:  </td> <td>:<?=$_POST["sothunhat"] ?></td>

</tr>

<tr>

<td>Số Thứ hai: </td>

<td>:<?=$_POST["sothuhai"] ?>

</td>

</tr>
<tr>
<?php 
	$s = 0;
	if($_POST["tinh"]==1)
{
	$s = $_POST["sothunhat"] + $_POST["sothuhai"];
}
	elseif($_POST["tinh"]==2)
	{
		$s= $_POST["sothunhat"] - $_POST["sothuhai"];
	}
	elseif($_POST["tinh"]==3)
	{
		$s= $_POST["sothunhat"] * $_POST["sothuhai"];
	}
	else
	{
		$s= $_POST["sothunhat"] /$_POST["sothuhai"];
	}
	?>

<td>kết quả: </td> <td> <?=$s?></td>;
</tr>

</table>
 
</body>
</html>
