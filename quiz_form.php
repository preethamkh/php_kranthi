<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/> 
	<meta name="description" content="IPV4  & IPV6 Technologies"/> 
	<meta name="keywords" content="HTML, CSS"/> 
	<meta name="author" content="Rajasree"/> 
    <title>Quiz</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />   
  <script src="Scripts/quiz.js"></script>	
	</head>

	<body>
        <?php
        require_once ("Header.php");
		?>
		<div id="spacer">       
            <p>Introduction to IPV4 and IPV6 Technologies</p>
        </div>		
        <section id="text_columns">
			<h3 class="hidden">na</h3>
            <article class="column1">    
                <h3>User Registration Page</h3>
					<form id="jobdetails" method="post"  novalidate="novalidate" onsubmit="return(validate());" action="quiz_process.php">
						<section>
						<fieldset id="quizquestionbs">
							<p>1. The size of IP address in IPv6 is<br>
							<input type="radio" class="subtopic" name="Question1" id="q11" value="fourb" />4bytes<br />
							<input type="radio" class="subtopic" name="Question1" id="q12" value="onetwoeightb" />128bits<br />
							<input type="radio" class="subtopic" name="Question1" id="q13" value="eightb" />8bits<br />
							<input type="radio" class="subtopic" name="Question1" id="q14" value="onezerob" />100bits</p>
							<p>2. In the IPv6 header,the traffic class field is similar to which field in the IPv4 header?<br>
							<input type="radio" class="subtopic" name="Question2" id="q21" value="Fragmentation2" />Fragmentation field<br>
							<input type="radio" class="subtopic" name="Question2" id="q22" value="Fastswitching"/>Fast-switching<br>
							<input type="radio" class="subtopic" name="Question2" id="q23" value="ToSfield"/>ToS field<br>
							<input type="radio" class="subtopic" name="Question2" id="q24" value="Optionfield"/>Option field<br></p>
							<p>3. These are the features present in IPv4 but not in IPv6.<br>
							<input type="checkbox"  class="subtopic" id="q31" value="Fragmentation3" />Fragmentation<br>
							<input type="checkbox"  class="subtopic" id="q32" value="Headerchecksum" />Header checksum<br>
							<input type="checkbox"  class="subtopic" id="q33" value="Options" />Options<br>
							<input type="checkbox"  class="subtopic" id="q34" value="All of the mentioned" />All of the mentioned<br></p>
							<p>4. Dual-stack approach refers to.
							<input type="text" name="Question4" id="q4" size="50" maxlength="50" /></p>
							<p>5. Teredo is an automatic tunneling technique. In each client the obfuscated IPv4 address is represented by bits<br>
							<select name="state" id="q5" required="required">
								<option value="0">Select answer</option>
								<option value="1">96 to 127</option>
								<option value="2">0 to 63</option>
								<option value="3">80 to 95</option>
								<option value="4">64 to 79</option>
							</select></p>
							<p><input type="submit" id="checkanswers" value="Check Answers"/></p>
							<input type="hidden" name="score" id="score" value="">
						</fieldset>	
						</section>
				</form>
            </article>
            <section class="column2">
            	<h3 class="hidden">na</h3>  
            </section>
        </section>
       <?php 
		require_once ("Footer.php");
		?>
	</body>
</html>
