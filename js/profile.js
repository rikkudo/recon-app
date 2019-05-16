$(document).ready(function() {
var username = window.localStorage.getItem("username");
var url = "https://vcond.000webhostapp.com/pengguna.php";
var sessionString ="username="+username+"&session=";
$.ajax({
                    type: "POST",crossDomain: true, cache: false,
                    url: url,
					dataType: 'jsonp',
		jsonp: 'jsoncallback',
		timeout: 5000,
                    data: sessionString,
                    success: function(data, status){
			$.each(data, function(i,item){ 
				$("#form-account-name").append(item.user);

				$("#form-account-phone").append(item.phone);
				$("#form-account-email").append(item.email);
				
			});
		},
		error: function(){
		   	alert('Error terjadi');
			}
                });
});