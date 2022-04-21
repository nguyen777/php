<HTML>
<HEAD>
<TITLE>::Welcome to PHP</TITLE>
</HEAD>
<BODY>

<table border="1">
<?php if(isset($_GET["al"]))
{
?>

<tr><td>Select:<?= $_GET["al"]?></td></tr>
<?php
}
?>
</table>
</BODY>
</HTML>