/*https://codepen.io/pranjal9599/pen/yJRNoL*/
var icon = document.getElementById("icon");
var icon1 = document.getElementById("a");
var icon2 = document.getElementById("b");
var icon3 = document.getElementById("c");

icon.addEventListener('click', function() {
  icon1.classList.toggle('a');
  icon2.classList.toggle('c');
  icon3.classList.toggle('b');
});


/*https://www.w3schools.com/howto/howto_js_topnav_responsive.asp*/

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function dropDownNav() {
  var x = document.getElementById("navlist");
  if (x.className === "myNavList") {
    x.className += " responsive";
  } else {
    x.className = "myNavList";
  }
}

