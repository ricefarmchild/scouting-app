<html>
<head>
	<meta http-equiv="refresh" content="0; deleteRecords.php">
</head>
<body>

<?php 
	
	include("database.php");   
	
	$delete_option = mysqli_real_escape_string($conn, $_POST['deleteRecords']);
	$admin_code = mysqli_real_escape_string($conn, $_POST['adminCode'])
	
	if () {
	    die()
	}
	
	// STILL NEED TO TEST
	if ($delete_option == 'deleteRecords-teams') {
	    $sql = "TRUNCATE TABLE 'teams'";
	} else if ($delete_option == 'deleteRecords-robots') {
	    $sql = "TRUNCATE TABLE 'robots'";
	}
	
	if ($conn->query($sql) === TRUE) {
	    echo 'New team successfully added' . '<br><a href="deleteRecords.php">Click here to go back</a>';
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
?>

</body>
</html>