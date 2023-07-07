<?php


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = ( $_POST['fname']);
    $lname = ( $_POST['lname']);
    $DOB = ( $_POST['DOB']);
    $praddress = ( $_POST['praddress']);
    $pmaddress = ( $_POST['pmaddress']);
    $phone = ( $_POST['phone']);
    $email = ( $_POST['email']);
    $uname = ( $_POST['uname']);
    $ppassword = ( $_POST['ppassword']);
    $confirmpassword = ( $_POST['confirmpassword']);
    
  }
  if(isset($_POST['create'])){
    if(empty($fname) || empty($lname) || empty($DOB) || empty($praddress) || empty($pmaddress) || empty($phone) || empty($email) || empty($uname) || empty($ppassword) || empty($confirmpassword)){
        
        echo "Please provide All Information.<br>";
        
        }
        else{
            header('Location: ../view/casLogin.php');
            
        }
    }  

    
    
    if(isset($_POST['login'])){
        header('Location: ../view/casLogin.php');
        
    }

        
    
    $servername="localhost";
    $username="root";
    $password="";
    $database_name="pharmacy_management_system";


    $conn=mysqli_connect($servername,$username,$password,$database_name);

    if(!$conn){
        die("Connection Failed:" . mysqli_connect_errno() );
       

    }
    if(isset($_POST['create'])){
        
        
        
        $sql = "INSERT INTO new_registration (fname,lname,dob,praddress,pmaddress,phone,email,username,ppassword,confirmPassword) VALUES ('$fname','$lname','$DOB','$praddress','$pmaddress','$phone','$email','$uname','$ppassword','$confirmpassword')";
        $queary = mysqli_query($conn,$sql);

    }
    else{
        echo "Error: " . $sql."".mysqli_error($conn);
    }
    mysqli_close($conn); 

?>