
/**
* Author: Kranthi Reddy
* Target: This page should lead to result.htm
* Purpose: This file is for validation of enquire.htm form.
* Created: 3 Oct 2016
* Last updated: 4 Oct 2016
*  
*/
"use strict"; // prevents creation of global variables

function check() {
 // check if text is greater than 15 character
	var errMsg = "";	
	var result = true; /* stores the error message */
	var firstname = document.getElementById("firstname").value;
	var lastname = document.getElementById("lastname").value;
	var reference = document.getElementById("reference").value;
	var one = document.getElementById("one").value;
	var lossy = document.getElementById("lossy").checked;
	var lossless = document.getElementById("lossless").checked;
	var img = document.getElementById("img").checked;
	var aud = document.getElementById("aud").checked;
	var vid = document.getElementById("vid").checked;
	var fil = document.getElementById("fil").checked;
	var format = document.getElementById("format").value;
	var purpose = document.getElementById("purpose").value;
	var range = document.getElementById("range").value;
	localStorage.setItem('resultq1', 'false');
	localStorage.setItem('resultq2', 'false');
	localStorage.setItem('resultq3', 'false');
	localStorage.setItem('resultq4', 'false');
	localStorage.setItem('resultq5', 'false');
	localStorage.setItem('finalscore', '0');
	//Validations
	//Validating first name to be only alphabets 
	if(!firstname.match(/^[a-zA-Z]+$/)) {
		errMsg = errMsg + "Your firstname must contain only alpha characters";
		result = false;
	}
	//Validating last name to be only alphabets
	if(!lastname.match(/^[a-zA-Z]+$/)){
		errMsg = errMsg + "Your lastname must contain only alpha characters";
		result = false;
	}
	
	//Non-empty text field validation
	if(one.value==" ") {
		errMsg = errMsg + "Please dont leave the field blank";
		result = false;
	} 
	//validation of drop down list
	if(format.value == "none") {
		errMsg = errMsg + "Please select one option";
		result = false;
	} 
	if(purpose.value == "none") {
		errMsg = errMsg + "Please select one option";
		result = false;
	} 
	//Validating check boxes
	if(!(img || aud || vid || fil)){
	errMsg = errMsg + "Please select atleast one type of media";
		result = false;
	}	
	
	if (errMsg != ""){   //only display message box if there is something to show
		alert(errMsg);
	}
		
	if(result){
	get_score();
	store_answers();
	get_answers();
	}
	return result;
	}
    function get_radio() {
	var compression = "";
		//checking radio buttons
	    if(document.getElementById("lossy").checked) {compression = "Lossy"; alert(compression);}  
	    else {compression = "Lossless"; }	
		return compression;
	}
	
	function get_checkbox()
	{
		//First Concatenating checkboxes to into one single string
		var media = "";
		var imgm = "";
		var audm = "";
		var vidm = "";
		var film = "";
		
		if(document.getElementById("img").checked) { imgm = "img";
			if(document.getElementById("aud").checked) {  audm = "aud";
			if(document.getElementById("vid").checked) { vidm = "vid";
				if(document.getElementById("fil").checked) { film = "fil";
				}else { film = ""; }
			}else { vidm = ""; }
			}else { audm = ""; }
		}else { imgm = ""; }
			media = imgm + audm + vidm + film;
			alert(media);
			return media;
	}
	//Calculating score for the quiz
	function get_score() {
		var score = 0;
		var compr = get_radio();
		var med = get_checkbox();
		alert(med);
		    //Loop calculation for score.
			var a = new Array(quizForm.one.value, compr, med, quizForm.format.value, quizForm.purpose.value);
			var rightanswers = new Array("ITUT", "Lossless", "imgaudvid", "MPEG", "reducingresources");
			for(var i = 0; i<6 ; i++){
            if(a[i] == rightanswers[i]) score++;
			}
			alert("You scored "+score);
			return score;
	}
	function store_answers(){
		var sresult = true;
		var serrmsg = "";
	//get values and assign them to a localStorage attribute.
	//we use the same name for the attribute and the element id to avoid confusion
	

     var finalscore = get_score();
	
	 var firstname = document.getElementById("firstname");
	 var lastname = document.getElementById("lastname");
	 var reference = document.getElementById("reference");
	alert(finalscore);
	 if(sresult) {
	localStorage.setItem('firstname', firstname.value);
	// localStorage.setItem('first', firstname.value);
	 localStorage.setItem('lastname', lastname.value);
	  alert ("title stored: " +lastname.value);
	 localStorage.setItem('reference', reference.value);
	 localStorage.setItem('finalscore', finalscore);
	 localStorage.setItem('resultq1', 'true');
	 localStorage.setItem('resultq2', 'true');
	 localStorage.setItem('resultq3', 'true');
	 localStorage.setItem('resultq4', 'true');
	 localStorage.setItem('resultq5', 'true');
	 alert ("final score after local storage stored: " +finalscore);
	 }
	 if (sresult != true){
		alert(serrMsg);
	}
	
	 return sresult;
	 
	
	}
	
	

	function prefill_form(){
	if(localStorage.firstname !=undefined){
	document.getElementById("firstname").value = localStorage.firstname;	
	document.getElementById("lastname").value = localStorage.lastname;
	document.getElementById("reference").value = localStorage.reference;
	
	}
	}
   
	
	function init () {
	prefill_form();
	var quizForm = document.getElementById("quizForm");// link the variable to the HTML element
	quizForm.onsubmit = check;
	if (localStorage.clickcount) {
    localStorage.clickcount = Number(localStorage.clickcount) + 1;
	} 
	else {
    localStorage.clickcount = 1;
	}	
	 
     }
	window.onload = init;

 
 
	