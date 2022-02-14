<!DOCTYPE html>
<html>

<head>
	<title>Insert  page</title>
</head>

<body>
		<?php
require_once('connexion.php');
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "e_class_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		//  code for images !!

		
		// Taking all 5 values from the form data(input)
		$img = $_POST['image'];
        $name = $_R = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$enroll_number = $_POST['enroll_number'];
		$date_of_admission = $_POST['date_of_admission'];
		
		
		$sql = "INSERT INTO student VALUES ('$img','$id','$name',
			'$email','$phone','$enroll_number','$date_of_admission')";
		
		if(mysqli_query($conn, $sql)){
			header('location:student.php');

			echo nl2br("\n$img\n$id\n$name\n $email\n "
				. "$phone\n $enroll_number\n $date_of_admission");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>
</html>