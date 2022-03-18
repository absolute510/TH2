// JavaScript Document


function checkRegistInfo(){
	var password1 = document.formregister.txtPass2.value;
	var password2 = document.formregister.txtCPass.value;
	var ok=1;
	if ((password1.length<6)||(password2.length<6)){
		alert("password must be at least 6 characters");
		return false;
	}
	if (password1 != password2){
		document.getElementById("errcheck").innerHTML = " 2 password must be same!"
		ok=0;
	} else {
		document.getElementById("errcheck").innerHTML = " 2 password OK!"
	}
	
	var birthday = document.getElementById("txtBirthday").value;

	var dateForm = new Date(birthday);
	var currentDate = new Date();
	if (dateForm>currentDate){
		document.getElementById("errBirthday").innerHTML = " Ngày sinh phải nhỏ hơn ngày hiện tại!";
		ok=0;
	}

	
	var SDT = document.formregister.txtSDT.value;
	var regExp = /((09)+([0-9]{8})\b)/g;
	
	if (regExp.test(SDT)){
		document.getElementById("errcheckSDT").innerHTML = " SDT OK";
	} else{
		document.getElementById("errcheckSDT").innerHTML = " Phải bắt đầu bằng 09"
		ok=0;
	}

	var regExp = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
	var email = document.formregister.txtEmail.value;
	if (regExp.test(email)){
		document.getElementById("errcheckemail").innerHTML = " Email OK";
	} else{
		document.getElementById("errcheckemail").innerHTML = " Email không hợp lệ"
		ok=0;
	}
	
	var username = document.formregister.txtUsername2.value;
	if (username.length>30){
		document.getElementById("errNameLength").innerHTML = " Tên quá 30 kí tự";
		ok=0;
	}


	if (ok==0){
		return false;
	} 
	
	
	

	
}

function clearShown2(){
	document.getElementById("outputReg").innerHTML = "";
	return true;
}
