<!DOCTYPE html>
<html>
<head>
	<title>View</title>
		<style type="text/css">
		#h
		{
			background: black;
			height: 50px;
			padding: 15px;
			color: white;
			text-shadow:2px 4px 2px red; 
			border: 5px double red;
			border-radius: 50px;

		}
		#btn
		{
			width: 50;
			height: 25;
		}

		#view
		{
			margin: 200px;
			text-align: center;
		}
	</style>
</head>
<body>
<h1 id="h" align="center">Result</h1>
<?php 
 $a=$_GET['str'];
 $b=strrev($a);

 if($a==$b)
 	echo "<b>"."Given String Is Palindrome"."</br>";
 else
 	echo "<br>"."Given String Is NOT Palindrome"."</br>";
?>
</body>
</html>