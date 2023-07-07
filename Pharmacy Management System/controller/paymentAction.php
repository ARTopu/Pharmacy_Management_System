<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cname = ( $_POST['cname']);
    $cID = ( $_POST['cID']);
    $amountToPay = ( $_POST['amountToPay']);
   
    
  }
  if(isset($_POST['pay'])){
    if(empty($cname) || empty($cID) || empty($amountToPay)){
        
        echo "Please provide All Information.<br>";
        
        }
        else{
            header('Location: ../view/payment.html');
            
        }
    }  
    
    $servername="localhost";
    $username="root";
    $password="";
    $database_name="pharmacy_management_system";
  
  
    $conn=mysqli_connect($servername,$username,$password,$database_name);
  
    if(!$conn){
        die("Connection Failed:" . mysqli_connect_errno() );
       
  
    }
    if(isset($_POST['pay'])){
        
        
        
        $sql = "INSERT INTO payment (cname,cID,amountToPay) VALUES ('$cname','$cID','$amountToPay')";
        $queary = mysqli_query($conn,$sql);
  
    }
    else{
        echo "Error: " . $sql."".mysqli_error($conn);
    }
    mysqli_close($conn); 
  
  ?>
  
  <?php
  
  header('Location: ../view/payment.html');
   
  ?>



?>