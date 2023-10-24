<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@200&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="stylesheet.css">
<meta charset="utf-8" />
<title>Your yummmy paradise next door! </title>
</head>

<img src="Restaurant.png" aling="right" width="300" high="200" alt="Restaurant.logo">
<body align="center">
<h1>Nonna’s Garden </h1>

<div class ="paragraphdiv"
Here is a list of our daily housemade 
</div>
<div class="menudiv">
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	
	$ergebnis = $mysqli->query("SELECT * from menu where category_id = '1' order by category_id;");
?>
<h3> Apperetiv</h3>
<?php
echo "<table border='1'>
<table align='center'>
<tr>
<th>Menu №</th>
<th>Meal</th>
<th>Price</th>
</tr>"; 

	while($zeile = $ergebnis->fetch_array())
{
	echo "<tr>";
	echo "<td>" .$zeile['menu_id']. "</td>";
	echo "<td>" .$zeile['menu_name']. "</td>";
	echo "<td>" .$zeile['menu_price']. "</td>";
	echo "</tr>";
}
	$mysqli->close();	
?>
</table>
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	
	$ergebnis = $mysqli->query("SELECT * from menu where category_id = '2' order by category_id;");
?>
<h3> Warm Menu</h3>
<?php
echo "<table border='1'>
<table align='center'>
<tr>
<th>Menu №</th>
<th>Meal</th>
<th>Price</th>
</tr>"; 

	while($zeile = $ergebnis->fetch_array())
{
	echo "<tr>";
	echo "<td>" .$zeile['menu_id']. "</td>";
	echo "<td>" .$zeile['menu_name']. "</td>";
	echo "<td>" .$zeile['menu_price']. "</td>";
	echo "</tr>";
}
	$mysqli->close();	
?>
</table>
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	
	$ergebnis = $mysqli->query("SELECT * from menu where category_id = '3' order by category_id;");
?>
<h3> Side Dishes</h3>
<?php
echo "<table border='1'>
<table align='center'>
<tr>
<th>Menu №</th>
<th>Meal</th>
<th>Price</th>
</tr>"; 

	while($zeile = $ergebnis->fetch_array())
{
	echo "<tr>";
	echo "<td>" .$zeile['menu_id']. "</td>";
	echo "<td>" .$zeile['menu_name']. "</td>";
	echo "<td>" .$zeile['menu_price']. "</td>";
	echo "</tr>";
}
	$mysqli->close();	
?>
</table>
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	
	$ergebnis = $mysqli->query("SELECT * from menu where category_id = '4' order by category_id;");
?>
<h3> Salads</h3>
<?php
echo "<table border='1'>
<table align='center'>
<tr>
<th>Menu №</th>
<th>Meal</th>
<th>Price</th>
</tr>"; 

	while($zeile = $ergebnis->fetch_array())
{
	echo "<tr>";
	echo "<td>" .$zeile['menu_id']. "</td>";
	echo "<td>" .$zeile['menu_name']. "</td>";
	echo "<td>" .$zeile['menu_price']. "</td>";
	echo "</tr>";
}
	$mysqli->close();	
?>
</table>
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	
	$ergebnis = $mysqli->query("SELECT * from menu where category_id = '5' order by category_id;");
?>
<h3> Soups</h3>
<?php
echo "<table border='1'>
<table align='center'>
<tr>
<th>Menu №</th>
<th>Meal</th>
<th>Price</th>
</tr>"; 

	while($zeile = $ergebnis->fetch_array())
{
	echo "<tr>";
	echo "<td>" .$zeile['menu_id']. "</td>";
	echo "<td>" .$zeile['menu_name']. "</td>";
	echo "<td>" .$zeile['menu_price']. "</td>";
	echo "</tr>";
}
	$mysqli->close();	
?>
</table>
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	
	$ergebnis = $mysqli->query("SELECT * from menu where category_id = '6' order by category_id;");
?>
<h3> Desserts</h3>
<?php
echo "<table border='1'>
<table align='center'>
<tr>
<th>Menu №</th>
<th>Meal</th>
<th>Price</th>
</tr>"; 

	while($zeile = $ergebnis->fetch_array())
{
	echo "<tr>";
	echo "<td>" .$zeile['menu_id']. "</td>";
	echo "<td>" .$zeile['menu_name']. "</td>";
	echo "<td>" .$zeile['menu_price']. "</td>";
	echo "</tr>";
}
	$mysqli->close();	
?>
</table>
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	
	$ergebnis = $mysqli->query("SELECT * from menu where category_id = '7' order by category_id;");
?>
<h3> Drinks</h3>
<?php
echo "<table border='1'>
<table align='center'>
<tr>
<th>Menu №</th>
<th>Meal</th>
<th>Price</th>
</tr>"; 

	while($zeile = $ergebnis->fetch_array())
{
	echo "<tr>";
	echo "<td>" .$zeile['menu_id']. "</td>";
	echo "<td>" .$zeile['menu_name']. "</td>";
	echo "<td>" .$zeile['menu_price']. "</td>";
	echo "</tr>";
}
	$mysqli->close();	
?>
</table>
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	
	$ergebnis = $mysqli->query("SELECT * from menu where category_id = '8' order by category_id;");
?>
<h3> Specials</h3>
<?php
echo "<table border='1'>
<table align='center'>
<tr>
<th>Menu №</th>
<th>Meal</th>
<th>Price</th>
</tr>"; 

	while($zeile = $ergebnis->fetch_array())
{
	echo "<tr>";
	echo "<td>" .$zeile['menu_id']. "</td>";
	echo "<td>" .$zeile['menu_name']. "</td>";
	echo "<td>" .$zeile['menu_price']. "</td>";
	echo "</tr>";
}
	$mysqli->close();	
?>
</table>
</div>
</BODY>

<p>Back to<a href="index.php"> Homepage~ </a><br /></p>
<p>Feel free to order by yourself~  <a href="getorder.php">Let us bring u the food! </a><br /></p>
<div class="footerdiv">
VISIT US -> </br>
LOS ANGELES</br>
5150 Hollywood Blvd,</br>
Los Angeles, CA 90027</br>
(323) 668-2000
</div>
</HTML>
