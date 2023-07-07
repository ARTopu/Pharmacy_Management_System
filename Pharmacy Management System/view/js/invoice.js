function isValid(pForm) {
	const billTo = pForm.billTo.value;
	const phone = pForm.phone.value;
    const address = pForm.address.value;
	const date = pForm.date.value;
    const mediName = pForm.mediName.value;
	const quantity = pForm.quantity.value;
    const unitePrice = pForm.unitePrice.value;
	const totalAmount = pForm.totalAmount.value;

	if (billTo === "" || phone === "" || address === "" || date === "" || mediName === "" || quantity === "" || unitePrice === "" || totalAmount === "" ) {
		console.log("Please fill up the form properly");
		return false;
	}

	return true;
}