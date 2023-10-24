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
<h1>Nonna’s Garden </h1>
</br>
</br>
</br>
<div class="menudiv">
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}
	echo "Here is a list of our daily housemade~</BR>";
	
	$ergebnis = $mysqli->query("SELECT * from menu where category_id = '8';");
	
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

</br>
</br>
</br>
<div class="paragraphdiv">
We will satisfy your appetite~  <a href="alacarte.php">A la carte! </a><br />
<p>Feel free to order by yourself~  <a href="getorder.php">Let us bring u the food! </a><br /></p>
</div>

<div class="footerdiv">
VISIT US -> </br>
LOS ANGELES</br>
5150 Hollywood Blvd,</br>
Los Angeles, CA 90027</br>
(323) 668-2000
</div>
</body>
</HTML>
