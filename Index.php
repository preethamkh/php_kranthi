
<!DOCTYPE html>
<!--
Author: Kranthi Reddy
Purpose:This is a html quiz form
Created: 14th Sept 2016
Last updated: 7th Oct 2016
-->
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="description" content="Creating web applications" /> 
 <meta name="keywords" content="Introducing Media Compression" /> 
 <meta name="author" content="Kranthi" /> 

 <title>Media Compression</title>
<!-- Place the general style sheet before specific CSS so the specific overides the general formatting-->
 <link rel="stylesheet" href="style.css" type="text/css" />
 </head>
 
<body>
        <?php
        require_once ("Header.php");
		?>
		<section class="block">
		<article>
			<h3>Why Compression?</h3>
			<h4>Compression is a process where number of bits in the data is reduced which in turn reduces storage capacity.</h4>
            <h3>How useful is Media Compression?</h3>
			<h4>Multimedia plays a major role in our lives from a few generations.Media Compression helps reduce disk space and greatly increases transmission speed. Its Algorithms are Specific to certain types of media like</h4>
   			<ul>
				<li>Image<img src="images/nu.jpg" alt="IMAGE" height="90" width="120"/> </li>
			<li>Audio<img src="images/audio.jpg" alt="AUDIO" height="90" width="120"/> </li>
			<li>Video<img src="images/video.jpg" alt="VIDEO" height="90" width="120"/></li>
			</ul>
		</article>
	</section>
        <?php 
		require_once ("Footer.php");
		?>
	</body>
</html>
