<?php
 require_once ("settings.php"); //connection info
$conn = @mysqli_connect($host,
$user,
$pwd,
$sql_db
);
  session_start();
  $Email=trim($_POST["email"]);
  $_SESSION["email"] = $Email;   
  $TopicName=trim($_POST["topicname"]);
  $FirstName=trim($_POST["firstname"]);
  $LastName=trim($_POST["lastname"]);
  $DOB=trim($_POST["dateofbirth"]);
  $Gender=$_POST['gender'];
  if(isset($Gender) && $Gender=="male")
  $Gender='M';
	else
	$Gender='F';
  $StreetAddress=trim($_POST["street"]);
  $Town=trim($_POST["suburb"]);  
  $arraystate = $_POST['ddl'];
       $state =  $arraystate['state'];
       $explode=explode('@',$state);
        if(isset($explode[0]))     
  $selectedState=trim($explode[0]);
  $PostalCode=trim($_POST["pcode"]);
  $Phoneno=trim($_POST["phone"]);
  if(isset($_POST['ipv4']))
  $Ipv4='Y';
else
	$Ipv4='N';
if(isset($_POST['ipv6']))
  $Ipv6='Y';
else
	$Ipv6='N';
if(isset($_POST['owasp']))
  $OWASP='Y';
else
	$OWASP='N';
if(isset($_POST['xhtml2']))
  $XHTML2='Y';
else
	$XHTML2='N';
if(isset($_POST['css3']))
  $CSS3='Y';
else
	$CSS3='N';
  $Comments=trim($_POST["comments"]);
   $sql_table="users";
   $error = "";
   if (isset($_POST['submit'])) {
	   echo $FirstName;
   # Validate First Name #
		// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"), "",$FirstName))) { 
			$error .= '<p class="error">First name should be alpha characters only.</p>';
		}
		// if first_name is not 3-20 characters long, throw error
		if (strlen($FirstName) < 3 OR strlen($FirstName) > 20) {
			$error .= '<p class="error">First name should be within 3-20 characters long.</p>';
		}
 
	# Validate Last Name #
		// if its not alpha numeric, throw error
		if (!ctype_alpha(str_replace(array("'", "-"), "", $LastName))) { 
			$error .= '<p class="error">Last name should be alpha characters only.</p>';
		}
		// if first_name is not 3-20 characters long, throw error
		if (strlen($LastName) < 3 OR strlen($LastName) > 20) {
			$error .= '<p class="error">Last name should be within 3-20 characters long.</p>';
		}
	# Validate Email #
		// if email is invalid, throw error
		if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) { // you can also use regex to do same
			$error .= '<p class="error">Enter a valid email address.</p>';
		}
	#validate date of birth
	if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$DOB))
    {
        $error .= '<p class="error">Enter a valid date of birth.</p>';
    }
	
	# Validate Phone #
		// if phone is invalid, throw error
		if (!ctype_digit($Phoneno) OR strlen($phone) != 10) {
			$error .= '<p class="error">Enter a valid phone number.</p>';
		}
	#validate address
		if (strlen($StreetAddress) > 40) { 
			$error .= '<p class="error">Street address length not more than 40 characters.</p>';
		}
	#validate town	
		if (strlen($Town) > 20) { 
			$error .= '<p class="error">Town length not more than 20 characters.</p>';
		}
	}
if($error!="")	
{
	echo "<script>
alert('",$error,"');
history.back();
</script>";
	
}
else
{
	if (!$conn) {
	// Displays an error message	
	echo "<script>
alert('Database connection failure');
history.back();
</script>";
	}
	else
	{  
	$result = mysqli_query($conn,"SELECT 1 FROM users WHERE email='$Email'");
	if (mysqli_fetch_row($result)) {
		echo "<script>
alert('User Email already exist.');
history.back();
</script>";
	} 
	else {
    $query = "INSERT INTO `swinburn`.`$sql_table`
(
`Email`,
`TopicName`,
`FirstName`,
`LastName`,
`DOB`,
`Gender`,
`StreetAddress`,
`Town`,
`State`,
`PostalCode`,
`Phoneno`,
`Ipv4`,
`Ipv6`,
`OWASP`,
`XHTML2`,
`CSS3`,
`Comments`) values
  ('$Email',
  '$TopicName',
  '$FirstName',
  '$LastName',
  '$DOB',
  '$Gender',
  '$StreetAddress',
  '$Town',
  '$selectedState',
  '$PostalCode',
  '$Phoneno',
  '$Ipv4',
  '$Ipv6',
  '$OWASP',
  '$XHTML2',
  '$CSS3',
  '$Comments')";
  	// execute the query -we should really check to see if the database exists first.
$result = mysqli_query($conn, $query);
// checks if the execution was successful
if(!$result) {
echo "<script>
alert('User registration failed.');
history.back();
</script>";
} else {
// display an operation successful message
echo "<script>
alert('Successfully added New User record.');
history.back();
</script>";
} // if successful query operation
}
}
// close the database connection
mysqli_close($conn);
// if successful database connection
}
?>
