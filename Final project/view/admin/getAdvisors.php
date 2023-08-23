<?php

$mysqli = new mysqli("localhost", "root", "", "yad_db");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT name, surname, username, password
FROM advisor WHERE name = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($name, $surname, $username, $password);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<td>" . $name . "</td>";
echo "<th>Surname</th>";
echo "<td>" . $surname . "</td>";
echo "<th>Username</th>";
echo "<td>" . $username . "</td>";
echo "<th>Password</th>";
echo "<td>" . $password . "</td>";
echo "</tr>";
echo "</table>";
?>



