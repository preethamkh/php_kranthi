<?php
session_start(); // start the session
$Email=$_SESSION["email"]; 
$score=$_POST["score"];
$table='attempts';
require_once ("settings.php"); //connection info
$conn = @mysqli_connect($host,
$user,
$pwd,
$sql_db
);
if (!$conn) {
	// Displays an error message
	echo "<script>
alert('Data base connection failed.');
history.back();
</script>";
	// not in production script
	}
	else
	{  
	$result = mysqli_query($conn,"SELECT 1 FROM users WHERE email='$Email'");
	if (mysqli_fetch_row($result)) {
    if(mysqli_num_rows(mysqli_query($conn,"SHOW TABLES LIKE '".$table."'"))<=0) 
    {
		$tableattempts="CREATE TABLE `attempts` (
	  `AttemptID` INT NOT NULL AUTO_INCREMENT,
	  `email` VARCHAR(45) NULL,
	  `Score` INT NULL,
	  `attemptdate` DATETIME NULL,
	  INDEX `email_idx` (`email` ASC),
	  PRIMARY KEY (`AttemptID`),
	  CONSTRAINT `email`
		FOREIGN KEY (`email`)
		REFERENCES `users` (`Email`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION)";
		mysqli_query($conn,$tableattempts);
		$query="INSERT INTO `attempts`
		(`email`,
		`Score`,
		`attemptdate`)
		VALUES
		('$Email','$score',now())";
		$result = mysqli_query($conn, $query);
		// checks if the execution was successful
		if(!$result) {
		echo "<script>
		alert('Record is not inserted.');
		history.back();
		</script>";
		} else {
		// display an operation successful message
		echo "<script>
alert('Successfully added Score record');
history.back();
</script>";
		}
	}
	else {
		$query="INSERT INTO `attempts`
		(`email`,
		`Score`,
		`attemptdate`)
		VALUES
		('$Email','$score',now())";
		$result = mysqli_query($conn, $query);
		// checks if the execution was successful
		if(!$result) {
		echo "<script>
		alert('Record is not inserted.');
		history.back();
		</script>";
		} else {
		// display an operation successful message		
		echo "<script>
alert('Successfully added Score record');
history.back();
</script>";
		}
	}
	} 
	else{echo "<script>
alert('User not registered');
history.back();
</script>";}
	mysqli_close($conn);
	}
?>