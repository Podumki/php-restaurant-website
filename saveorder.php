
<?php
$mysqli = new mysqli("localhost", "root", "", "restaurant");
if( $mysqli->connect_error)
{
	echo "DB connection false";
	exit;
}

$stmt = $mysqli->prepare("INSERT INTO orders (table_id, menuorders_id, menu_count, table_id) VALUES (?,?,?,?,?,?,?,?);");
$stmt->bind_param("iiiiiiii", $_GET['appetizers'], $_GET['warmMenu'], $_GET['sideDishes'], $_GET['salads'], $_GET['soups'], $_GET['desserts'], $_GET['drinks'], $_GET['specials'], );
$stmt->execute();
$mysqli->close();

header("Location:thankyou.php");
?>