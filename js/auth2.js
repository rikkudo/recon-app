$(document).ready(function() {
            var url = "https://vcond.000webhostapp.com/auth.php";
            
            $("#loginButton").click(function(){				
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
                            $("#status").text("Login Failed..!");
                        }
                    }
                });
            });

            $("#registerButton").click(function() {
		
				var nama2= $('#username').val().length;
				var full2= $('#fullname').val().length;
				var pass2= $('#pass').val().length;				
				var email2= $("#email").val();
				var atpos= email2.indexOf("@");
				var dotpos= email2.lastIndexOf(".");
				
				if(atpos<1 || dotpos<atpos+2 || dotpos+2>=email2.length){				
				$(".pesan-mail").css('display','block');
				//return false;
			} 
			else {
				$(".pesan-mail").css('display','none');
				//return true;				
			} 
			 if (full2 == 0){
				$(".pesan-full").css('display','block');					
				//return false;
			} else {
				$(".pesan-full").css('display','none');	
			}
			 if (nama2 == 0) {
				$(".pesan-nama").css('display','block');
				//return false;
			} else {
				$(".pesan-nama").css('display','none');
				//return true;
			} 
			
			if (pass2<=7) {		
				$(".pesan-pass").css('display','block');
				//return false;
			} else {
				$(".pesan-pass").css('display','none');
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
                        if(data == "success"){
                            $("#status").text("Registered success");
						}
                        else if( data == "exist"){
                            $("#status").text("Email is already exist");
						}
                        else if(data == "error"){
                            $("#status").text("Username is already exist");
						}
                    },
					 error: function(data){
            console.log(data);
            alert('There was an error ');
        },
                });
			}
            });
        });