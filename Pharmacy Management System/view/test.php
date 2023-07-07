<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {

$uname = sanitize($_POST['uname']);
$ppassword = sanitize($_POST['ppassword']);
$isValid = true;
if (empty($uname)) {
    $_SESSION['uname_msg'] = "Email cannot be empty";
    $isValid = false;
}
if (empty($ppassword)) {
    $_SESSION['ppassword_msg'] = "Password cannot be empty";
    $isValid = false;
}
function credentials($uname, $ppassword) {
	$conn = mysqli_connect("localhost", "root", "", "pharmacy_management_system");
	if (!$conn) {
  		die("Connection failed: " . mysqli_connect_error());
	}

	$stmt = mysqli_stmt_init($conn);
	mysqli_stmt_prepare($stmt, "SELECT uname, ppassword FROM new_registration WHERE uname = ? and ppassword = ?");
	mysqli_stmt_bind_param($stmt, "ss", $uname, $ppassword);
	mysqli_stmt_execute($stmt);

	$result = mysqli_stmt_get_result($stmt);

	return $result->num_rows === 1;
}

if ($isValid === true) {

    $isValid = false;

    if (credentials($uname, $ppassword)) {
        $isValid = true;
    }
    else {
        $_SESSION['global_msg'] = "No record(s) found. Please contact with the administrator";
        header("Location: ../views/caLogin.html");
    }

    /*$sql = "Select id, email, password From User Where email = '"
    . $email ."' and password = '" . $password . "'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) === 1) {
        $isValid = true;
    }
    else {
        $_SESSION['global_msg'] = "No record(s) found. Please contact with the administrator";
        header("Location: ../views/login_view.php");
    }*/

    mysqli_close($conn);
    
    if ($isValid) {
        $_SESSION['uname'] = $uname;
        header("location: ../view/caDa.php");
    }
    else {
        $_SESSION['global_msg'] = "Email or password incorrect";
        header("Location: ../views/caLogin.html");
    }
}
else {
    header("Location: ../views/caLogin.html");
}
} 
else {
$_SESSION['global_msg'] = "Something went wrong";
header("Location: ../views/caLogin.html");
}



function sanitize($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>