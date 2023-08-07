const registerButton = document.getElementById("register");
const loginButton = document.getElementById("login");
const box = document.getElementById("box");

registerButton.addEventListener("click", () => {
  box.classList.add("right-panel-active");
});

loginButton.addEventListener("click", () => {
  box.classList.remove("right-panel-active");
});

// //Login Form Validation
const emaill = document.getElementById("emaill");
const passwordd = document.getElementById("passwordd");

const email_errorr = document.getElementById("email_errorr");
const pass_errorr = document.getElementById("pass_errorr");

emaill.addEventListener("textInput", email_Verifyy);
passwordd.addEventListener("textInput", pass_Verifyy);

function validationn() {
  if (emaill.value == "") {
    email_errorr.style.display = "block";
    emaill.style.border = "1px solid red";
    return false;
  }
  if (passwordd.value == "") {
    pass_errorr.style.display = "block";
    passwordd.style.border = "1px solid red";
    return false;
  }
}

function email_Verifyy() {
  if (emaill.value.length >= 3) {
    email_errorr.style.display = "none";
    emaill.style.border = "none";
    return true;
  }
}
function pass_Verifyy() {
  if (passwordd.value.length >= 4) {
    pass_errorr.style.display = "none";
    passwordd.style.border = "none";
    return true;
  }
}

// Admin check
document.getElementById("login-form").addEventListener("submit", auth);

function auth(event) {
  event.preventDefault();

  if (emaill.value === "admin@gmail.com" && passwordd.value === "admin") {
    window.location.replace("../Dashboard/dashboard.php");
  } else if (emaill.value != "" && passwordd.value != "") {
    window.location.replace("../index.html");
  }
}

//Register Form Validation
const name = document.getElementById("name");
const email = document.getElementById("email");
const password = document.getElementById("password");

const name_error = document.getElementById("name_error");
const email_error = document.getElementById("email_error");
const pass_error = document.getElementById("pass_error");

name.addEventListener("textInput", name_Verify);
email.addEventListener("textInput", email_Verify);
password.addEventListener("textInput", pass_Verify);

function validation() {
  if (name.value == "") {
    name_error.style.display = "block";
    name.style.border = "1px solid red";
    return false;
  }
  if (email.value == "") {
    email_error.style.display = "block";
    email.style.border = "1px solid red";
    return false;
  }
  if (password.value == "") {
    pass_error.style.display = "block";
    password.style.border = "1px solid red";
    return false;
  }
}

function name_Verify() {
  if (name.value.length >= 1) {
    name_error.style.display = "none";
    name.style.border = "none";
    return true;
  }
}
function email_Verify() {
  if (email.value.length >= 3) {
    email_error.style.display = "none";
    email.style.border = "none";
    return true;
  }
}
function pass_Verify() {
  if (password.value.length >= 5) {
    pass_error.style.display = "none";
    password.style.border = "none";
    return true;
  }
}
