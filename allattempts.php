<?php
require_once("Header.php");

    /*session_start(); // start the session
    $Email=$_SESSION["email"];
    */
    echo "<div class='well'>";
    echo "<a href='quizmanager.php'>Back to Quiz Manager</a><br /><br />";

require_once("settings.php"); //connection info
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

    // param check
    if(@$_REQUEST['param1']=="student100"){
        echo "okay fetch student 100 boy";

        $query = "select attemptid, firstname, lastname, studnumber, attemptnumber, score, dateandtime FROM attempts where attemptnumber = 1 and score = 5";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
        } else {
            // Display the retrieved records
            echo "<table class='table-bordered'>";
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
    else if(@$_REQUEST['param1']=="student50") {
        $query = "select attemptid, firstname, lastname, studnumber, attemptnumber, score, dateandtime FROM attempts where attemptnumber = 3 and score < 3";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
        } else {
            // Display the retrieved records
            echo "<table class='table-bordered'>";
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
    else {
        // Set up the SQL command to select the data from the table
        $query = "select attemptid, firstname, lastname, studnumber, attemptnumber, score, dateandtime FROM attempts";
        // execute the query and store result into the result pointer
        $result = mysqli_query($conn, $query);
        // checks if the execution was successful
        echo "<section id='text_columns'>";
        if (!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
        } else {
            // Display the retrieved records
            echo "<table class='table-bordered'>";
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


    } // if successful query operation
    mysqli_close($conn);
} // if successful database connection
echo "</section>";
echo "</div>";
require_once("Footer.php");
?>