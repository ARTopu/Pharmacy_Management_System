<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pName = ( $_POST['pName']);
  $pID = ( $_POST['pID']);
  $age = ( $_POST['age']);
  $phone = ( $_POST['phone']);
  $date = ( $_POST['date']);
  $address = ( $_POST['address']);
  $mediName = ( $_POST['mediName']);
  $description = ( $_POST['description']);
  
  
}
if(isset($_POST['prAdd'])){
  if(empty($pName) || empty($pID) || empty($age) || empty($phone) || empty($date) || empty($address) || empty($mediName) || empty($description)){
	  
	  echo "Please provide All Information.<br>";
	  
	  }
	  else{
		  header('Location: ../view/prescription.html');
		  
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
  if(isset($_POST['prAdd'])){
	  
	  
	  
	  $sql = "INSERT INTO prescription (pName,pID,age,phone,date,address,mediName) VALUES ('$pName','$pID','$age','$phone','$date','$address','$mediName')";
	  $queary = mysqli_query($conn,$sql);

  }
  else{
	  echo "Error: " . $sql."".mysqli_error($conn);
  }
  mysqli_close($conn); 

?>

<?php

header('Location: ../view/prescription.html');
 
?>


</body>
</html>