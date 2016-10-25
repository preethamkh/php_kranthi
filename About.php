<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/> 
	<meta name="description" content="IPV4  & IPV6 Technologies"/> 
	<meta name="keywords" content="HTML, CSS"/> 
	<meta name="author" content=""/>
    <title>About Me</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css" media="screen" />
	<script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" />
<script src="Scripts/quiz.js"></script>		
	</head>

	<body>
        <?php
        require_once ("Header.php");
		?>
		<div id="spacer">       
            <p>Introduction to IPV4 and IPV6 Technologies</p>
        </div>
		<br/>
        <section id="text_columns">
			<h3 class="hidden">na</h3>
            <article class="column1">
				<h3 class="hidden">na</h3>
				<div class="name">
					<div id="nameinfo">
						Name
					</div>
					<div id="namevalue">
						Rajasree TELUKUTI
					</div>		
				</div>
				<div class="student">
					<div id="studentinfo">
						Student Number
					</div>
					<div id="studentvalue">
						4945867
					</div>		
				</div>
				<div class="course">
					<div id="courseinfo">
						Course
					</div>
					<div id="coursevalue">
						COS10011/ COS60004 Internet Technologies
					</div>		
				</div>
				<div class="email">
					<div id="emailinfo">
						Email
					</div>
					<div id="emailvalue">
						<a href="mailto:4920287@student.swin.edu.au">4960890@student.swin.edu.au</a>
					</div>		
				</div>
				<div class="timetable">
					<div id="timetableinfo">
						Timetable
					</div>
					<div id="timetablevalue">
						<table id="timetabling">
							<tr>
								<th>Course</th>
								<th>Code</th>
								<th>Campus</th>
							</tr>
							<tr>
							  <td>Introduction to Programming in .Net</td>
							  <td>INF600008</td>
							  <td>Hawthorn</td>
							</tr>
							<tr>
							  <td>Internet Techonologies</td>
							  <td>COS600004</td>
							  <td>Hawthorn</td>
							</tr>
							<tr>
							  <td>Introduction to Business Information</td>
							  <td>INF600007</td>
							  <td>Hawthorn</td>
							</tr>
						</table>
					</div>		
				</div>
				<figure>
					<img id="me" src="images/IMG_1135.jpg" width="400" height="300" />
					<figcaption>Rajasree</figcaption>
				</figure>
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
