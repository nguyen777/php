<html>
<head>
<title>::Welcome to PHP</title>
</head>
<body>
<h4>Scope of Variable</h4>
<?php
	$a=100;
	
	function test()
	{
		$i=10;
		$a=10;
		echo"<br>a:=$a";
		echo"<br>i:=$i";
		
	}
	Test();
	echo "<br>a:=$a";
	$i=1000;
	echo"<br>i:=$i";
?>
</body>
</html>