<?php

$mysqli = new mysqli("localhost", "root", "", "yad_db");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT name, price
FROM list_pack WHERE name = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($name, $price);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<td>" . $name . "</td>";
echo "<th>Price</th>";
echo "<td>" . $price . "</td>";
echo "</tr>";
echo "</table>";
?>



