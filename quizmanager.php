<?php
require_once("Header.php");
?>
<header>
    <div id="spacer">
        <p>Quiz Manager</p>
    </div>
    <h1>Quiz Operations</h1>
    <br/><br/>
    <nav>
        <ul>
            <li><a href="allattempts.php">View All Attempts</a></li>
            <li><a href="Topthree.php">Top 3 Scores</a></li>

            <li><a href="filedstudents.php">Filed Students</a></li>
        </ul>
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