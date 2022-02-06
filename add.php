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
		
		// Taking all 5 values from the form data(input)
		$img = $_REQUEST['img'];
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$enroll_number = $_REQUEST['enroll_number'];
		$date_of_admission = $_REQUEST['date_of_admission'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO student VALUES ('$img','$id','$name',
			'$email','$phone','$enroll_number','$date_of_admission')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

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