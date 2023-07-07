<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "main.css">
    <script src="../js/search.js"></script>
    <title>Profile</title>
</head>
<body>
<section class="card">
    <div class="card-wrap">
        <div class="card-content">


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uname = ($_POST["uname"]);
        $ppassword = ($_POST["ppassword"]);
      }
               $servername="localhost";
               $username="root";
               $password="";
               $database_name="pharmacy_management_system";
           
           
               $conn=mysqli_connect($servername,$username,$password,$database_name);
           
               if(!$conn){
                   die("Connection Failed:" . mysqli_connect_errno() );
                  
           
               }

               
               $sql = "SELECT fname,lname,phone,email,username,ppassword FROM new_registration";
             $queary = mysqli_query($conn,$sql);
             if(mysqli_num_rows($queary)>0){
                while($row = mysqli_fetch_assoc($queary)){
                    echo "<table border= 1px solid black>";
                    echo "<tr>";
                    echo "<th>First Name</th>";
                    echo "<th>Last Name</th>";
                    echo "<th>Phone</th>";
                    echo "<th>Email</th>";
                    echo "<th>Username</th>";
                    echo "<th>Password</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>";
                    echo $row["fname"] . "</td><td>" . $row["lname"] . "</td><td> " . $row["phone"] . "</td><td> " . $row["email"] . "</td><td> " . $row["username"] . " </td><td>" . $row["ppassword"] ;
                    echo "<td><form action='../controller/profileAction.php'>
                     <input class='button' type='submit' name='update' value='Update'>
                     <input class='button' type='submit' name='delete' value='Delete'>
                     </form>
                    </td>";
                    echo "</td>";
                    echo "</tr>";
                    echo "<br><br>";
                    echo "</table>";
                }
             }
             else{
                echo "No record";
             }
         
     ?>
    
	
     
<br><br>
    
    <a href="caDa.php"><input class="button" type="submit" name="back" value="Back"></a>
    </div>
    </div>
    </section>
</body>
</html>