function isValid(pForm) {
	const pName = pForm.pName.value;
	const pID = pForm.pID.value;
    const age = pForm.age.value;
	const phone = pForm.phone.value;
	const date = pForm.date.value;
    const address = pForm.address.value;
    const mediName = pForm.mediName.value;
	const description = pForm.description.value;

	if (pName === "" || pID === "" || age === "" || phone === "" || date === "" || address === "" || mediName === "" || description === "" ) {
		console.log("Please fill up the form properly");
		return false;
	}

	return true;
}