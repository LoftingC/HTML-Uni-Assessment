<?php
	session_start();
?>

<html>
	<head>
		<title> Solent E-Store </title>
	</head>
	
	<body>
	<?php 
		if(isset($_SESSION["isadmin"]) && $_SESSION["isadmin"]==1)
		{
			<form method="post" action="newproduct2.php">
				Product Name: <br />
				<input name="name" /> <br />
				Manufacturer: <br />
				<input name="manu" /> <br />
				Description: <br />
				<input name="Description"/> <br />
				Stock Level: <br />
				<input name="stocklevel" /> <br />
				Age Limit: <br />
				<input name="agelimit" /> <br />
				Price: <br />
				<input name="price" /> <br />
				<input type="button" value="Submit" />
			</form>
		}
		else
		{
			echo"You do not have permission to access this page. Please leave.";
			echo"<a href='search.html'> Search page </a>";
		}
	?> 
	</body>
</html>