<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<?php 

		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			$pName = sanitize($_POST['pName']);
			$pID = sanitize($_POST['pID']);
            $age = sanitize($_POST['age']);
			$phone = sanitize($_POST['phone']);
            $date = sanitize($_POST['date']);
			$address = sanitize($_POST['address']);
            $mediName = sanitize($_POST['mediName']);
            $index = $_POST['indexno'];

			if (empty($pName) || empty($pID) || empty($age) || empty($phone) || empty($date) || empty($address) || empty($mediName)) {
				echo "Please fill up the form properly";
			}
			else {
				$filename = "../model/prInfo.json";
					$file = fopen($filename, "r");
					$old_data = fread($file, filesize($filename));
					$old_data = json_decode($old_data);


                    $old_data[$index]->pName = $pName;
                    $old_data[$index]->pID = $pID;
                    $old_data[$index]->age = $age;
                    $old_data[$index]->phone = $phone;
                    $old_data[$index]->date = $date;
                    $old_data[$index]->address = $address;
                    $old_data[$index]->mediName = $mediName;
                    
                    
                    $file = fopen($filename, "w");
					$old_data = json_encode($old_data);
					fwrite($file, $old_data);
					fclose($file);
				}


				
			}
		

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
<?php

header('Location: ../controller/managePrAction.php');
 
?>

</body>
</html>