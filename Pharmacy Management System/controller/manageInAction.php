<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Sales</title>
</head>
<body>
<section class="card">
    <div class="card-wrap">
        <div class="card-content">


    <?php
       

   
               $servername="localhost";
               $username="root";
               $password="";
               $database_name="pharmacy_management_system";
           
           
               $conn=mysqli_connect($servername,$username,$password,$database_name);
           
               if(!$conn){
                   die("Connection Failed:" . mysqli_connect_errno() );
                  
           
               }
               $sql = "SELECT mediName,quantity,unitePrice,totalAmount FROM invoice";
             $queary = mysqli_query($conn,$sql);
             if(mysqli_num_rows($queary)>0){
                while($row = mysqli_fetch_assoc($queary)){
                    echo "<table border= 1px solid black>";
                    echo "<tr>";
                    echo "<th>Medicin Name</th>";
                    echo "<th>Quantity</th>";
                    echo "<th>Unite Price</th>";
                    echo "<th>Ammount</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>";
                    echo $row["mediName"] . "</td><td> " . $row["quantity"] . "</td><td> " . $row["unitePrice"] . " </td><td>" . $row["totalAmount"] ; 
                    echo "<td><form action='../controller/profileAction.php'>
                     <input class='button' type='submit' name='update' value='Update'>
                     <input class='button' type='submit' name='delete' value='Delete'>
                     </form>
                    </td>";
                    echo "</td>";
                    echo "</tr>";
                    echo "<br><br>";
                    echo "</table>";
                    echo "<br><br>";
                }
             }
             else{
                echo "No record";
             }
         
     ?>
<br>
    <a href="../view/caDa.php"><input class="button" type="submit" name="back"  value="Back" ></a>
    </div>
    </div>
    </section>

</body>
</html>



