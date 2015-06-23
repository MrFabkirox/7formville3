

function checkEmpty(elem) {
	var field = document.getElementById(elem).trim.value();
	if( field == "" || field == null) {
		document.getElementById('errorMessage').innerHTML = "One of the required field at least is empty";
		return false;
	} else {
		return true;
	}
}