<?php
require '../model/user.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uname = ($_POST["uname"]);
  $ppassword = ($_POST["ppassword"]);
}

$isValidate = true;
if ($uname == "") {
  echo "Username is required <br>";
  $isValidate = false;
}
if ($ppassword == "") {
  echo "Password is required <br>";
  $isValidate = false;
}
if ($isValidate ) {

  $isLogin = false;
  
  if(isset($_POST['login'])){
    

    
    if ($isValidate === true) {

			$isValidate = false;

			if (credentials($uname, $ppassword)) {
				$isValidate = true;
        $isLogin = true;
        if(isset($_POST['remember'])){
        setcookie('uname',$uname,time() + 60*5);
        setcookie('ppassword',$ppassword,time() + 60*5);
        }
        else{
          setcookie('uname',"",time() - 60*5);
        setcookie('ppassword',"",time() - 60*5);
        }
      session_start();
      $_SESSION['username']= $uname;
      header("location: ../view/caDa.php");
    }
			}
			
    }
  }


  if (!$isLogin) {
    echo "Username or Password is incorrect";
  } 
  ?>
  
