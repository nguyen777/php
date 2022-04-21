<HTML>
<HEAD>
<TITLE>::Welcome to PHP and mySQL</TITLE>
</HEAD>
<BODY>
<h3>Them mau tin</h3>
<?php
include("connection.php ");
$sql="insert into tblships values('A01','Testing')";
$result = mysqli_query($link,$sql);
mysqli_close($link);
?> 
</BODY>
</HTML>
