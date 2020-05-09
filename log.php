<?php

include("connection.php");
$p= array();
$sql="select * from registration";

$b= mysqli_query($con,$sql);

while ($row=mysqli_fetch_array($b)) {

	
		$x= ['r_id'=>$row[0],
		'r_name'=>$row[1],
		'r_email'=>$row[3],
		'r_pwd'=>$row[2]
	];
	
	

	array_push($p, $x);
}

echo json_encode($p);
?>