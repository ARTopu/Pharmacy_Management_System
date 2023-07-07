function isValid(pForm) {
	const fname = pForm.fname.value;
	const lname = pForm.lname.value;
    const DOB = pForm.DOB.value;
	const praddress = pForm.praddress.value;
    const pmaddress = pForm.pmaddress.value;
	const phone = pForm.phone.value;
    const email = pForm.email.value;
	const uname = pForm.uname.value;
	const ppassword = pForm.ppassword.value;
    const confirmpassword = pForm.confirmpassword.value;

	if (fname === "" || lname === "" || DOB === "" || praddress === "" || pmaddress === "" || phone === "" || email === "" || uname === "" || ppassword === "" || confirmpassword === "") {
		console.log("Please fill up the form properly");
		return false;
	}

	return true;
}