<?php
	session_start();
?>
<html>
	<head>
		<title> Solent E-Stores </title>
	</head>
	
	<body>
		<?php
			$conn=new PDO("mysql:host=localhost;dbname=assign089;","assign089","Nadeigup");
			if(!isset($_SESSION["solentuser"]))
			{
				echo "Please login to continue.";
				echo "<a href="login.html"></>";
			}
			else
			{
				$id=$_GET["productID"];
				$quan=$_GET["quantity"];
				$stock= $conn->query("SELECT stocklevel FROM products WHERE $id='ID'");
				
				if($stock-$quan=>0)
				{
					
					$user=$_SESSION["solentuser"];
					
					$conn->query("INSERT INTO basket(productID, username, qty) VALUES ('$id', '$user', '$quan')");
					
					echo"<p>"
					echo"That product has been added to your shopping basket";
					echo"<a href='search.html'> Back to the search page </a>";
					echo"</p>";
				}
				else
				{
					echo"Sorry this item is out of stock";
					echo"<a href='search.html'> Want to go back to the search page? </a>";
				}
			}
		?>
	</body>
</html>