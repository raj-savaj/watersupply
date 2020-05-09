<?php
$Sname="localhost";
$Uname="root";
$Pass="";
$Db="watersupply";
$conn=new mysqli($Sname,$Uname,$Pass,$Db);
if($conn->connect_error){
	die("coonection faild : ");
}
?>