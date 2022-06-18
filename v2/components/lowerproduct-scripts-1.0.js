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