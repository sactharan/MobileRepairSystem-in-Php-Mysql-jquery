<?php
  include('../config/config.php');
  
  if(isset($_POST['service_btn']))
{
    $service_name = $_POST['service_name'];
    $amount = $_POST['amount'];
    $status = $_POST['status'];
    {
        $query = "INSERT INTO service (service_name,amount,status) VALUES ('$service_name','$amount','$status')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            //echo "saved";
            $_SESSION['success'] = "Service  Added";
            header('Location: servicelist.php');
    
        }else{
            $_SESSION['status'] = "Service  Not Added";
            header('Location: servicelist.php');
        }
    }   
}

if(isset($_POST['service_edit_btn']))
{
    $id = $_POST['edit_id'];
    $service_name = $_POST['service_name'];
    $amount = $_POST['amount'];
    $status = $_POST['status'];

    $query = "UPDATE service SET service_name='$service_name',amount='$amount',status='$status' WHERE id = '$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Service  Updated";
        header('Location: servicelist.php');
    }else
    {
        $_SESSION['status'] = "Service Not Updated";
        header('Location: servicelist.php');
    }
    
}

if(isset($_POST['delete_btn']))
{
  $id = $_POST['delete_id'];
  $query = "DELETE FROM service WHERE id = '$id' ";
  $query_run = mysqli_query($connection, $query);

  if($query_run)
    {
        $_SESSION['success'] = "Service  Deleted";
        header('Location: servicelist.php');
    }else
    {
        $_SESSION['status'] = "Service  Not Deleted";
        header('Location: servicelist.php');
    }
}

