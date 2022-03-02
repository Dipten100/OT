const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form.login");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link a");
signupBtn.onclick = () => {
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
};
loginBtn.onclick = () => {
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
};
signupLink.onclick = () => {
  signupBtn.click();
  return false;
};
function passWdCheck() {
  var pw1 = document.getElementById("passwd").value;
  var pw2 = document.getElementById("Cpasswd").value;
  if (pw1 == "") {
    document.getElementById("message4").innerHTML =
      "**Fill the password please!";
    return false;
  } else {
    document.getElementById("message4").innerHTML = "";
  }
  if (pw2 == "") {
    document.getElementById("message5").innerHTML =
      "**Enter the password please!";
    return false;
  } else {
    document.getElementById("message5").innerHTML = "";
  }
  if (pw1.length < 8) {
    document.getElementById("message4").innerHTML =
      "**length must be atleast 8 characters";
    return false;
  } else {
    document.getElementById("message4").innerHTML = "";
  }
  if (pw1.length > 15) {
    document.getElementById("message4").innerHTML =
      "**length must not exceed 15 characters";
    return false;
  } else {
    document.getElementById("message4").innerHTML = "";
  }
  if (pw1 != pw2) {
    document.getElementById("message5").innerHTML =
      "**Passwords are not same! Retry with new Password";
    return false;
  } else {
    document.getElementById("message5").innerHTML = "You can Submit Now";
    alert("password created successfully");
  }
}
function submit() {
  if (!window.confirm("Are You Want To Submit ")) {
    window.open("signIn.php");
  }
}
