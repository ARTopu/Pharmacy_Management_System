<?php
   
        $filename = "../model/prInfo.json";
        $file = fopen($filename, "r");
        $data = fread($file, filesize($filename));
        $data = json_decode($data);
        fclose($file);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
</head>
<body>

	<h1>Update Prescription Form</h1>

	<form action="../controller/managePrUpAction.php" method="POST">
		<input type="text" name="pName" value="<?php echo $data[$_POST['indexno']]->pName ?>">
		<br><br>
		<input type="text" name="pID" value="<?php echo $data[$_POST['indexno']]->pID ?>">
		<br><br>
        <input type="text" name="age" value="<?php echo $data[$_POST['indexno']]->age ?>">
		<br><br>
		<input type="text" name="phone" value="<?php echo $data[$_POST['indexno']]->phone ?>">
		<br><br>
        <input type="text" name="date" value="<?php echo $data[$_POST['indexno']]->date ?>">
		<br><br>
		<input type="text" name="address" value="<?php echo $data[$_POST['indexno']]->address ?>">
		<br><br>
        <input type="text" name="mediName" value="<?php echo $data[$_POST['indexno']]->mediName ?>">
		<br><br>
        <input type='hidden' name='indexno' value='<?php echo $_POST["indexno"] ?>'>
		<input type="submit" value="Update">
	</form>
	<br>
    <a href="../controller/managePrAction.php"><input type="submit" name="back"  value="Back" ></a>

</body>
</html>