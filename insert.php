<?php
include "connection.php";
$data="";


if($_SERVER['REQUEST_METHOD']=='POST')
{
    $cbottle      = $_POST['a_cbottle'];
    $hbottle       = $_POST['a_hbottle'];
    $amount       = $_POST['a_amount'];

   

        
            $insert="insert into addbottle values(null,'$cbottle','$hbottle','$amount')";
            $res = mysqli_query($conn,$insert);
        
            if($row=mysqli_affected_rows($conn)==1){

            echo "successful";

            }
        
        else{
             echo "Error";
             
        }
    }



else{
    echo "Please Send Through Post Request";
    exit();
}
?>
