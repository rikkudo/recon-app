$(document).ready(function() {
	$.post("https://vcond.000webhostapp.com/pengguna2.php",{
username : $(localStorage.getItem("username"));
var url = "";
var loginString ="username="+username;

$.ajax({
                    type: "POST",crossDomain: true, cache: false,
                    url: url,
                    data: loginString
					
});
					
					.done(function( hasilajax ) {   // KETIKA PROSES Ajax Request Selesai
        $('#form-account-name').val(hasilajax);  // Isikan hasil dari ajak ke field 'nama' 
		 //$('#form-account-phone').val(hasilajax.phone);
    });
                  
                
});