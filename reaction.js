"use strict";

window.onload = pageLoad;



function pageLoad() {
  document.getElementById("overnight").onclick=shippingChoice;
  document.getElementById("priority").onclick=shippingChoice;
  document.getElementById("international").onclick=shippingChoice;
  document.getElementById("standard").onclick=shippingChoice;
  document.getElementById("submit").onclick=Click;
  document.getElementById("phone").onblur=test_num;
  document.getElementById("credit").onblur=test_credit;
}      

function test_num() {


	var num = document.getElementById("phone").value;
	var correct = num.search(/\d{3}-\d{3}-\d{4}/);

	if (correct == -1){
		alert("Invalid phone number.");
		return false;
	}else{
		alert("Valid phone number.");
	}
} 

function test_credit() {


	var num = document.getElementById("credit").value;
	var correct = num.search(/\d{4}-\d{4}-\d{4}-\d{4}/);

	if (correct == -1){
		alert("Invalid credit card.");
		return false;
	}else{
		alert("Valid credit card.");
	}


} 




function Click( ){
alert("Payment and shipping submitted. You should expect your clothing to be delivered in a few days.");
}

function shippingChoice () {    
    var selected;
    var all = document.getElementsByName("shipping");
    var i;
    for (i = 0; i < all.length; i++) {
        if (all[i].checked) {
            selected = all[i].value;
        }
    }

switch (selected) {
    case "Overnight": 
      alert("Overnight: You should expect your package tomorrow morning.");
      break;
    case "Priority Mail": 
      alert("Priority Mail: You should expect your package within 1 to 2 days.");
      break; 
    case "International":
      alert("International: You should expect your package within 6 to 10 days.");
      break;    
    case "Standard":
      alert("Standard: You should expect your package within 1 to 5 days.");
      break; 
    default:
      alert("Error in JavaScript function suitChoice");
      break;
  }
}