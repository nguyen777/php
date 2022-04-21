<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table align="center" border="1" cellpadding="0" cellspacing="0" width="800">
<tr>
<th>ID</th>
<th>Name</th>
</tr>
<?php
include("connection.php");
$sql = "SELECT * FROM tblships";
$r1 = mysqli_query($link,$sql);
While($row = mysqli_fetch_array($r1))
{
$ma=$row["ID"];
$ten=$row["Name"];
?>
<tr>
	<td><?php echo($ma);?></td>
	<td><?php echo($ten);?></td>
	</tr>
	<?php
}
?>
<?php
mysqli_close($link);
?>
</table>
<form id="form1" name="form1" action="sua.php" method="post">
<table align="center" border="1">
<tr>
<td align="center" colspan="2">Search</td>
</tr>
<tr>
<td>ShipID</td>
<td><input type="text" id="txt_ma" name="txt_ma"  /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" id="bt_nhap" name="bt_nhap" value="GO"/>
</td>
</tr>
</table>
</form>
</body>
</html>
