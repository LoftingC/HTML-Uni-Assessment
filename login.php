<?php
session_start();


$username = $_POST["username"];
$password = $_POST["password"];


$conn=new PDO("mysql:host=localhost;dbname=assign089;","assign089","Nadeigup");


$result=$conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
$row=$result->fetch();
if($row==false)
{
	echo "Incorrect username or password.";
	
}
else
{	
	$_SESSION["solentuser"] = $username;
	

	$_SESSION["isadmin"] = $row["admin"];
	
	
	header("Location: index.html");
}
?>