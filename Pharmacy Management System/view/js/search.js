function search(pForm) {

	const method = pForm.method;
	const key = pForm.uname.value;
	const url = pForm.action + "?uname=" + key;

	let xhttp = new XMLHttpRequest();
	xhttp.onload = function() {
		document.getElementById("i1").innerHTML = this.responseText;
	}
	xhttp.open(method, url);
	xhttp.send();

	return false;

}