<?php      
    include('config/config.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($connection, $username);  
        $password = mysqli_real_escape_string($connection, $password);  
      
        $sql = "select * from admin_accounts where username = '$username' and password = '$password'";  
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  

            echo "<h1><center> Login successful </center></h1>";
            header('Location: dashboard/index.php');  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
            // header('Location: index.php');  
        }     
?>  