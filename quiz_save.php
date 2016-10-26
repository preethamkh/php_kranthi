<?php
require_once("Header.php");
/* Check for answers in this file and then submit along with score / insert into DB */
/* for now just insert - test this functionality */

require_once("settings.php"); //connection info
$conn = @mysqli_connect($host,
    $user,
    $pwd,
    $sql_db
);

// check answers
function checkAnswers()
{
    $score = 0;

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

    if ($a1 == $ans1) {
        //return false;
        $score++;
    }

    if ($a2 == $ans2) {
        $score++;
    }

    if ($a3 == $ans3) {
        $score++;
    }

    if ($a4 == $ans4) {
        $score++;
    }

    if ($a5 == $ans5) {
        $score++;
    }

    return $score;

    /*else {
        echo "<br /> returning true";
        return true;
    }*/
}

echo "<div class='well'>";

// Checks if connection is successful
if (!$conn) {
// Displays an error message
    echo "<p>Database connection failure</p>"; // not in production script
} else {
    if (isset($_POST['submit'])) {

        $studnumber = (int)$_POST['studnumber'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        //$score = 5;
        $dateandtime = date("Y-m-d H:i:s");

        $q1 = $_POST['q1'];

        if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['studnumber'])) {

            $checkAttemptSql = "SELECT Count(studnumber) as total FROM attempts WHERE studnumber = " . $studnumber;
            $attemptValue = mysqli_query($conn, $checkAttemptSql);
            //  echo "<br /> " . $checkAttemptSql;

            // if attempt >=3 don't insert

            $res = mysqli_fetch_assoc($attemptValue);
            $totAttempts = $res['total'] + 1;
            //echo "<br /> Total number of attempts: " . $totAttempts;

            if ($res['total'] >= 3) {
                // no more attempts
                echo "<br /> Sorry! you have exceeded the maximum number of attempts";
            } else {
                $attemptnumber = ($res['total'] + 1);
                $yourScore = checkAnswers();
                //echo "dsdfsdfs : " . $yourScore;


                $SQL = "INSERT INTO attempts (studnumber, firstname, lastname, attemptnumber, score, dateandtime) VALUES ($studnumber, '" . $firstname . "', '" . $lastname . "', $attemptnumber, $yourScore, '" . $dateandtime . "')";
                /* echo "studnumber: " . $_POST['studnumber'] . "<br />";
                 echo "firstname: " . $_POST['firstname'] . "<br />";
                 echo "lastname: " . $_POST['lastname'] . "<br />";
                 echo "attemptnumber: " . $attemptnumber . "<br />";
                 echo "score: " . $score . "<br />";
                 echo "date and time: " . $dateandtime . "<br />";
                 echo "Q1: " . $q1;
                 echo $SQL;*/


                echo "<br /> Thanks for taking the test: " . $studnumber;
                echo "<br /> Your score is: " . $yourScore;
                echo "<br /> Your total number of attempts: " . ($res['total'] + 1);

                if($res['total'] < 3) {
                    echo "<br /> Would you like to attempt <a href='quiz_form.php'>again?</a>";
                }

                // if (!checkAnswers()) ;

                $result = mysqli_query($conn, $SQL);
            }

            /*if($attemptValue -> num_rows > 0) {
                while($row = $attemptValue -> fetch_assoc()) {
                    echo "<br />" . (string)$row[0];
                }
            }*/


        }
    }
}
echo "</div>";
require_once("Footer.php");
?>