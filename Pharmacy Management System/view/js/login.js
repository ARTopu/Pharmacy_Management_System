function isValid(pForm) {
	const uname = pForm.uname.value;
	const ppassword = pForm.ppassword.value;

	if (uname === "" || ppassword === "") {
		console.log("Please fill up the form properly");
		return false;
	}

	return true;
}