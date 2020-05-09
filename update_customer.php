<?php
include "connection.php";
$data="";


if($_SERVER['REQUEST_METHOD']=='POST')
{
    $name      = $_POST['c_name'];
    $add       = $_POST['c_add'];
    $phone     = $_POST['c_phone'];
    $cbottle   = $_POST['c_cbottle'];
    $hbottle   = $_POST['c_hbottle'];
    $pcbottle  = $_POST['c_pcbottle'];
    $phbottle  = $_POST['c_phbottle'];
    $credit    = $_POST['c_credit'];
    $debit     = $_POST['c_debit'];
    $total     = $_POST['c_total'];
    $status    =$_POST['c_status'];


   

        
            $insert="upate customer set c_name='$name',c_add='$add',c_phone='$phone',c_cbottle='$cbottle',
            c_hbottle='$hbottle',c_pcbottle='$pcbottle',c_pcbottle='$phbottle',c_credit='$credit',c_debit='$debit',c_total='$total',c_status='$status' where c_name='".$_POST['c_name']."'";
            $res = mysqli_query($conn,$insert);
        
            if($res){

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
