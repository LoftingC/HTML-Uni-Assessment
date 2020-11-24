<?php
	session_start();
?>
<html>
	<head>
		<title> Solent E-Stores </title>
	</head>
	
	<body>
		<?php
			$id=$_GET["productid"];
			
			$conn=new PDO("mysql:host=localhost;dbname=assign089;","assign089","Nadeigup");
			
			echo "<form method='post' action='addshopping.php'>";
			echo "Quantity: <input name='quantity' /> <br />";
    
			echo "<input type='hidden' name='productid' value='$id' <br />";
			echo "<input type='submit' value='Add!' />";
			echo "</form>";
		?>
	</body>
</html>