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

<body align="center">
<img src="Restaurant.png" width="300" high="200" alt="Restaurant.logo">
<h2>bienvenue à  </h2>
<h1>Nonna`s Garden </h1>

<div class="paragraphdiv">
<fieldset id="menu">
<legend>Place your order:</legend>
<table>
	<tr>
		<td>
<label for="Tables">Choose your table:</label>
<SELECT name = "tables">
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	echo "Database is online!</BR>";

$ergebnis = $mysqli->query(
	"SELECT * FROM tables;");

while($zeile = $ergebnis->fetch_array())
{
	echo "<OPTION VALUE=".$zeile['table_id'].">".$zeile['table_name']." Sit places:".$zeile['table_sitcount']."</OPTION>";
}
$mysqli->close();
?>
</SELECT>
<button type="submit">Confirming the table</button></br>
<form action="saveorder.php" method="post"></br>
</td>

<td>
<SELECT name = "appetizers">
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	echo "Database is online!</BR>";


$ergebnis = $mysqli->query(
	"SELECT * FROM menu where category_id = '1';");

while($zeile = $ergebnis->fetch_array())
{
	echo "<OPTION VALUE=".$zeile['menu_id'].">".$zeile['menu_name']."</OPTION>";
}
$mysqli->close();
?>
</SELECT>
<button type="submit">Add to your cart -></button>
</td>


<td>
<SELECT name = "warmMenu">
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	echo "Database is online!</BR>";


$ergebnis = $mysqli->query(
	"SELECT * FROM menu where category_id = '2';");

while($zeile = $ergebnis->fetch_array())
{
	echo "<OPTION VALUE=".$zeile['menu_id'].">".$zeile['menu_name']."</OPTION>";
}
$mysqli->close();
?>
</SELECT>
<button type="submit">Add to your cart -></button></br>
</td>

<td>
<SELECT name = "sideDishes">
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	echo "Database is online!</BR>";


$ergebnis = $mysqli->query(
	"SELECT * FROM menu where category_id = '3';");

while($zeile = $ergebnis->fetch_array())
{
	echo "<OPTION VALUE=".$zeile['menu_id'].">".$zeile['menu_name']."</OPTION>";
}
$mysqli->close();
?>
</SELECT>
<button type="submit">Add to your cart -></button></br>
</td>

<td>
<SELECT name = "salads">
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	echo "Database is online!</BR>";


$ergebnis = $mysqli->query(
	"SELECT * FROM menu where category_id = '4';");

while($zeile = $ergebnis->fetch_array())
{
	echo "<OPTION VALUE=".$zeile['menu_id'].">".$zeile['menu_name']."</OPTION>";
}
$mysqli->close();
?>
</SELECT>
<button type="submit">Add to your cart -></button></br>
</td>

<td>
<SELECT name = "soups">
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	echo "Database is online!</BR>";


$ergebnis = $mysqli->query(
	"SELECT * FROM menu where category_id = '5';");

while($zeile = $ergebnis->fetch_array())
{
	echo "<OPTION VALUE=".$zeile['menu_id'].">".$zeile['menu_name']."</OPTION>";
}
$mysqli->close();
?>
</SELECT>
<button type="submit">Add to your cart -></button></br>
</td>

<td>
<SELECT name = "desserts">
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	echo "Database is online!</BR>";


$ergebnis = $mysqli->query(
	"SELECT * FROM menu where category_id = '6';");

while($zeile = $ergebnis->fetch_array())
{
	echo "<OPTION VALUE=".$zeile['menu_id'].">".$zeile['menu_name']."</OPTION>";
}
$mysqli->close();
?>
</SELECT>
<button type="submit">Add to your cart -></button>
</td>

<td>
<SELECT name = "drinks">
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	echo "Database is online!</BR>";


$ergebnis = $mysqli->query(
	"SELECT * FROM menu where category_id = '7';");

while($zeile = $ergebnis->fetch_array())
{
	echo "<OPTION VALUE=".$zeile['menu_id'].">".$zeile['menu_name']."</OPTION>";
}
$mysqli->close();
?>
</SELECT>
<button type="submit">Add to your cart -></button>
</td>

<td>
<SELECT name = "specials">
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	echo "Database is online!</BR>";


$ergebnis = $mysqli->query(
	"SELECT * FROM menu where category_id = '8';");

while($zeile = $ergebnis->fetch_array())
{
	echo "<OPTION VALUE=".$zeile['menu_id'].">".$zeile['menu_name']."</OPTION>";
}
$mysqli->close();
?>
</SELECT>
<button type="submit">Add to your cart -></button>
</td>
</tr>
</table>

<!--SPEICHERN VON NEUEN order!-->
</form>
</fieldset>
</div>


<fieldset id="order">
<div class="paragrophdiv">
<legend>Your order:</legend>

<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	
$ergebnis = $mysqli->query(
	"SELECT * FROM order;");

while($zeile = $ergebnis->fetch_array())
{
	echo "<OPTION VALUE=".$zeile['order_id'].">".$zeile['menuorder_id']."</OPTION>";
}
$mysqli->close();
?>

</div>
</fieldset>




<div class="paragraphdiv">
We will satisfy your appetite~  <a href="alacarte.php">A la carte! </a><br />
Back to<a href="index.php"> Homepage~ </a><br />
</div>
</BODY>
<div class="footerdiv">
VISIT US -> </br>
LOS ANGELES</br>
5150 Hollywood Blvd,</br>
Los Angeles, CA 90027</br>
(323) 668-2000
</div>
</HTML>
