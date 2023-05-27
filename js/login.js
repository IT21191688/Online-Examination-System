var usernameError = document.getElementById("usernameError");
var pwdError = document.getElementById("pwdError");

function usernameValidation() {
  var username = document.getElementById("username").value;

  if (username.length == 0) {
    usernameError.innerHTML = "Username required!";
    return false;
  }
  if (username.length > 15) {
    usernameError.innerHTML = "Invalid username";
    return false;
  }
  if (!username.match(/^[a-z0-9_\@\.]+$/)) {
    usernameError.innerHTML = "Invalid username";
    return false;
  }
  usernameError.innerHTML = "";
  return true;
}

function pwdValidation() {
  var pwd = document.getElementById("pwd").value;

  if (pwd.length == 0) {
    pwdError.innerHTML = "Password required!";
    return false;
  }
  if (!pwd.match(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/)) {
    pwdError.innerHTML = "Invalid password";
    return false;
  }
  pwdError.innerHTML = "";
  return true;
}

function validateSubmit() {
  if (!usernameValidation() || !pwdValidation()) {
    usernameValidation();
    pwdValidation();
    return false;
  }
}
