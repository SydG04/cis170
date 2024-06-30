function showPassword(event) {
  event.preventDefault();
  let visibilityIcon = document.getElementById("visibilityIcon");
  if (password.type === "password") {
    password.type = "text";
    visibilityIcon.src = "assets/svgs/visibility_off.svg";
  } else {
    password.type = "password";
    visibilityIcon.src = "assets/svgs/visibility.svg";
  }
}