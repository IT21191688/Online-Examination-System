var usernameError = document.getElementById("usernameError");
var emailError = document.getElementById("emailError");
var pwdError = document.getElementById("pwdError");
var confirmError = document.getElementById("confirmpwdError");

function usernameValidation() {
  var username = document.getElementById("username").value;

  if (username.length == 0) {
    usernameError.innerHTML = "Username required";
    return false;
  }
  if (username.length < 4 || username.length > 15) {
    usernameError.innerHTML = "Username should be of length 4 - 15 characters";
    return false;
  }
  if (!username.match(/^[a-z0-9_\@\.]+$/)) {
    usernameError.innerHTML =
      "Usernames can only have lowercase letters, numbers, dots, @ & underscores";
    return false;
  }
  usernameError.innerHTML = "";
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

function pwdValidation() {
  var pwd = document.getElementById("pwd").value;

  if (pwd.length == 0) {
    pwdError.innerHTML = "Password required!";
    return false;
  }
  if (!pwd.match(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/)) {
    pwdError.innerHTML =
      "Password should contain at least one digit and one special character [7 - 15 characters]";
    return false;
  }
  pwdError.innerHTML = "";
  return true;
}

function confirmValidation() {
  var confirmpwd = document.getElementById("confirmPwd").value;
  var pwd = document.getElementById("pwd").value;

  if (confirmpwd.length == 0) {
    confirmpwdError.innerHTML = "Confirm your password!";
    return false;
  }
  if (confirmpwd != pwd) {
    confirmpwdError.innerHTML = "Password you entered does not match";
    return false;
  }
  confirmpwdError.innerHTML = "";
  return true;
}

function validateForm() {
  if (
    !usernameValidation() ||
    !emailValidation() ||
    !pwdValidation() ||
    !confirmValidation()
  ) {
    !usernameValidation();
    !emailValidation();
    !pwdValidation();
    !confirmValidation();
    return false;
  }
}
