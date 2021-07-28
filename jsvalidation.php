<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8">
	<title>Hello JS </title>
</head>
<body>
	<form action ="helloJSAction.php" method="POST" name = "Registation" onsubmit ="return isValid();">
    <label for = "fullname">Full Name: </label>
    <input type = "text" name = "fullname" id ="fullname">
    <span id="errorMsg" style ="color: red";></span>
    <input type ="submit" name="submit" value="Submit">
    </form>
    <script>
    	function isValid()
    	{
    		var fullname = document.forms ["Registration"]["fullname"].value;
    		if(fullname=="")
    		{
    			document.getElementById('errorMsg').innerHTML ="Please fill up the form propoerly.";
    		}
    	}
    </script>
</body>
</html>