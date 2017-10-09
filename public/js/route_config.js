
    
    var map = null;
    var boxpolys = null;
    var directions = null;
   // var routeBoxer = new routerBox;
    var routeBoxer = null;
    var distance = null; // km
    var service = null;
    var myLocation;
    var infoWindow;
    var gmarkers = [];



    
    function initialize() {
      // Default the map view to the continental U.S.
      var mapOptions = {
       // center: new google.maps.LatLng(37.09024, -95.712891),
        center: {lat: 7.8578, lng: 80.6525},
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: 8
      };
      
      map = new google.maps.Map(document.getElementById("googlemap"), mapOptions);
      routeBoxer = new RouteBoxer();

      
      directionService = new google.maps.DirectionsService();
      directionsRenderer = new google.maps.DirectionsRenderer({ map: map });   

      service = new google.maps.places.PlacesService(map);   
      infoWindow = new google.maps.InfoWindow;

       if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            myLocation = pos;

            // infoWindow.setPosition(pos);
            // infoWindow.setContent('Your Location.');
            // infoWindow.open(map);
            map.setCenter(pos);
            var marker = new google.maps.Marker({
              map: map,
              position: pos,
              title: "Your Location",
              // icon: {
              //   url: 'https://developers.google.com/maps/documentation/javascript/images/circle.png',
              //   anchor: new google.maps.Point(20, 20),
              //   scaledSize: new google.maps.Size(10, 17)
              // }
            });

          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
    } 
    

     function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }


    
    function route() {
      // Clear any previous route boxes from the map
      clearBoxes();
      
      // Convert the distance to box around the route from miles to km
      distance = parseFloat(document.getElementById("distance").value) * 1.609344;

      if(document.getElementById("from").value == "my"){
      var request = {
        origin: myLocation,//document.getElementById("from").value,
        destination: document.getElementById("to").value,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
      }
      }

      else{
        var request = {
          origin: document.getElementById("from").value,
          destination: document.getElementById("to").value,
          travelMode: google.maps.DirectionsTravelMode.DRIVING
      }
      } 
      
      // Make the directions request
      directionService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
          directionsRenderer.setDirections(result);
          
          // Box around the overview path of the first route
          var path = result.routes[0].overview_path;
          var boxes = routeBoxer.box(path, distance);
          
          //remove previosuly added markers
          removeMarkers();

          //search for the places
         // findPlaces(boxes);

          //creating bounds
          drawBoxes(boxes);

          //search places within the bound
          searchBounds(boxes);

        } else {
          alert("Directions query failed: " + status);
        }
      });

    }

    function findPlaces(boxes) {
       var data = "";

       for (var i = 0; i < boxes.length; i++) {
        //form the query string that will be sent via ajax
        if (data != "") {
         data += "&";
        }

        data += "boxes[]=" + boxes[i].getNorthEast().lat() + ":" + boxes[i].getNorthEast().lng() + "-" + boxes[i].getSouthWest().lat() + ":" + boxes[i].getSouthWest().lng();
       } 

       //console.log(data);
       
       var response = $.parseJSON($.ajax({
                        method: 'POST', 
                        url: '/route/place', 
                        data: {
                         "_token": "{{ csrf_token() }}",
                         "data":data
                        }, 
                        dataType: "json", 
                        async: false
                   }).responseText);




        //console.log(response[0].latitude);

        for(var i=0;i<=response.length;i++){
          var coords = new google.maps.LatLng(response[i].latitude, response[i].longitude);
          var title = response[i].name;
        //   //createMarker(map, coords, response[i].title);

          var marker = new google.maps.Marker({
            map: map,
            position: coords,
            title: title,
            // icon: {
            //   url: 'https://developers.google.com/maps/documentation/javascript/images/circle.png',
            //   anchor: new google.maps.Point(10, 10),
            //   scaledSize: new google.maps.Size(10, 17)
            // }
          });

          gmarkers.push(marker);
        
        }

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

  function removeMarkers(){
    for(i=0; i<gmarkers.length; i++){
        gmarkers[i].setMap(null);
    }
  }


////////////////////////////////////////////////////////////////////


  function searchBounds(bound) {

   for (var i = 0; i < bound.length; i++) {
     (function(i) {
       setTimeout(function() { 



         // Perform search on the bound and save the result
         performSearch(bound[i]);

         //If the last box
         if ((bound.length - 1) === i) {
           addAllMarkers(bound);
         }
       }, 400*i);
     }(i));
   }
 }


 function performSearch(bound) {
   var request = {
     bounds: bound,
     keyword: 'hotels'
   };
      console.log(bound);

   currentBound = bound;
   service.radarSearch(request, callback);
 }

 // Call back function from the radar search

 function callback(results, status) {
   var allPlaces = [];

   if (status !== google.maps.places.PlacesServiceStatus.OK) {
     console.error(status);
     return;
   }
   //console.log(results);

   for (var i = 0; result = results[i]; i++) {
     addAllMarkers(result);
     // Go through each result from the search and if the place exist already in our list of places then done push it in to the array
     // if (!placeExists(result.id)) {
       allPlaces.push(result);
     // }

     
   }
 // console.log(allPlaces);
   addAllMarkers(result);

   //bound.contains(new google.maps.LatLng(allPlaces[j].geometry.location.lat(), allPlaces[j].geometry.location.lng()))
 }

 function addAllMarkers(place) {
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location,
          // icon: {
          //   url: 'https://developers.google.com/maps/documentation/javascript/images/circle.png',
          //   anchor: new google.maps.Point(10, 10),
          //   scaledSize: new google.maps.Size(10, 17)
          // }
        });

  }