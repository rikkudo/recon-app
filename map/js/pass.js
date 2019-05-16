$(document).ready(function() {
            
			$("#form-account-password-submit").click(function(){
				var url = "https://vcond.000webhostapp.com/save-pass.php";
				var username = localStorage.getItem("username");
				var pass= $('#form-account-password-current').val().length;
				var pass2= $.trim($('#form-account-password-new').val());
				var pass3= $.trim($('#form-account-password-current').val());
				
				if (pass<=7) {		
				$(".pesan-pass").css('display','block');
				//return false;
			} else {
				$(".pesan-pass").css('display','none');
			}
			if (pass3 != pass2) {		
				$(".pesan-pass2").css('display','block');
				//return false;
			} else {
				$(".pesan-pass2").css('display','none');
			
				
                //var pass3= $.trim($('#form-account-password-current').val());
            
				console.log(pass3);

                $("#status").text("Authenticating...");
                var input ="pass="+pass3+"&username="+username+"&login=";
                $.ajax({
                    type: "POST",crossDomain: true, cache: false,
                    url: url,
                    data: input,
                    success: function(data){
                        if(data == "success") {
                            $("#status").text("Password updated");
                        }
                        else if(data == "error")
                        {
							console.log(data);
                            $("#status").text("Update password failure");
                        }
                    }
                });
			}
			//console.log();
            });
			
			$("#logout").click(function(){
				window.localStorage.removeItem("loggedIn");
				window.localStorage.removeItem("username");
				
            });
});