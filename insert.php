<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "faculty");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$Work = $_REQUEST['Work'];
		$Organisation = $_REQUEST['Organisation'];
		$Type = $_REQUEST['Type'];
		$Duration = $_REQUEST['Duration'];
		$Eligibility = $_REQUEST['Eligibility'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO staff VALUES ('$Work',
			'$Organisation','$Type','$Duration','$Eligibility')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored successfully."
				// . " Please browse your localhost php my admin"
				. " </h3>";

			echo nl2br("\n$Work\n $Organisation\n "
				. "$Type\n $Duration\n $Eligibility");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
