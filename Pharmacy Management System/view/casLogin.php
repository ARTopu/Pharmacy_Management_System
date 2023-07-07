<?php
   session_start();
   if(isset($_COOKIE['uname']) && isset($_COOKIE['ppassword'])){
      $uname=$_COOKIE['uname'];
      $ppassword=$_COOKIE['ppassword'];
   }
   else{
      $uname="";
      $ppassword="";
   }
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="../view/js/login.js"></script>
      <link rel="stylesheet" href= "main.css">
      <title>Cashier Login</title>
   </head>
   <body>
      <section class="card">
         <div class="card-wrap">
            <div class="card-content">
               <h1><u>Login</u></h1>
               <form action="../view/caLogin.php" method="POST" novalidate onsubmit="return isValid(this);">
               <form action="../view/profileAction.php" method="POST" novalidate>
                  <label for="cashierName">Name:</label>
                  <input type="text" name="uname" value="<?php echo $uname ?>"><br><br>
                  <label for="cashierPassword">Password:</label>
                  <input type="password" name="ppassword" value="<?php echo $ppassword ?>"><br><br>
                  <input type="checkbox" name="remember" >
                  <label for="remember">Remember Me</label><br><br>
                  <input class="button" type="submit" name="login" value="Login">
                  </form>
               </form>
               <br>
               <a href="caRegistration.php"><input class="button" type="submit" name="back"  value="Back" ></a>
            </div>
         </div>
      </section>
   </body>
</html>