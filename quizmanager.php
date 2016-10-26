<?php
require_once("Header.php");
?>
<header>
    <div class="well">
        <p>Quiz Manager</p>
    </div>
<!--    <h1>Quiz Operations</h1>-->
    <br/><br/>
    <nav>
        <div class="panel panel-default">
            <div class="panel-body"><a href="allattempts.php">List all attempts</a></div>
            <div class="panel-body"><a href="allattempts.php">List all attempts for a particular student</a></div>
            <div class="panel-body"><a href="allattempts.php?param1=student100">List all students with 100% on their first attempt</a></div>
            <div class="panel-body"><a href="allattempts.php?param1=student50">List all students with < than 50% on the third attempt</a></div>
            <div class="panel-body"><a href="allattempts.php">Delete attempts for a particular student</a></div>
            <div class="panel-body"><a href="allattempts.php">Change the score for a quiz attempt</a></div>
            <div class="panel-body"><a href="Topthree.php">Top 3 Scores</a></div>
        </div>
        <!--<ul>
            <a href="allattempts.php">List all attempts</a>
            <a href="allattempts.php">List all attempts for a particular student</a>
            <a href="allattempts.php">List all students with 100% on their first attempt</a>
            <a href="allattempts.php">List all students with $lt; than 50% on the third attempt</a>
            <a href="allattempts.php">Delete attempts for a particular student</a>
            <a href="allattempts.php">Change the score for a quiz attempt</a>
            <a href="Topthree.php">Top 3 Scores</a>
            <li><a href="filedstudents.php">Filed Students</a></li>
        </ul>-->
    </nav>
</header>

<section id="text_columns">
    <h3 class="hidden">na</h3>
    <form id="jobdetails" method="post" novalidate="novalidate">

    </form>
</section>
<?php
require_once("Footer.php");
?>