
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Maps JavaScript API Search Along a Route Example</title>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAR9Ai-zyevHDadqsbSaltmA-Sy4HhUmU0&signed_in=true&callback=initializeMap" async defer></script>
    <script src="js/routeBoxer.js" type="text/javascript"></script>
    <script type="text/javascript">
    
    var map = null;
    var boxpolys = null;
    var directions = null;
   // var routeBoxer = new routerBox;
    var routeBoxer = null;
    var distance = null; // km
    
    function initialize() {
      // Default the map view to the continental U.S.
      var mapOptions = {
        center: new google.maps.LatLng(37.09024, -95.712891),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: 4
      };
      
      map = new google.maps.Map(document.getElementById("map"), mapOptions);
      routeBoxer = new RouteBoxer();
      
      directionService = new google.maps.DirectionsService();
      directionsRenderer = new google.maps.DirectionsRenderer({ map: map });      
    }
    
    function route() {
      // Clear any previous route boxes from the map
      clearBoxes();
      
      // Convert the distance to box around the route from miles to km
      distance = parseFloat(document.getElementById("distance").value) * 1.609344;
      
      var request = {
        origin: document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
      }
      
      // Make the directions request
      directionService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
          directionsRenderer.setDirections(result);
          
          // Box around the overview path of the first route
          var path = result.routes[0].overview_path;
          var boxes = routeBoxer.box(path, distance);
          drawBoxes(boxes);

        } else {
          alert("Directions query failed: " + status);
        }
      });
    }
    
    // Draw the array of boxes as polylines on the map
    function drawBoxes(boxes) {
      boxpolys = new Array(boxes.length);
      for (var i = 0; i < boxes.length; i++) {
        boxpolys[i] = new google.maps.Rectangle({
          bounds: boxes[i],
          fillOpacity: 0,
          strokeOpacity: 1.0,
          strokeColor: '#000000',
          strokeWeight: 1,
          map: map
        });
      }
    }
    
    // Clear boxes currently on the map
    function clearBoxes() {
      if (boxpolys != null) {
        for (var i = 0; i < boxpolys.length; i++) {
          boxpolys[i].setMap(null);
        }
      }
      boxpolys = null;
    }
  </script>
  <style>
    #map {
      border: 1px solid black;
    }
  </style>
  </head>
  <body onload="initialize();">
    <div id="map" style="width: 800px; height: 600px;"></div>
    Box within at least <input type="text" id="distance" value="30" size="2">miles
    of the route from <input type="text" id="from" value="colombo"/>
    to <input type="text" id="to" value="kandy"/>
    <input type="submit" onclick="route()"/>
  </body>
</html>