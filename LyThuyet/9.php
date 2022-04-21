<html>
<head>
<title>::Welcome to PHP</title>
</head>
<body>
<h4>Constant</h4>
<?php
	define ("pi", 3.14);
	function test ()
	{
		echo "<br>pi:=".pi;
		echo "<br>pi:=".constant ("pi");
	}
	test();
	echo"<br>pi:=".pi;
	echo"<br>pi:=".constant("pi")
?>
</body>
</html>