<?php
include("db/connection.php");
$dbdata = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['email']) && isset($_POST['pass'])){
        $stmt = $conn->prepare("SELECT * FROM user WHERE email=?  and pass=?");
        $stmt->bind_param("ss",$_POST['email'], $_POST['pass']);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows ===0) {
            $dbdata["status"]=404;
            $dbdata["msg"]="invalid username and password";
        }
        else{
            $dbdata["status"]=200;
            $dbdata["msg"]="sucessfully Login";
            $dbdata["data"]=$result->fetch_all(MYSQLI_ASSOC);
        }
    }
    else{
        $dbdata["status"]=404;
        $dbdata["msg"]="mising parameter";
    }
}
else{
    $dbdata["status"]=404;
    $dbdata["msg"]="some method are required";
}
echo json_encode($dbdata);
?>