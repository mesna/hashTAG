<?php
		$host = "localhost";
    	$user = "test";
    	$pass = "t3st3r123";
   		$db = "test";

    	// Create connection
		$conn = new mysqli($host, $user, $pass, $db);
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		}

		print_r($_POST);
		$sonum = mysqli_real_escape_string($conn, $_REQUEST['postitus']);
		if (strlen($sonum) <= 255 && strlen($sonum) != 0){
			$sql = "INSERT INTO MM_POST (Postitus) VALUES ('$sonum')";
			echo $sql;

			if ($conn->query($sql) === TRUE) {
				header("Location: index.php");
				exit();
    			//echo "New record created successfully";
			} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
			}
		} else{
			header("Location: index.php");
			echo "Plz n0 haxx0r!!";
			exit();
		}
		$conn->close();
?>