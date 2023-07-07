<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="../view/js/registration.js"></script>
      <link rel="stylesheet" href= "main.css">
      <title>Cashier Registration</title>
   </head>
   <body>
      <section class="card card-2">
         <div class="card-wrap">
            <div class="card-content">
               <h1><u>Registration</u></h1>
               <form action="../controller/caRegAction.php" method="POST" novalidate onsubmit="return isValid(this);">
                  <fieldset>
                     <legend> Basic Information :</legend>
                     <br>
                     <label for="fname"> First Name :  </label>
                     <br>
                     <input type="text" id="fname" name="fname" value="">
                     <br><br>
                     <label for="lname"> Last Name :  </label>
                     <br>
                     <input type="text" id="lname" name="lname" value="">
                     <br><br>
                     <label for="DOB"> Date Of Birth :  </label>
                     <br>
                     <input type="date"  name="DOB">
                     <br><br> 
                  </fieldset>
                  <br>
                  <fieldset>
                     <legend> Contact Information : </legend>
                     <br>
                     <label for="praddress"> Present Address : </label>
                     <br>
                     <textarea id="praddress" name="praddress" >
            </textarea>
                     <br><br> 
                     <label for="pmaddress"> Permanent Address : </label>
                     <br>
                     <textarea id="pmaddress" name="pmaddress" >
            </textarea>
                     <br>
                     <label for="phone"> Phone : </label><br>
                     <input type="tel" id="phone" name="phone" value="">
                     <br><br>
                     <label for="email"> Email :  </label><br>
                     <input type="email" id="email" name="email" value="">
                     <br><br>
                  </fieldset>
                  <br>
                  <fieldset>
                     <legend> Credentials : </legend>
                     <br>
                     <label for="uname"> Username :  </label>
                     <br>
                     <input type="text" id="uname" name="uname" >
                     </input>
                     <br><br> 
                     <label for="ppassword"> Password :  </label>
                     <br>
                     <input type="password" id="ppassword" name="ppassword" >
                     </input>
                     <br><br> 
                     <label for="confirmpassword"> Confirm Password :  </label>
                     <br>
                     <input type="password" id="confirmpassword" name="confirmpassword" >
                     </input>
                     <br>
                  </fieldset>
                  <br>
                  <input class="button" type="submit" name="create" value="Create">
               </form>
               <h3>OR</h3>
               <form action="../view/casLogin.php" method="POST"><input class="button" type="submit" name="login" value="Login"></form>
            </div>
        </div>
      </section>
   </body>
</html>