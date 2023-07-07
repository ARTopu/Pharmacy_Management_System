<?php
session_start();
if(!isset($_SESSION["username"])){
    header("Location: ../view/caLogin.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Cashier Dashboard</title>
</head>
<body>
    <section class="card">
        <div class="card-wrap">
            <div class="card-content">
    <h2>Cashier Dashboard</h2>
    <?php
        if(isset($_COOKIE['uname'])) {
            echo "Welcome ";
            echo $_COOKIE['uname'];
            echo "(COOKIE)";
        }
        else{
            echo "Welcome Guest (Cookie)";
        }

    ?>
    <br><br>
    <?php
        if(isset($_SESSION['username'])) {
            echo "Welcome ";
            echo $_SESSION['username'];
            echo "(SESSION)";
        }
        else{
            echo "Welcome Guest (Session)";
        }

    ?>
    <div class="center">
<form action="../view/livesearch.html"><input style="width:180px; height:100 px;" type="submit" value="Search"></form>
</div> <br>
       <br> <a href="profile.php">Update Profile</a>
<br><br>
    <form action="../controller/caDaAction.php" method="post"><input class="button" type="submit" name="invoice" value="Invoice"></form><br><br>

    <form action="../controller/caDaAction.php" method="post"><input class="button"  type="submit" name="prescription" value="Prescription"></form><br><br>

   <form action="../controller/caDaAction.php" method="post"><input class="button"  type="submit" name="inventory" value="Inventory"></form><br><br>

    <form action="../controller/caDaAction.php" method="post"><input class="button"  type="submit" name="sales" value="Sales"></form><br><br>

   <!-- <form action="../controller/caDaAction.php" method="post"><input class="button"  type="submit" name="statistics" value="Statistics"></form><br><br> -->

    <form action="../controller/caDaAction.php" method="post"><input class="button"  type="submit" name="payment" value="Payment"></form><br><br>
    <br>
    
        <br> <br>
    <a href="casLogin.php"><input class="button"  type="submit" name="back"  value="Back" ></a>
    <br><br>
   
    </form><br>
    <form action="../view/logout.php" method="POST"><input class="button"  type="submit" name="logout" value="Logout"></form>
    </div>
</div>
</section>

</body>
</html>