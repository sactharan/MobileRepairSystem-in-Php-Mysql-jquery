<?php
  include('../config/config.php');
  
  if(isset($_POST['product_btn']))
{
    $p_name = $_POST['p_name'];
    $unit_price = $_POST['unit_price'];
    $qty = $_POST['qty'];
    $manufacturer = $_POST['manufacturer'];
    $p_type = $_POST['p_type'];
    $status = $_POST['status'];
    {
        $query = "INSERT INTO products (p_name,unit_price,qty,manufacturer,p_type,status) VALUES ('$p_name','$unit_price','$qty','$manufacturer','$p_type','$status')";
        $query_run = mysqli_query($connection, $query);
    
        if($query_run)
        {
            //echo "saved";
            $_SESSION['success'] = "Product  Added";
            header('Location: productlist.php');
    
        }else{
            $_SESSION['status'] = "Product  Not Added";
            header('Location: productlist.php');
        }
    }   
}

if(isset($_POST['product_edit_btn']))
{
    $id = $_POST['edit_id'];
    $p_name = $_POST['p_name'];
    $unit_price = $_POST['unit_price'];
    $qty = $_POST['qty'];
    $manufacturer = $_POST['manufacturer'];
    $p_type = $_POST['p_type'];
    $status = $_POST['status'];

    $query = "UPDATE products SET p_name='$p_name',unit_price='$unit_price',qty='$qty',manufacturer='$manufacturer',p_type='$p_type',status='$status' WHERE id = '$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Product  Updated";
        header('Location: productlist.php');
    }else
    {
        $_SESSION['status'] = "Product Not Updated";
        header('Location: productlist.php');
    }
    
}

if(isset($_POST['delete_btn']))
{
  $id = $_POST['delete_id'];
  $query = "DELETE FROM products WHERE id = '$id' ";
  $query_run = mysqli_query($connection, $query);

  if($query_run)
    {
        $_SESSION['success'] = "Product  Deleted";
        header('Location: productlist.php');
    }else
    {
        $_SESSION['status'] = "Product  Not Deleted";
        header('Location: productlist.php');
    }
}

