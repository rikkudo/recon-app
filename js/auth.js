$(document).ready(function() {
            var url = "https://vcond.000webhostapp.com/auth2.php";
            
            $("#loginButton").click(function(){
				
				var nama2= $('#username').val().length;
				var pass2= $("#pass").val().length;
				if (nama2 == 0) {				
				$(".pesan-nama").css('display','block');
				return false;
			}else if (pass2 == 0) {
				$(".pesan-pass").css('display','block');
				return false;
			} else {
                var username= $.trim($("#username").val());
                var pass= $.trim($("#pass").val());

                $("#status").text("Authenticating...");
                var loginString ="username="+username+"&pass="+pass+"&login=";
                $.ajax({
                    type: "POST",crossDomain: true, cache: false,
                    url: url,
                    data: loginString,
                    success: function(data){
                        if(data == "success") {
                            $("#status").text("Login Success..!");
                            localStorage.loginstatus = "true";
							window.localStorage.setItem("loggedIn", 1);
							window.localStorage.setItem("username", username);
                            window.location.href = "map/index.html";
                        }
                        else if(data == "error")
                        {
                            $("#status").text("Username or Password Wrong..!");
                        }
                    }
                });
			}
            });

            $("#registerButton").click(function(){
                var email= $.trim($("#email").val());
                var pass= $.trim($("#pass").val());
				var fullname= $.trim($("#fullname").val());
				var username= $.trim($("#username").val());

                $("#status").text("Creating New Account...");
                var dataString="email="+email+"&pass="+pass+"&fullname="+fullname+"&username="+username+"&register=";
                $.ajax({
                    type: "POST",crossDomain: true, cache: false,
                    url: url,
                    data: dataString,
                    success: function(data){
                        if(data == "success")
                            $("#status").text("Registered success");
                        else if( data == "exist")
                            $("#status").text("Account is already there");
                        else if(data == "error")
                            $("#status").text("Register Failed");
                    }
                });
            });
        });