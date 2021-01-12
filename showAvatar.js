var xmlHttp;
var imgId;
function createXMLHttpRequest() {
	if (window.ActiveXObject) // Internet Explorer
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	else // Firefox, Opera 8.0+, Safari
		xmlHttp = new XMLHttpRequest();
} //end function createXMLHttpRequest()
function stateChange() {
	if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
		//…………Add code here……..
		document.getElementById("welcomeText").innerHTML = "<TD id=\"welcomeText\">Welcome..." + xmlHttp.responseText + "</TD>";
		document.getElementById("pic").innerHTML = "<img src=\"./avatar/avatar" + imgId + ".jpg\">";
		//alert(xmlHttp.responseText)
	}
} // end function statechange()
function showAvatar(str) {
	imgId = str;
	createXMLHttpRequest();
	xmlHttp.onreadystatechange = stateChange;
	var url = "avatar.php";
	url = url + "?nickname=" + str; //url = "avatar.php?nickname=1"
	xmlHttp.open("GET", url, true);
	xmlHttp.send(null);
} //end function showAvatar(str)