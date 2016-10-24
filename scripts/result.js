
/**
* Author: Kranthi Reddy
* Target: This page should lead to result.htm
* Purpose: This file is for validation of enquire.htm form.
* Created: 3 Oct 2016
* Last updated: 4 Oct 2016
*  
*/
"use strict";
	// retrieving values
	function get_answers()
	{
		
	    document.getElementById('fname').innerHTML = localStorage.getItem("firstname");
		document.getElementById('lname').innerHTML = localStorage.getItem("lastname");
		document.getElementById('ref').innerHTML = localStorage.getItem("reference");
		document.getElementById('fscore').innerHTML = localStorage.getItem("finalscore");
	//document.getElementById("scr").innerHTML = localStorage.firstname;
	    document.getElementById("submit").innerHTML = "You have done this quiz " +
localStorage.clickcount + " time(s).";
}


function init() {
    get_answers();
	
}

window.onload = init;