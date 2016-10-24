<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/> 
	<meta name="description" content="IPV4  & IPV6 Technologies"/> 
	<meta name="keywords" content="HTML, CSS"/> 
	<meta name="author" content="Rajasree"/> 
    <title>Results</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
          <script src="Scripts/quiz.js"></script>	
	</head>

	<body >
	<?php
	session_start(); // start the session
$Email=$_SESSION["email"];
        require_once ("Header.php");
 require_once ("settings.php"); //connection info
$conn = @mysqli_connect($host,
$user,
$pwd,
$sql_db
);
// Checks if connection is successful
if (!$conn) {
// Displays an error message
echo "<p>Database connection failure</p>"; // not in production script
} else {
// Upon successful connection
$sql_table="attempts";
// Set up the SQL command to select the data from the table
$query = "select score, attemptdate FROM attempts where email='$Email' ORDER BY attemptdate";
// execute the query and store result into the result pointer
$result = mysqli_query($conn, $query);
// checks if the execution was successful
echo "<section id='text_columns'>";
if(!$result) {
echo "<p>Something is wrong with ", $query, "</p>";
} else {
// Display the retrieved records
echo "<table border=\"1\">";
echo "<tr>"
."<th scope=\"col\">Score</th>"
 ."<th scope=\"col\">Attempt Date</th>"
."</tr>";
// retrieve current record pointed by the result pointer
while ($row = mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>",$row["score"],"</td>";
echo "<td>",$row["attemptdate"],"</td>";
echo "</tr>";
}
echo "</table>";
// Frees up the memory, after using the result pointer
mysqli_free_result($result);
} // if successful query operation
// Set up the SQL command to select the data from the table
$query = "select avg(score) as averagescore FROM attempts where email='$Email'";
// execute the query and store result into the result pointer
$result = mysqli_query($conn, $query);
// checks if the execution was successful
if(!$result) {
echo "<p>Something is wrong with ", $query, "</p>";
} else {
	$row = mysqli_fetch_assoc($result);
	echo "<p> The average of score of all attempts ",$row["averagescore"],"</p>";
}
// close the database connection
mysqli_close($conn);
} // if successful database connection
echo "</section>";
		require_once ("Footer.php");
		?>
	</body>
</html>
