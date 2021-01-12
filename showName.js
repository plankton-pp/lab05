var xmlHttp;
function createXMLHttpRequest() {
	if (window.ActiveXObject) { // Internet Explorer
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	} else { // Firefox, Opera 8.0+, Safari
		xmlHttp = new XMLHttpRequest();
	}
} //end function createXMLHttpRequest()
function searchName(str) {
	createXMLHttpRequest();
	var url = "name.php";
	url = url + "?name=" + str;
	xmlHttp.open("GET", url, true);
	xmlHttp.onreadystatechange = () => {
		var result = "";
		if (xmlHttp.readyState == 4) {
			let res = xmlHttp.responseText.split(',');
			for(suggest in res){
				result += "<option value="+res[suggest]+">" + res[suggest]+"</option>";
			}
			document.getElementById("namesugg").innerHTML = result;
			//alert(result);
		}
	};
	xmlHttp.send(null);
} //end function showHint(str)