<?php
	session_start();
?>
<html>
	<head>
	<title>Solent E-Stores</title>
	</head>
	
	<body>
		<?php
			$name=$_POST["name"];
			$manu=$_POST["manu"];
			$des=$_POST["description"];
			$stock=$_POST["stocklevel"];
			$age=$_POST["agelimit"];
			$price=$_POST["price"]
			
			$conn=new PDO("mysql:host=localhost;dbname=assign089;","assign089","Nadeigup");
			
			$conn->query("INSERT INTO products (name, manufacturer, description, price, stocklevel, agelimit) VALUES ('$name', '$manu', '$des', '$price', '$stock', '$age')");
		?>
		
	</body>
</html>