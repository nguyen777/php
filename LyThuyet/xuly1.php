<HTML>
<HEAD>
<TITLE>::Welcome to PHP</TITLE>
</HEAD>
<BODY>
<h4>Form variable</h4>
<table>
    
<?php
    if(!empty($_GET)) {
        $province = $_GET["province"];
        $industry = $_GET["industry"];
    }
?>
<tr><td>Province</td>

<td>
:<?=$province?>
</td></tr>
<tr><td>Industry</td>
<td>
:<?=$industry?>
</td></tr>
</table>
</BODY>
</HTML>