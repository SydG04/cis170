//variables
var form = document.getElementById("signup-form");
var password = document.getElementById("password");
var lengthRequirement = document.getElementById("length");
var uppercaseRequirement = document.getElementById("uppercase");
var lowercaseRequirement = document.getElementById("lowercase");
var numberRequirement = document.getElementById("number");
var specialRequirement = document.getElementById("special"); 
var fname = document.getElementById("fname");
var lname = document.getElementById("lname");
var email = document.getElementById("email");

//event listeners
form.addEventListener("keyup", validatePassword);
form.addEventListener("submit", validateForm);
//form.addEventListener("submit", checkEmptyFields);

//functions
function validateForm(event) {
  event.preventDefault();
  let formValid = true;
  let status = document.getElementById("status");

  if (!checkEmptyFields()) {
    formValid = false;
  }
    
  if(!validatePassword()){
    formValid = false;
  }


  if (formValid) {
    status.textContent = "Your account is being created...";
  } else {
    status.textContent = "You are missing some requirements";
  }
}

/*
function checkEmptyFields() {
  if (fname.value === "") {
    fname.classList.add("error");
    formValid = false;
  } else {
    fname.classList.remove("error");
  }

  if (lname.value === "") {
    lname.classList.add("error");
    formValid = false;
  } else {
    lname.classList.remove("error");
  }

  if (email.value === "") {
    email.classList.add("error");
    formValid = false;
  } else {
    email.classList.remove("error");
  }

  return formValid
}
*/

function validatePassword() {

  //password length
  if  (password.value.length >= 8) {
    lengthRequirement.classList.add("valid");
    lengthRequirement.classList.remove("invalid");
  } else {
    lengthRequirement.classList.add("invalid");
    lengthRequirement.classList.remove("valid");
    formValid = false;
  }

  //Uppercase requirement
  if (/[A-Z]/.test(password.value)) {
    uppercaseRequirement.classList.add("valid");
    uppercaseRequirement.classList.remove("invalid");
  } else {
    uppercaseRequirement.classList.add("invalid");
    uppercaseRequirement.classList.remove("valid");
    formValid = false;
  }

  //Lowercase requirement
  if (/[a-z]/.test(password.value)) {
		lowercaseRequirement.classList.add("valid");
		lowercaseRequirement.classList.remove("invalid");
	} else {
		lowercaseRequirement.classList.add("invalid"); 
		lowercaseRequirement.classList.remove("valid");
    formValid = false;
  }

  //Number requirement
  if(/\d/.test(password.value)) {
    numberRequirement.classList.add("valid");
    numberRequirement.classList.remove("invalid");
  } else {
    numberRequirement.classList.add("invalid"); 
    numberRequirement.classList.remove("valid");
    formValid = false;
  }

  //Special character requirement
  if (/[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(password.value)) {
    specialRequirement.classList.add("valid");
    specialRequirement.classList.remove("invalid");
  } else {
    specialRequirement.classList.add("invalid"); 
    specialRequirement.classList.remove("valid");
    formValid = false;
  }

  return formValid;
}
