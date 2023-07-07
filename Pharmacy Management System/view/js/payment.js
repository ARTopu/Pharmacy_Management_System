function isValid(pForm) {
	const cname = pForm.cname.value;
	const cID = pForm.cID.value;
    const amountToPay = pForm.amountToPay.value;
	
	if (cname === "" || cID === "" || amountToPay === "" ) {
		console.log("Please fill up the form properly");
		return false;
	}

	return true;
}