<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/> 
	<meta name="description" content="IPV4  & IPV6 Technologies"/> 
	<meta name="keywords" content="HTML, CSS"/> 
	<meta name="author" content="Rajasree"/> 
    <title>Registration</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" /> 
 <script src="Scripts/quiz.js"></script>		
	</head>

	<body>
        <?php
        require_once("Header.inc");
		?>      
		<div id="spacer">       
            <p>Introduction to IPV4 and IPV6 Technologies</p>
        </div>		
        <section id="text_columns">
			<h3 class="hidden">na</h3>
            <article class="column1">    
                <h3>User Registration Page</h3>
					<form id="jobdetails" method="post" action="register_process.php" onclick="store();">
						<p>
							<label for="topicname">Topic name:</label> 
							<input type="text" name="topicname" id="topicname" size="20" readonly value="IPV6"/>
						</p>
						<p>
							<label for="firstname">First name:</label> 
							<input type="text" name="firstname" id="firstname" size="20" maxlength="12"  pattern="[A-Za-z]{1,12}" 
							title="First name should have only alphabets" required="required" required="required"/>
						</p>
						<p>
							<label for="lastname">Last name:</label> 
							<input type="text" name="lastname" id="lastname" size="20" maxlength="20"  pattern="[A-Za-z]{1,20}" 
							title="First name should have only alphabets" required="required" required="required"/>
						</p>
						<p>
							<label for="dateofbirth">Date of birth</label>
							<input type="text" id="dateofbirth" name="dateofbirth" placeholder="dd/mm/yyyy" pattern="\d{1,2}/\d{1,2}/\d{4}" required="required"/>
						</p>
						<fieldset id="jobenquiry">
							<legend>Gender</legend>
							<input type="radio" name="gender" id="male" value="Male" required="required" />Male<br />
							<input type="radio" name="gender" id="female" value="Female" />Female
						</fieldset>											
						<p>
							<label for="street">Street address:</label> 
							<input type="text" name="street" id="street" size="40" maxlength="40" required="required"/>
						</p>
						<p>
							<label for="suburb">Suburb/Town:</label> 
							<input type="text" name="suburb" id="suburb" size="20"  maxlength="20" required="required"/>
						</p>
						<p>
							<label for="state">State:</label> 
							<select name="ddl[state]" id="state" required="required">
								<option value="">NSW</option>
								<option value="ACT">ACT</option>
								<option value="VIC" selected="selected">VIC</option>
								<option value="QLD">QLD</option>
								<option value="SA">SA</option>
								<option value="WA">WA</option>
								<option value="TAS">TAS</option>
								<option value="NT">NT</option>
							</select>
						</p>
						<p>
							<label for="pcode">Postcode:</label> 
							<input type="text" name="pcode" id="pcode" size="20" maxlength="4" pattern="^\d{4}$" required="required"/>
						</p>
						
					<p>
						<label for="email">Enter your email</label><input type="email" id="email" name="email" placeholder="your_email@example.org.me" pattern="^\w+@[a-zA-Z_\.]+?\.[a-zA-Z]{2,3}$" required="required" />
					</p>
					<p>
						<label for="phone">Phone number</label><input type="text" id="phone" maxlength="10" name="phone" pattern="[0-9]{10}" 
						title="Phone number have 10 numbers"required="required" />
					</p>					
					<fieldset id="intestedtopic">
							<legend>Sub-topic of interest</legend>
							<input type="checkbox"  class="subtopic" name="ipv4" id="ipv4" value="ipv4" />IPV4<br />
							<input type="checkbox"  class="subtopic" name="ipv6" id="ipv6" value="ipv6" />IPV6<br/>
							<input type="checkbox" class="subtopic" name="owasp" id="owasp" value="owasp"/>OWASP<br/>
							<input type="checkbox" class="subtopic" name="xhtml2" id="xhtml2" value="xhtml2"/>XHTML2<br/>
							<input type="checkbox" class="subtopic" name="css3" id="css3" value="css3"/>CSS3<br/>
						</fieldset>
					<p>
						<label for="comments">Comments</label>
						<textarea rows="4" cols="50" name="comments" id="comments"></textarea>
					</p>
					
					<p><input type="submit" value="Submit" /> 
						<input type="reset" value="Reset" /> 
					</p>
				</form>
            </article>
            <section class="column2">
            	<h3 class="hidden">na</h3>  
            </section>
        </section>
    <?php 
		require_once("Footer.inc");
		?>
	</body>
</html>
