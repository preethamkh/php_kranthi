<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 25/10/2016
 * Time: 2:27 PM
 */

/* Check for answers in this file and then submit along with score / insert into DB */


/* for now just insert - test this functionality */

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
    if (isset($_POST['submit'])) {

        $studnumber = (int)$_POST['studnumber'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $attemptnumber = 1;
        $score = 5;
        $dateandtime = date("Y-m-d H:i:s");

        if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['studnumber'])) {
            $SQL = "INSERT INTO attempts (studnumber, firstname, lastname, attemptnumber, score, dateandtime) VALUES ($studnumber, '".$firstname."', '".$lastname."', $attemptnumber, $score, '".$dateandtime."')";
            echo "studnumber: " . $_POST['studnumber'] . "<br />";
            echo "firstname: " . $_POST['firstname'] . "<br />";
            echo "lastname: " . $_POST['lastname'] . "<br />";
            echo "attemptnumber: " . $attemptnumber . "<br />";
            echo "score: " . $score . "<br />";
            echo "date and time: " . $dateandtime . "<br />";
            echo $SQL;

            $result = mysqli_query($conn, $SQL);
        }
    }
}

?>