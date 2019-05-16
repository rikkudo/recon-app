
var username, obj, dbParam, xmlhttp, myObj, x, txt = "";
username = localStorage.getItem("username");
dbParam = JSON.stringify(username);

xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    myObj = JSON.parse(this.responseText);
    for (x in myObj) {
      txt += myObj[x].phone;
    }
    document.getElementById("form-account-phone").value = txt;
  }
};
xmlhttp.open("POST", "https://vcond.000webhostapp.com/pengguna3.php", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.send("username=" + dbParam);
