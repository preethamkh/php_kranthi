<?php

/* Check for answers in this file and then submit along with score / insert into DB */


/* for now just insert - test this functionality */

require_once("settings.php"); //connection info
$conn = @mysqli_connect($host,
    $user,
    $pwd,
    $sql_db
);


// check answers
function checkAnswers() {
    $score = 0;
    $q1 = $_POST['q1'];
    echo "Q1: " . $q1;

    $a1 = 'eightb';
    $a2 = 'Fastswitching';
    $a3 = 'Headerchecksum';
    $a4 = 'single';
    $a5 = '96 to 127';

    $ans1 = $_POST['q1'];
    $ans2 = $_POST['q2'];
    $ans3 = $_POST['q3'];
    $ans4 = $_POST['q4'];
    $ans5 = $_POST['q5'];

    if($a1 != $ans1)
        return false;
    else
        return true;
}


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

        $q1 = $_POST['q1'];

        if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['studnumber'])) {
            $SQL = "INSERT INTO attempts (studnumber, firstname, lastname, attemptnumber, score, dateandtime) VALUES ($studnumber, '".$firstname."', '".$lastname."', $attemptnumber, $score, '".$dateandtime."')";
           /* echo "studnumber: " . $_POST['studnumber'] . "<br />";
            echo "firstname: " . $_POST['firstname'] . "<br />";
            echo "lastname: " . $_POST['lastname'] . "<br />";
            echo "attemptnumber: " . $attemptnumber . "<br />";
            echo "score: " . $score . "<br />";
            echo "date and time: " . $dateandtime . "<br />";
            echo "Q1: " . $q1;
            echo $SQL;*/

            if(!checkAnswers());

            $result = mysqli_query($conn, $SQL);
        }
    }
}

?>