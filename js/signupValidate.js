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
var requirements = document.querySelector(".pwrequirements");
var emailStatus = document.getElementById("emailStatus");

//event listeners
email.addEventListener("input", validateEmail);
password.addEventListener("keyup", validatePassword);
form.addEventListener("submit", validateForm);

//functions
function validateForm(event) {
  event.preventDefault();
  let formValid = true;
  let status = document.getElementById("status");

  if (!checkEmptyFields()) {
    formValid = false;
  }
    
  if(!validatePassword()) {
    formValid = false;
  }

  if (validateEmail()) {
    formValid = false;
  }


  if (formValid) {
    status.textContent = "Your account is being created...";
  } else {
    status.textContent = "You are missing some requirements";
  }
}


function checkEmptyFields() {
  let formValid = true;
  if (fname.value === "") {
    fname.classList.add("emptyField");
    formValid = false;
  } else {
    fname.classList.remove("emptyField");
  }

  if (lname.value === "") {
    lname.classList.add("emptyField");
    formValid = false;
  } else {
    lname.classList.remove("emptyField");
  }

  if (email.value === "") {
    email.classList.add("emptyField");
    formValid = false;
  } else {
    email.classList.remove("emptyField");
  }

  if (password.value === "") {
    password.classList.add("emptyField");
    formValid = false;
  } else {
    password.classList.remove("emptyField");
  }

    console.log("EF: " + formValid);
  return formValid
}


function validatePassword() {
  showPWRequirements(password)

  //password length
  let formValid = true;

  if (password.value.length > 0) {
    password.classList.remove("emptyField");
  }

  if (password.value.length >= 8) {
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

  console.log("PW: " + formValid);
  return formValid;
}

/*Try to see if you can make it have a  smooth dropdown animation */
function showPWRequirements(password) {
  requirements.style.display = password.length > 0 ? "none" : "block";
}

function validateEmail() {
  let formValid = true;

  if (/[^@]+@[^@]+/.test(email.value)) {
    email.classList.remove("emptyField");
    emailStatus.textContent = "";
   
  } else {
    emailStatus.textContent = "Invalid Email";
    email.classList.add("emptyField");
    formValid = false;
  }
  
  console.log("Email: " + formValid);
  return formValid;
}