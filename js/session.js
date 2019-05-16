$(document).ready(function() {
if(localStorage.getItem("loggedIn") == 1) {
window.location.href = "map/index.html";
}
else
{
window.location.href = "map.html";
}
});