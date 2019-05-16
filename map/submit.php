<!DOCTYPE html>

<html lang="en-US">
<?php
include('session.php');
$user =  $login_session;
?>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.slider.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/fileinput.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>Post</title>

</head>

<body class="page-sub-page page-submit">
<!-- Wrapper -->
<div class="wrapper">
    <!-- Navigation -->
    <div class="navigation">
	
        <div class="container" >
		
            <header class="navbar">    
		
                        <a href="index-google-map-fullscreen.html"><img style ="width:50px; margin:-15px; padding:-15px;;"src="assets/img/back2.png" alt="HOME"><font style="font-style:bold; color:black;"> Home</font></a>              
            </header>	
        </div>   
	
	</div>
    <!-- end Navigation -->
	
    <!-- Page Content -->
    <div id="page-content">

        <div class="container">
            
            <form role="form" id="form-submit" class="form-submit" action="upload1.php" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="user" value="<?php echo $user; ?>">
				<div class="row">
                    <div class="block">
                        <div class="col-md-9 col-sm-9">
                            <section id="submit-form">
							
							
                                <section>
                                    <div class="row">
                                        <div class="block clearfix">
                                            <div class="col-md-6 col-sm-6">
                                                <section id="summary">
                                                    <header><h2>Post</h2></header>
                                                    <div class="center">
                                        <div class="form-group">
                                            <input id="file-upload" name="file" type="file" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" data-browse-class="btn btn-default" data-browse-label="Photo or Video">
                                            <figure class="note"><strong>Hint:</strong> Max size of file 100MB</figure>
                                        </div>
                                    </div>
                                                </section><!-- /#summary -->
                                            </div><!-- /.col-md-6 -->
                                            <div class="col-md-6 col-sm-6">
                                                <section id="place-on-map">
                                                    <header class="section-title">
                                                        <h2>Place on Map</h2>
														
                                                        
                                                    </header>
                                                    <div class="form-group">
                                                        <label for="address-map" class="link-arrow geo-location">Get My Position</label><p>(If GPS error enter location below)</p>
                                                        <input type="text" class="form-control" id="address-map" name="address">
                                                    </div><!-- /.form-group -->
                                                    <label for="address-map">Or drag the marker to your position</label>
                                                    <div id="submit-map"></div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="latitude" name="lat" readonly>
                                                            </div><!-- /.form-group -->
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="longitude" name="long" readonly>
                                                            </div><!-- /.form-group -->
                                                        </div>
                                                    </div>
                                                </section><!-- /#place-on-map -->
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.block -->
                                    </div><!-- /.row -->
                                </section>
							
                                <section id="basic-information">
                                    
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="submit-title">Situation</label>
                                                <select class="form-control" id="submit-title" name="situation">
												<option class="fa fa-ambulance" value="Accident">Accident</option>
												<option class="fa fa-fire" value="Fire">Fire</option>
												<option class="fa fa-warning" value="Flood">Flood</option>
											</select>
                                            </div><!-- /.form-group -->
                                        </div>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="submit-description">Caption</label>
                                        <textarea class="form-control" id="submit-description" rows="8" name="cap" required></textarea>
                                    </div><!-- /.form-group -->
                                </section><!-- /#basic-information -->


                               

                                
                                <hr>
                            </section>
                        </div><!-- /.col-md-9 -->
                        
                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="block">
                        <div class="col-md-9 col-sm-9">
                            <div class="center">
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-default large">Post</button>
                                </div><!-- /.form-group -->
                                 </div>
                        </div>
                        
                    </div>
                </div>
            </form><!-- /#form-submit -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
    
	</div>

<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/icheck.min.js"></script>
<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/js/fileinput.min.js"></script>
<script type="text/javascript" src="assets/js/custom-map.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
<![endif]-->

<script>
    var _latitude = 48.87;
    var _longitude = 2.29;

    google.maps.event.addDomListener(window, 'load', initSubmitMap(_latitude,_longitude));
    function initSubmitMap(_latitude,_longitude){
        var mapCenter = new google.maps.LatLng(_latitude,_longitude);
        var mapOptions = {
            zoom: 15,
            center: mapCenter,
            disableDefaultUI: false,
            //scrollwheel: false,
            styles: mapStyles
        };
        var mapElement = document.getElementById('submit-map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new MarkerWithLabel({
            position: mapCenter,
            map: map,
            icon: 'assets/img/marker.png',
            labelAnchor: new google.maps.Point(50, 0),
            draggable: true
        });
        $('#submit-map').removeClass('fade-map');
        google.maps.event.addListener(marker, "mouseup", function (event) {
            var latitude = this.position.lat();
            var longitude = this.position.lng();
            $('#latitude').val( this.position.lat() );
            $('#longitude').val( this.position.lng() );
        });

//      Autocomplete
        var input = /** @type {HTMLInputElement} */( document.getElementById('address-map') );
        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);
        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);
            $('#latitude').val( marker.getPosition().lat() );
            $('#longitude').val( marker.getPosition().lng() );
            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }
        });

    }

    function success(position) {
        initSubmitMap(position.coords.latitude, position.coords.longitude);
        $('#latitude').val( position.coords.latitude );
        $('#longitude').val( position.coords.longitude );
    }

    $('.geo-location').on("click", function() {
        if (navigator.geolocation) {
            $('#submit-map').addClass('fade-map');
            navigator.geolocation.getCurrentPosition(success);
        } else {
            error('Geo Location is not supported');
        }
    });











</script>

</body>
</html>