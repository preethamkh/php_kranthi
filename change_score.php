<?php
require_once("Header.inc");

/*session_start(); // start the session
$Email=$_SESSION["email"];
*/
echo "<div class='well'>";
echo "<a href='quizmanager.php'>Back to Quiz Manager</a><br /><br />";
?>

    <form method="post" name="studdetails">
        <div class="form-group">
            <label for="score">Enter new score:</label>
            <input type="text" class="" name="score">
        </div>
        <input type="submit" name="submit" class="btn btn-default" value="submit" />
    </form>

<?php

require_once("settings.php"); //connection info
$conn = @mysqli_connect($host,
    $user,
    $pwd,
    $sql_db
);
// Checks if connection is successful

if (isset($_REQUEST['submit'])) {
    if (!$conn) {
        // Displays an error message
        echo "<p>Database connection failure</p>"; // not in production script
    } else {

        // param check
        if(isset($_REQUEST['score']) && strlen($_REQUEST['score']) > 0) {
            $newScore = (int)$_REQUEST['score'];
            $studentid = $_REQUEST["sid"];
            $attemptid = $_REQUEST["attemptid"];

            //$query = "select attemptid, firstname, lastname, studnumber, attemptnumber, score, dateandtime FROM attempts where studnumber = $student";
            $query = "update attempts set score = $newScore where studnumber = $studentid and attemptid = $attemptid";
            //echo "the query1 is here:" . $query;
            $result = mysqli_query($conn, $query);
            $updatedRows = mysqli_affected_rows($conn);

            echo "No. of rows updated: " . $updatedRows;
            echo "<br />Updated Student No. $studentid with attempt-id $attemptid, new Score: $newScore";
        }

        mysqli_close($conn);
    } // if successful database connection
}

echo "</section>";
echo "</div>";
require_once("Footer.inc");
?>