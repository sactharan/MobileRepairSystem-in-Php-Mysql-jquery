<?php
include('../config/config.php');
session_start();

if (isset($_POST['repair_btn'])) {
    $c_name = $_POST['c_name'];
    $c_address = $_POST['c_address'];
    $c_phone = $_POST['c_phone'];
    $mobile_model = $_POST['mobile_model'];
    $imei = $_POST['imei'];
    $accessories = $_POST['accessories'];
    $issue = $_POST['issue'];
    $service = $_POST['service'];
    $service_amount = $_POST['service_amount'];
    $parts = $_POST['parts'];
    $parts_amount = $_POST['parts_amount'];
    $payment = $_POST['payment'];
    $status = $_POST['status'];
    $amt_paid = $_POST['amt_paid'];

    $total_cost =  $service_amount + $parts_amount;
    $payable_amount = $total_cost -  $amt_paid;
     {
        $query = "INSERT INTO repairs (c_name, c_address, c_phone, mobile_model, imei,accessories, issue, service, service_amount, parts, parts_amount, payment,status, amt_paid, total_cost, payable_amount, date) VALUES ('$c_name','$c_address','$c_phone','$mobile_model','$imei','$accessories','$issue','$service','$service_amount','$parts','$parts_amount','$payment','$status','$amt_paid','$total_cost','$payable_amount',NOW())";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            //echo "saved";
            $_SESSION['success'] = "Repair  Added";
            header('Location: repairlist.php');
        } else {
            $_SESSION['status'] = "Repair  Not Added";
            header('Location: repairlist.php');
        }
    }
}


if(isset($_POST['repair_edit_btn']))
{
    $id = $_POST['edit_id'];
    $c_name = $_POST['c_name'];
    $c_address = $_POST['c_address'];
    $c_phone = $_POST['c_phone'];
    $mobile_model = $_POST['mobile_model'];
    $imei = $_POST['imei'];
    $accessories = $_POST['accessories'];
    $issue = $_POST['issue'];
    $service = $_POST['service'];
    $service_amount = $_POST['service_amount'];
    $parts = $_POST['parts'];
    $parts_amount = $_POST['parts_amount'];
    $payment = $_POST['payment'];
    $status = $_POST['status'];
    $amt_paid = $_POST['amt_paid'];
    $payable_amount = $_POST['payable_amount'];
    $new_amt_paid= $_POST['new_amt_paid'];
  
    $tot_amt_paid =  $amt_paid + $new_amt_paid;
    $new_payable_amount = $payable_amount - $new_amt_paid;

    $query = "UPDATE repairs SET c_name='$c_name',c_address='$c_address',c_phone='$c_phone',mobile_model='$mobile_model',imei='$imei',accessories='$accessories',issue='$issue',service='$service',service_amount='$service_amount',parts='$parts',parts_amount='$parts_amount',payment='$payment',status='$status',amt_paid='$tot_amt_paid',payable_amount='$new_payable_amount',update_date='now()' WHERE id = '$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        //echo "saved";
         $_SESSION['success'] = "Repair  Updated";
        header('Location: repairlist.php');
    } else {
        //echo "not saved";
         $_SESSION['status'] = "Repair  Not Updated";
        header('Location: repairlist.php');
    }
    
}


if(isset($_POST['delete_btn']))
{
  $id = $_POST['delete_id'];
  $query = "DELETE FROM repairs WHERE id = '$id' ";
  $query_run = mysqli_query($connection, $query);

  if($query_run)
    {
        $_SESSION['success'] = "Repair  Deleted";
        header('Location: repairlist.php');
    }else
    {
        $_SESSION['status'] = "Repair  Not Deleted";
        header('Location: repairlist.php');
    }
}
