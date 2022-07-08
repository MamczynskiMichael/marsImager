

function writeCookie(set, value) {
	document.cookie = "radio"+set+"="+value+";max-age=3600;path=/;SameSite=Strict";
}
function getCookie(cookiename) {
	
	 var cookiestring=""+document.cookie;
	 var index1=cookiestring.indexOf(cookiename);
	 if (index1==-1 || cookiename=="") return "";
	 var index2=cookiestring.indexOf(';',index1);
	 if (index2==-1) index2=cookiestring.length;
	 return unescape(cookiestring.substring(index1+cookiename.length+1,index2));
}
function setCookies() {
	var radio1 = getCookie("radio1");
	if (radio1) {document.getElementById(radio1).checked = true;}
	var radio2 = getCookie("radio2");
	if (radio2) {document.getElementById(radio2).checked = true;}
}


