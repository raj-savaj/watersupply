<?php
include "db/connection.php";
$dbdata = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (validation()) {
		$stmt = $conn->prepare("SELECT * FROM customer WHERE phone=?");
		$stmt->bind_param("s", $_POST['phone']);
		$stmt->execute();
		$result = $stmt->get_result();
		if ($result->num_rows === 0) {
			$insert = "INSERT INTO customer (name,address, phone, cBottle, hBottle, cBottlePrice, hBottlePrice, cBottleRet, hBottleRet, credit, debit, total) VALUES ('$_POST[name]','$_POST[add]', '$_POST[phone]', $_POST[cBottle], $_POST[hBottle],$_POST[cBottlePr],$_POST[hBottlePr], $_POST[cBottleRt], $_POST[hBottleRt],  $_POST[credit], $_POST[debit],$_POST[total])";
			if ($conn->query($insert) == true) {
				$dbdata["status"] = 200;
				$dbdata["msg"] = "customer Add successfully";
			}
		} else {
			$dbdata["status"] = 401;
			$dbdata["msg"] = "customer already exsist";
			$dbdata["data"] = $result->fetch_all(MYSQLI_ASSOC);
		}
	} else {
		$dbdata["status"] = 404;
		$dbdata["msg"] = "mising parameter";
	}

} else {
	$dbdata["status"] = 404;
	$dbdata["msg"] = "some method are required";
}

echo json_encode($dbdata);

function validation() {
	if (!isset($_POST['name'])) {
		return false;
	}
	if (!isset($_POST['add'])) {
		return false;
	}
	if (!isset($_POST['phone'])) {
		return false;
	}
	if (!isset($_POST['cBottle'])) {
		return false;
	}
	if (!isset($_POST['hBottle'])) {
		return false;
	}
	if (!isset($_POST['cBottlePr'])) {
		return false;
	}
	if (!isset($_POST['hBottlePr'])) {
		return false;
	}
	if (!isset($_POST['cBottleRt'])) {
		return false;
	}
	if (!isset($_POST['hBottleRt'])) {
		return false;
	}
	if (!isset($_POST['credit'])) {
		return false;
	}
	if (!isset($_POST['debit'])) {
		return false;
	}
	if (!isset($_POST['total'])) {
		return false;
	}
	return true;
}

?>
