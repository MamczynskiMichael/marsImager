/*
* roverRadioIds and camRadioIds should be added to this array
* as it adds an event to create a cookie for keeping
* track of if it was clicked or not
*/
var roverRadioId = ["rover1","rover2","rover3"];
var roverRadioLis = [];
for (var i = 0; i < roverRadioId.length; i++) {
	roverRadioLis[i]=document.getElementById(roverRadioId[i]);
	if (roverRadioLis[i]){	
			roverRadioLis[i].addEventListener("click", function (){writeCookie(1, this.id)});	
	}
}
var camRadioId = ["roverCamAll","roverCam0","roverCam1","roverCam2","roverCam3","roverCam4","roverCam5","roverCam6"];
var camRadioLis = [];
for (var i = 0; i < camRadioId.length; i++) {
	camRadioLis[i]=document.getElementById(camRadioId[i]);
	if (camRadioLis[i]){	
			camRadioLis[i].addEventListener("click", function (){writeCookie(2, this.id)});	
	}
}

//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
