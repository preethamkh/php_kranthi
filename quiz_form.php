<?php
require_once("Header.php");
?>
<div id="spacer">
    <p>Introduction to IPV4 and IPV6 Technologies</p>
</div>
<section id="text_columns">
    <!--<h3 class="hidden">na</h3>-->
    <article class="column1">
        <h4>QA</h4>
        <!--<form id="jobdetails" method="post" novalidate="novalidate" onsubmit="return(validate());"
              action="quiz_process.php" method="post">-->
        <form id="jobdetails" method="post" novalidate="novalidate" action="quiz_save.php" method="post">
            <section>
                <fieldset id="quizquestionbs">
                    <p>Student ID:
                        <input type="text" name="studnumber" id="studnumber" required/>
                    </p>
                    <p>First name:
                        <input type="text" name="firstname" id="firstname" required/>
                    </p>
                    <p>Last name:
                        <input type="text" name="lastname" id="lastname" required/>
                    </p>
                        <input type="radio" class="subtopic" name="q1" value="fourb" required/>4bytes<br/>
                        <input type="radio" class="subtopic" name="q1" value="onetwoeightb" required/>128bits<br/>
                        <input type="radio" class="subtopic" name="q1" value="eightb" required/>8bits<br/>
                        <input type="radio" class="subtopic" name="q1" value="onezerob" required/>100bits</p>
                    <p>2. In the IPv6 header,the traffic class field is similar to which field in the IPv4 header?<br>
                        <input type="radio" class="subtopic" name="q2" value="Fragmentation2" required/>Fragmentation
                        field<br>
                        <input type="radio" class="subtopic" name="q2" value="Fastswitching" required/>Fast-switching<br>
                        <input type="radio" class="subtopic" name="q2" value="ToSfield" required/>ToS field<br>
                        <input type="radio" class="subtopic" name="q2" value="Optionfield" required/>Option field<br>
                    </p>
                    <p>3. These are the features present in IPv4 but not in IPv6.<br>
                        <input type="radio" class="subtopic" name="q3" value="Fragmentation3" required/>Fragmentation<br>
                        <input type="radio" class="subtopic" name="q3" value="Headerchecksum" required/>Header checksum<br>
                        <input type="radio" class="subtopic" name="q3" value="Options" required/>Options<br>
                        <input type="radio" class="subtopic" name="q3" value="All of the mentioned" required/>All of the
                        mentioned<br></p>
                    <p>4. Dual-stack approach refers to.
                        <!--<input type="text" name="Question4" id="q4" size="50" maxlength="50" />-->
                        <select name="stack" id="q4" required="required">
                            <option value="0">Select answer</option>
                            <option value="1">single</option>
                            <option value="2">dual</option>
                        </select>
                    </p>
                    <p>5. Teredo is an automatic tunneling technique. In each client the obfuscated IPv4 address is
                        represented by bits<br>
                        <select name="state" id="q5" required="required">
                            <option value="0">Select answer</option>
                            <option value="1">96 to 127</option>
                            <option value="2">0 to 63</option>
                            <option value="3">80 to 95</option>
                            <option value="4">64 to 79</option>
                        </select></p>
                    <!--<p><input type="submit" id="checkanswers" value="Check Answers"/></p>
                    <input type="hidden" name="score" id="score" value="">-->
                    <p>
                        <input type="submit" name="submit" value="submit"/>
                    </p>
                </fieldset>
            </section>
        </form>
    </article>
    <section class="column2">
        <h3 class="hidden">na</h3>
    </section>
</section>
<?php
require_once("Footer.php");
?>
