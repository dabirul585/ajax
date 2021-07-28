<?php


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-">
	<title>AJAX </title>
</head>
?>
<body>
	<h1> AJAX</h1>
	<p id="demo"> Fillup the form !</p>
	<p> Fill up the Script</p>
	<button onclick="fetch()"> Click me!</button>
	<script>
		function fetch()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onload = function()
			{
				if (this.status===200)
				{
					document.getElementByname("demo").
					innerHTML = this.responseText
					document.getElementByid("demo").
					innerHTML = this.responseText;
				}
			}
			xhttp.open("GET", "indexAction.php",true);
			xhttp.send();

		}
	</script>
</body>
</html>