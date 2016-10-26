<?php
require_once("Header.php");

/*session_start(); // start the session
$Email=$_SESSION["email"];
*/
echo "<div class='well'>";
echo "<a href='quizmanager.php'>Back to Quiz Manager</a><br /><br />";
?>

    <form method="post" name="studdetails">
        <div class="form-group">
            <label for="usr">Student Number:</label>
            <input type="text" class="" name="studnumber">
        </div>
<!--        <button type="button" name="submit" class="btn btn-default">Submit</button>-->
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
        //if (@$_REQUEST['param1'] == "student100") {
        if(isset($_REQUEST['studnumber'])) {
            //echo "okay fetch student the boy";
            $student = $_REQUEST['studnumber'];

            $query = "select attemptid, firstname, lastname, studnumber, attemptnumber, score, dateandtime FROM attempts where studnumber = $student";
            //echo "the query is here:" . $query;
            $result = mysqli_query($conn, $query);

            if (!$result) {
                echo "<p>Something is wrong with ", $query, "</p>";
            } else {
                // Display the retrieved records
                echo "<br /><table class='table-bordered'>";
                echo "<tr>"
                    . "<th>Attempt ID</th>"
                    . "<th>Firstname</th>"
                    . "<th>Lastname</th>"
                    . "<th>Student ID</th>"
                    . "<th>Attempt No.</th>"
                    . "<th>Score</th>"
                    . "<th>Date/Time</th>"
                    . "</tr>";
                // retrieve current record pointed by the result pointer
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>", $row["attemptid"], "</td>";
                    echo "<td>", $row["firstname"], "</td>";
                    echo "<td>", $row["lastname"], "</td>";
                    echo "<td>", $row["studnumber"], "</td>";
                    echo "<td>", $row["attemptnumber"], "</td>";
                    echo "<td>", $row["score"], "</td>";
                    echo "<td>", $row["dateandtime"], "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                // Frees up the memory, after using the result pointer
                mysqli_free_result($result);
            }
        }

        mysqli_close($conn);
    } // if successful database connection
}

echo "</section>";
echo "</div>";
require_once("Footer.php");
?>