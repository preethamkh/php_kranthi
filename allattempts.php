<?php
require_once("Header.inc");

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

        $query = "select attemptid, firstname, lastname, studnumber, attemptnumber, score, dateandtime FROM attempts where attemptnumber = 1 and score = 5";

        if(isset($_REQUEST['sort'])) {
            if($_REQUEST['sort'] == 'firstname') {
                $query .= " order by firstname desc";
            }
        }

        //echo "echoing the query: " + $query;

        $result = mysqli_query($conn, $query);

        if (!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
        } else {
            // Display the retrieved records
            echo "<table class='table-bordered'>";
            echo "<tr>"
                . "<th>Attempt ID</a></th>"
                . "<th><a href='allattempts.php?param1=student100&sort=firstname'>Firstname</a></th>"
                . "<th><a href='allattempts.php?param1=student100&sort=lastname'>Lastname</a></th>"
                . "<th><a href='allattempts.php?param1=student100&sort=studnumber'>Student ID</a></th>"
                . "<th><a href='allattempts.php?param1=student100&sort=attemptnumber'>Attempt No.</a></th>"
                . "<th><a href='allattempts.php?param1=student100&sort=score'>Score</a></th>"
                . "<th><a href='allattempts.php?param1=student100&sort=dateandtime'>Date/Time</a></th>"
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
                . "<th>Attemptid</th>"
                . "<th><a href='allattempts.php?param1=student50&sort=firstname'>Firstname</a></th>"
                . "<th><a href='allattempts.php?param1=student50&sort=lastname'>Lastname</a></th>"
                . "<th><a href='allattempts.php?param1=student50&sort=studnumber'>Student ID</a></th>"
                . "<th><a href='allattempts.php?param1=student50&sort=attemptnumber'>Attempt No.</a></th>"
                . "<th><a href='allattempts.php?param1=student50&sort=score'>Score</a></th>"
                . "<th><a href='allattempts.php?param1=student50&sort=dateandtime'>Date/Time</a></th>"
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
                . "<th>AttemptID</th>"
                . "<th><a href='allattempts.php?sort=firstname'>Firstname</a></th>"
                . "<th><a href='allattempts.php?sort=lastname'>Lastname</a></th>"
                . "<th><a href='allattempts.php?sort=studnumber'>Student ID</a></th>"
                . "<th><a href='allattempts.php?sort=attemptnumber'>Attempt No.</a></th>"
                . "<th><a href='allattempts.php?sort=score'>Score</a></th>"
                . "<th><a href='allattempts.php?sort=dateandtime'>Date/Time</a></th>"
                . "<th>Change Score</th>"
                . "</tr>";
            // retrieve current record pointed by the result pointer
            while ($row = mysqli_fetch_assoc($result)) {
                $theVar = $row["studnumber"];
                $aid = $row["attemptid"];
                echo "<tr>";
                echo "<td>", $row["attemptid"], "</td>";
                echo "<td>", $row["firstname"], "</td>";
                echo "<td>", $row["lastname"], "</td>";
                echo "<td>", $row["studnumber"], "</td>";
                echo "<td>", $row["attemptnumber"], "</td>";
                echo "<td>", $row["score"], "</td>";
                echo "<td>", $row["dateandtime"], "</td>";
                echo "<td><a href='change_score.php?sid=$theVar&attemptid=$aid'>Change</a></td>";
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
require_once("Footer.inc");
?>