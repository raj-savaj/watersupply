<?php

include("connection.php");
$dbdata = array();
if($_SERVER['REQUEST_METHOD']=='POST'){

    $sql="SELECT * FROM customer where c_name='".$_POST['c_name']."'";
    $check=mysqli_query($conn,$sql);
    if(mysqli_num_rows($check)>0){
        while ($data=mysqli_fetch_array($check)) {
            $dbdata["name"]=$data["c_name"];
            $dbdata["address"]=$data["c_add"];
            $dbdata["mno"]=$data["c_phone"];
            $dbdata["c_cbottle"]=$data["c_cbottle"];
            $dbdata["c_hbottle"]=$data["c_hbottle"];
            $dbdata["c_pcbottle"]=$data["c_pcbottle"];
            $dbdata["c_phbottle"]=$data["c_phbottle"];
            $dbdata["c_credit"]=$data["c_credit"];
            $dbdata["c_debit"]=$data["c_debit"];
            $dbdata["c_total"]=$data["c_total"];
            
        }
    }
    else{
        $dbdata["status"]=500;
        $dbdata["msg"]="Invalid Username And Password";
    }           

}
else{
    $dbdata["status"]=404;
    $dbdata["msg"]="some method are required";
}

echo json_encode($dbdata);
?>