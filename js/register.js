function pwCheck() {				
	if($("#inputPassword").val() == $("#confirmPass").val() && $("#inputEmail").val() == $("#confirmEmail").val()) {
		$("#theReg").submit();
	}
	if($("#inputPassword").val() != $("#confirmPass").val()) {
		$("#pwNoMatch").css("display", "block");
	}
	else {
		$("#pwNoMatch").css("display", "none");
	}
	if($("#inputEmail").val() != $("#confirmEmail").val()) {
		$("#eNoMatch").css("display", "block");
	}
	else {
		$("#eNoMatch").css("display", "none");
	}
}