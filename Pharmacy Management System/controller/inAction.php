<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $billTo = ( $_POST['billTo']);
    $phone = ( $_POST['phone']);
    $address = ( $_POST['address']);
    $date= ( $_POST['date']);
    $mediName = ( $_POST['mediName']);
    $quantity = ( $_POST['quantity']);
    $unitePrice = ( $_POST['unitePrice']);
    $totalAmount = ( $_POST['totalAmount']);
       
  }

  if(isset($_POST['add'])){
    if(empty($mediName) || empty($quantity) || empty($unitePrice) || empty($totalAmount)){
        
        echo "Please provide All Information.<br>";
        
        }
        else{
          $servername="localhost";
          $username="root";
          $password="";
          $database_name="pharmacy_management_system";
      
      
          $conn=mysqli_connect($servername,$username,$password,$database_name);
      
          if(!$conn){
              die("Connection Failed:" . mysqli_connect_errno() );
             
      
          }
          $sql = "INSERT INTO invoice (billTo,phone,address,date,mediName,quantity,unitePrice,totalAmount) VALUES ('$billTo','$phone','$address','$date','$mediName','$quantity','$unitePrice','$totalAmount')";
        $queary = mysqli_query($conn,$sql);

        }
    } 
    
    
?>




<?php

   header('Location: ../view/invoice.html');
    
?>