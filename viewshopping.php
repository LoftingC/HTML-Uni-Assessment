<?php
	session_start();
?>

<html>
	<head>
		<title> Welcome to Solent E-Stores</title>
	</head>
	
	<body>
		<?php
			$conn=new PDO("mysql:host=localhost;dbname=assign089;","assign089","Nadeigup");
			
			$user=$_SESSION["solentuser"];
			
			$tprice = 0;
			$result = $conn->query("SELECT productID, qty, price FROM basket WHERE username='$user'");
			
			while($row = $results->fetch())
			{
				echo"<p>";
				echo"Product ID:" . $row['productID'] . "<br />";
				echo"Quantity:" . $row['qty'] . "<br />";
				echo"Price:" . $row['price'] . "<br />";
				echo"</p>";
				
				$tprice += $row["price"];
			}
			
			echo"Total Price: $tprice. ";
			echo"<a href='search.html'> Back to the search page </a>";
		?>
		
	</body>
</html>