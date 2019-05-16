$(document).ready(function() {
            var url = "https://vcond.000webhostapp.com/pengguna.php";
			var username = localStorage.getItem("username");
        
                 
                 var loginString ="username="+username+"&login=";
                $.ajax({
                    type: "POST",crossDomain: true, cache: false,
                    url: url,
                    data: loginString,
                    success: function(data){
                       /* if(data == "success") {
							$("#form-account-name").val("ss");
                            alert("sukses");
                        }
                        else if(data == "error")
                        {
                            alert("gagal");
                        } */
						//var obj = JSON.parse(data.responseText);
 //var id=field.id;

						//$("#form-account-name").val(obj.name);
						
						console.log(JSON.parse(JSON.stringify(data.email)));
						$('#form-account-user').val(JSON.parse(JSON.stringify(data.user)));
						$('#form-account-name').val(JSON.parse(JSON.stringify(data.name)));
						$('#form-account-email').val(JSON.parse(JSON.stringify(data.email)));
						$('#form-contact-agent-message').val(JSON.parse(JSON.stringify(data.bio)));
						$('#form-account-phone').val(JSON.parse(JSON.stringify(data.phone)));
						
						
						
					
                    },
                error: function(data){
            //console.log(data);
            alert('There was an error ');
        },
				});
            
			$("#form-account-password-submit").click(function(){
				var url2 = "https://vcond.000webhostapp.com/input-profile.php";
				
				
                var username2= $.trim($('#form-account-user').val());
                var fullname2= $.trim($('#form-account-name').val());
                var email2= $.trim($('#form-account-email').val());
                var bio2= $.trim($('#form-contact-agent-message').val());
                var phone2= $.trim($('#form-account-phone').val());
				console.log(bio2);

                $("#status").text("Authenticating...");
                var input ="username="+username2+"&fullname="+fullname2+"&email="+email2+"&bio="+bio2+"&phone="+phone2+"&login=";
                $.ajax({
                    type: "POST",crossDomain: true, cache: false,
                    url: url2,
                    data: input,
                    success: function(data){
                        if(data == "success") {
                            $("#status").text("Profile updated");
                        }
                        else if(data == "error")
                        {
							console.log(data);
                            $("#status").text("Update failure");
                        }
                    }
                });
			//console.log();
            });
			
			$("#logout").click(function(){
				window.localStorage.removeItem("loggedIn");
				window.localStorage.removeItem("username");
				
            });
});