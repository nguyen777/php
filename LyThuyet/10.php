<html>
<head>
<tittle>::Welcome to PHP</tittle>
</head>
<body>
<h4>Constant</h4>
<?php
	define("pi",3.14);
	//define("hrs",8);
	function Test ()
		{
		if(defined("pi"))
			echo "<br>pi:=".pi;
		else
			echo "<br>pi not defined";
		if(defined("hrs"))
			echo "<br>hrs:=".hrs;
		else
			echo "<br>hrs not defined";
		}
	Test();
	
?>
</body>
</html>