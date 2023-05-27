var fnameError = document.getElementById("fnameError");
var lnameError = document.getElementById("lnameError");
var nicError = document.getElementById("nicError");
var usernameError = document.getElementById("usernameError");
var contactError = document.getElementById("contactError");
var emailError = document.getElementById("emailError");

function fnameValidation() {
  var fname = document.getElementById("fname").value;

  if (fname.length == 0) {
    fnameError.innerHTML = "First name required!";
    return false;
  }
  if (!fname.match(/^[a-zA-Z\s]*$/)) {
    fnameError.innerHTML = "Name should only contain letters";
    return false;
  }
  if (fname.length > 15) {
    fnameError.innerHTML = "Name should be no more than 15 characters";
    return false;
  }
  fnameError.innerHTML = "";
  return true;
}

function lnameValidation() {
  var lname = document.getElementById("lname").value;

  if (lname.length == 0) {
    lnameError.innerHTML = "Last name required!";
    return false;
  }
  if (!lname.match(/^[a-zA-Z\s]*$/)) {
    lnameError.innerHTML = "Name should only contain letters";
    return false;
  }
  if (lname.length > 15) {
    lnameError.innerHTML = "Name should be no more than 15 characters";
    return false;
  }
  lnameError.innerHTML = "";
  return true;
}

function nicValidation() {
  var nic = document.getElementById("nic").value;

  if (nic.length == 0) {
    nicError.innerHTML = "NIC required!";
    return false;
  }
  if (nic.length < 10 || nic.length > 12) {
    nicError.innerHTML = "NIC should be between 10 - 12 characters";
    return false;
  }
  nicError.innerHTML = "";
  return true;
}

function contactValidation() {
  var contact = document.getElementById("contact").value;

  if (contact.length == 0) {
    contactError.innerHTML = "Contact number required!";
    return false;
  }
  if (!contact.match(/^\d{10}$/)) {
    contactError.innerHTML = "Contact should be only 10 digits";
    return false;
  }
  contactError.innerHTML = "";
  return true;
}

function emailValidation() {
  var email = document.getElementById("email").value;

  if (email.length == 0) {
    emailError.innerHTML = "Email address required!";
    return false;
  }
  if (!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
    emailError.innerHTML = "Invalid email address";
    return false;
  }
  emailError.innerHTML = "";
  return true;
}

function validateForm() {
  if (
    !fnameValidation() ||
    !lnameValidation() ||
    !nicValidation() ||
    !contactValidation() ||
    !emailValidation()
  ) {
    fnameValidation();
    lnameValidation();
    nicValidation();
    contactValidation();
    emailValidation();
    return false;
  }
}
