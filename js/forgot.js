$(document).ready(function() {
            var url = "https://vcond.000webhostapp.com/lupa-pass.php";
            
            $("#loginButton").click(function(){
                var email= $.trim($("#email").val());
				var email2= $('#email').val().length;
               if (email2 == 0) {				
				$(".pesan-mail").css('display','block');
				//return false;
			   } else {
				$(".pesan-mail").css('display','none');

                $("#status").text("Authenticating...");
                var loginString ="email="+email+"&forget=";
                $.ajax({
                    type: "POST",crossDomain: true, cache: false,
                    url: url,
                    data: loginString,
                    success: function(data){
                        if(data == "success")
                            $("#status").text("Email has been sent");
                        else if(data == "error")
                            $("#status").text("Email is not registered");
						 else if(data == "error2")
                            $("#status").text("Email not send");
                    },
					 error: function(data){
            console.log(data);
			console.log(email);
            alert('There was an error ');
        },
                });
			}
            });

           
        });