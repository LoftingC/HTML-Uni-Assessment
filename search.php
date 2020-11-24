<?php
	session_start();
?>

<html>
<?php
	<head>
		<title>Solent E-Store</title> 
	</head>
	<body>
			$itemname= $_GET["item"];
			
			$conn=new PDO("mysql:host=localhost;dbname=assign089;","assign089","Nadeigup");
			
			$result=$conn->query("SELECT * FROM products WHERE name='itemname'");
			
			while($row=$result->fetch())
			{
				echo"<p>";
				echo"Product Name:" . $row["name"] . "<br />";
				echo"Price:" . $row["price"] . "<br />";
				
				echo"<a href='quantity.php?productid=" . $row["ID"] . "'> Add to shopping basket</a><br />";
				
			}
	</body>
?> 
</html>