<?php

include "db/connection.php";
$dbdata = array();

$result = $conn->query("SELECT * FROM `customer`");
while ($row = $result->fetch_assoc()) {
	$dbdata[] = $row;
}
echo json_encode($dbdata);
?>

