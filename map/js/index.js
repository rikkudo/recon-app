var app = {
    // Application Constructor
    initialize: function() {
        this.bindEvents();
    },
    // Bind Event Listeners
    //
    // Bind any events that are required on startup. Common events are:
    // 'load', 'deviceready', 'offline', and 'online'.
    bindEvents: function() {
        document.addEventListener('deviceready', this.onDeviceReady, false);
    },
    // deviceready Event Handler
    //
    // The scope of 'this' is the event. In order to call the 'receivedEvent'
    // function, we must explicitly call 'app.receivedEvent(...);'
    onDeviceReady: function() {
       // app.receivedEvent('deviceready');
       navigator.geolocation.getCurrentPosition(app.onSuccess, app.onError);
    },

    onSuccess: function(position){
        var longitude = position.coords.longitude;
        var latitude = position.coords.latitude;
        var latLong = new google.maps.LatLng(latitude, longitude);

        var mapOptions = {
            center: latLong,
            zoom: 13,
			gestureHandling: 'greedy',
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
	var infoWindow = new google.maps.InfoWindow;
      var bounds = new google.maps.LatLngBounds();
	  
	   //var iconBase = 'https://vcond.000webhostapp.com/img/';
        var icons = {
          Accident: {
            url: 'https://vcond.000webhostapp.com/img/tabrakan2.png',
	 scaledSize: new google.maps.Size(50, 50), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
          },
          Fire: {
            url: 'https://vcond.000webhostapp.com/img/kebakaran.png',
	 scaledSize: new google.maps.Size(50, 50), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
          },
          Flood: {
            url: 'https://vcond.000webhostapp.com/img/banjir.png',
	 scaledSize: new google.maps.Size(50, 50), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
          },
		  Earthquake: {
            url: 'https://vcond.000webhostapp.com/img/gempa.png',
	 scaledSize: new google.maps.Size(50, 50), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
          }
        };
	  
        downloadUrl("https://vcond.000webhostapp.com/view.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
		  var caption = markers[i].getAttribute("caption");
		  var time = markers[i].getAttribute("time");
		  var file = markers[i].getAttribute("file");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<br/><div style='width:150px; height:200px;'><div width='100%'><img style='width:100%; height:100px;' alt='' src='https://vcond.000webhostapp.com/map/upload/" + file + "'></div><div class='inner' style='color:black;'>" + caption + "<figure style='color:green;'>(GMT+7)" + time + "</figure><div class='tag price'>" + type + "</div></div></div>";
          
		  var marker = new google.maps.Marker({
            map: map,
            position: point,
			icon: icons[type]
			
          });
          bindInfoWindow(marker, map, infoWindow, html);
          bounds.extend(marker.position);
        }
        map.fitBounds(bounds);
      });
	  
	   function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    },
    
    onError: function(error){
        alert("the code is " + error.code + ". \n" + "message: " + error.message);
    },
};

app.initialize();