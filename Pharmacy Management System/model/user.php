<?php 
    function credentials($uname, $ppassword) {
      
      $servername="localhost";
      $username="root";
      $password="";
      $database_name="pharmacy_management_system";
    
    
      $conn=mysqli_connect($servername,$username,$password,$database_name);
    
      if(!$conn){
          die("Connection Failed:" . mysqli_connect_errno() );
    
      }
      $stmt = mysqli_stmt_init($conn);
      mysqli_stmt_prepare($stmt, "SELECT username, ppassword FROM new_registration WHERE username = ? AND ppassword = ?");
      mysqli_stmt_bind_param($stmt, "ss", $uname, $ppassword);
      mysqli_stmt_execute($stmt);
    
      $result = mysqli_stmt_get_result($stmt);
    
      return $result->num_rows === 1;
      $isValidate = true;
    }
    
    ?>
    