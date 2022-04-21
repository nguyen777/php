<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
$ma = $_POST["txt_ma"];
$sql ="SELECT * FROM tblships WHERE ID='$ma'";
$query = mysqli_query($link,$sql);
$n = mysqli_fetch_array($query);
$ma_kh = $n["ID"];
$ten_kh= $n["Name"];

?>
<form id="form2" name="form2" action="xulysua.php" method="post">
<table align="center" border="1">
<tr>
<td align="center" colspan="2">UPDATE</td>
</tr>
<tr>
<td>ShipID</td>
<td><input type="text" id="txt_ma" name="txt_ma" readonly="readonly" value="<?php echo $ma_kh ?>"/></td>
</tr>
<tr>
<td>ShipName</td>
<td><input name="txt_ten" type="text" id="txt_ten" value="<?php echo $ten_kh?>" /></td>
</tr>
………
<tr>
<td colspan="2" align="center">
<input type="submit" id="bt_Sua" name="bt_Sua" value="Update"/>
</td>
</tr>
</table>
</form>
</body>
</html>
