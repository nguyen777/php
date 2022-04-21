<HTML>
<BODY>
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
</BODY>
</HTML>
