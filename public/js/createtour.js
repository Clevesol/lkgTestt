/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var directionsService; 
var directionsDisplay;
var startpoint = [];
var endpoint = [];
var waypoints = [];
var map;
var optimumroute = [];



var directionService = new google.maps.DirectionsService();
//var routeBoxer = new RouteBoxer();
var routeBoxer = null;
var distance = 0.01; // km

var boxpolys = null;
 


function initializeMap() {
    
    directionsService = new google.maps.DirectionsService;
    directionsDisplay = new google.maps.DirectionsRenderer;
    routeBoxer = new RouteBoxer();

    map = new google.maps.Map(document.getElementById('googlemap'), {
    zoom: 9,
    center: {lat: 7.8578, lng: 80.6525}
    
});

directionsDisplay.setMap(map);
 
var geocoder = new google.maps.Geocoder();

document.getElementById('btnSave').disabled = true;
document.getElementById('tourname').disabled = true;
    
/***Add action listener to Selection lists********************************************************/

    $('#select_startpoint').on('change',function(e){
    
        geocodeStartAddress(geocoder, map);
    
        var city = e.target.value; 
        
        $.get('/getcity?cityname='+city,function(data){
            
            //$('#div_description').empty();
            $('#div_details').empty();
            $('#div_details').append('\n\
                <div class="content-section2">\n\
                        <p class="lead"><b>'+data.name+'</b></p>\n\
                        <p class="follow"><b>Province : </b>'+data.province+'\n\
                        <p class="follow"><b>District : </b>'+data.district+'</p>\n\
                        <p class="follow"><b>Population: </b>'+data.population+'</p>\n\
                        <p class="follow"><b>Area: </b>'+data.area+'sqm</p>\n\
                        <p class="follow"><b>Elevation: </b>'+data.elevation+' m</p>\n\
                        <p class="follow"><b>'+data.description+'</b></p>\n\
                </div>\n\
            </div>');
            
    
            $('#div_img').empty();
            $("#div_img").append('<div class="content-section2">\n\
                        <img class="img-responsive" src='+data.picture+'>\n\
                    </div>'
            );
        });
    });

    $('#select_endpoint').on('change',function(e){
    
        geocodeEndAddress(geocoder, map);
    
        var city = e.target.value; 
        
        $.get('/getcity?cityname='+city,function(data){
           
            //$('#div_description').empty();
            $('#div_details').empty();
            $('#div_details').append('\n\
                <div class="content-section2">\n\
                        <p class="lead"><b>'+data.name+'</b></p>\n\
                        <p class="follow"><b>Province : </b>'+data.province+'\n\
                        <p class="follow"><b>District : </b>'+data.district+'</p>\n\
                        <p class="follow"><b>Population: </b>'+data.population+'</p>\n\
                        <p class="follow"><b>Area: </b>'+data.area+'sqm</p>\n\
                        <p class="follow"><b>Elevation: </b>'+data.elevation+' m</p>\n\
                        <p class="follow"><b>'+data.description+'</b></p>\n\
                </div>\n\
            </div>');
    
            $('#div_img').empty();
            $("#div_img").append('<div class="content-section2">\n\
                        <img class="img-responsive" src='+data.picture+'>\n\
                    </div>'
                    );
        });
    });

    $('#select_city').on('change',function(e){
    
        geocodeWaypointAddress(geocoder, map);
    
        var city = e.target.value; 
        
        $.get('/getcity?cityname='+city,function(data){
           
            //$('#div_description').empty();
            $('#div_details').empty();
            $('#div_details').append('\n\
                <div class="content-section2">\n\
                        <p class="lead"><b>'+data.name+'</b></p>\n\
                        <p class="follow"><b>Province : </b>'+data.province+'\n\
                        <p class="follow"><b>District : </b>'+data.district+'</p>\n\
                        <p class="follow"><b>Population: </b>'+data.population+'</p>\n\
                        <p class="follow"><b>Area: </b>'+data.area+'sqm</p>\n\
                        <p class="follow"><b>Elevation: </b>'+data.elevation+' m</p>\n\
                        <p class="follow"><b>'+data.description+'</b></p>\n\
                </div>\n\
            </div>');
    
            $('#div_img').empty();
            $("#div_img").append('<div class="content-section2">\n\
                        <img class="img-responsive" src='+data.picture+'>\n\
                    </div>'
                    );
        });
    });
    
    /***Add action listener to Save button********************************************************/
 
    $("#btnSave").click(function(){ 
        
        //console.log(optimumroute);
        var path = JSON.stringify(optimumroute);
        var token = $('input[name="_token"]').val();
        console.log(path);
        //alert(path);
        $.post("/tour",
        {
            tourname: $("#tourname").val(),
            startpoint: $("#select_startpoint").val(),
            endpoint : $("#select_endpoint").val(),
            waypoints : path,
            '_token': token       
        },function(){
            alert("Tour has been saved");
            window.location.href = "/tour";
        });
    });
  
}
 
 
/************************************************************************************************************/
/*
 * Sets the start location
 */

function geocodeStartAddress(geocoder, resultsMap) {
    
    var address = document.getElementById('select_startpoint').value;

    geocoder.geocode({'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
        resultsMap.setCenter(results[0].geometry.location);
        deleteStartPointMarker();
        // Adds a marker to the map and push to the array
        startpointmarker = new google.maps.Marker({
        map: resultsMap,
        position: results[0].geometry.location,
        animation:google.maps.Animation.BOUNCE
      });
      startpointmarker.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
      startpoint.push(startpointmarker);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

/*
 * Sets the End location
 */

function geocodeEndAddress(geocoder, resultsMap) {
    
    var address = document.getElementById('select_endpoint').value;
    geocoder.geocode({'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
        resultsMap.setCenter(results[0].geometry.location);
        deleteEndPointMarker();
        // Adds a marker to the map and push to the array
        var endpointmarker = new google.maps.Marker({
        map: resultsMap,
        position: results[0].geometry.location,
        animation:google.maps.Animation.BOUNCE
      });
      endpointmarker.setIcon('http://maps.google.com/mapfiles/ms/icons/red-dot.png');
      endpoint.push(endpointmarker);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

/*
 * Sets the WayPoint
 */

function geocodeWaypointAddress(geocoder, resultsMap) {
    
    var address = document.getElementById('select_city').value;
    geocoder.geocode({'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
        resultsMap.setCenter(results[0].geometry.location);
        deleteWayPointMarker();
        // Adds a marker to the map and push to the array
        var waypointsmarker = new google.maps.Marker({
        map: resultsMap,
        position: results[0].geometry.location
      });
      waypointsmarker.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
      waypoints.push(waypointsmarker);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}


/***Markers*********************************************************************************************************/

// Sets the map on all markers in the array.

function setMapOnStartPoint(map) {
  for (var i = 0; i < startpoint.length; i++) {
    startpoint[i].setMap(map);
  }
}
function setMapOnEndPoint(map) {
  for (var i = 0; i < endpoint.length; i++) {
    endpoint[i].setMap(map);
  }
}
function setMapOnWayPoints(map) {
  for (var i = 0; i < waypoints.length; i++) {
    waypoints[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearStartPointMarkers() {
  setMapOnStartPoint(null);
}
function clearEndPointMarkers() {
  setMapOnEndPoint(null);
}
function clearWayPointsMarkers() {
  setMapOnWayPoints(null);
}

// Shows any markers currently in the array.
function showWayPointsMarkers() {
  setMapOnWayPoints();
}

// Deletes all markers in the array by removing references to them.
function deleteStartPointMarker() {
  clearStartPointMarkers();
  startpoint = [];
}
function deleteEndPointMarker() {
  clearEndPointMarkers();
  endpoint = [];
}
function deleteWayPointMarker() {
  clearWayPointsMarkers();
  waypoints = [];
}


/***Button Methoods***************************************************************************************************************/

//Add the selected city to the multiple selection 
function btnAdd(){
    
    var x = document.getElementById('select_city');
    var value = x.options[x.selectedIndex].text;
    var option = document.createElement("option");
    option.text = value;
    option.selected = true;
    document.getElementById('select_selected').add(option);
}

//Remove the selected city from the multiple selection 
function btnRemove(){
    
    var x = document.getElementById('select_selected');
    x.remove(x.selectedIndex);
}
//select all the entries in the multiple selection 
function setAllSelected(){
    
    var x = document.getElementById('select_selected');
    for (var i=0;i<x.length;i++){
        x.options[i].option.selected = true;
    }
    document.getElementById('select_selected').add(option);
}

/**getDirections**********************************************************************************/
function getDirections() {
    
    deleteStartPointMarker();
    deleteEndPointMarker();
    deleteWayPointMarker();
    calculateAndDisplayRoute(directionsService, directionsDisplay);

}

/**
   * Calculate the route between the selected way points and diaply path
   */  
function calculateAndDisplayRoute(directionsService, directionsDisplay) {
    
    $('#div_img').empty(); 
    clearBoxes();

    
    var waypts = [];
    var checkboxArray = document.getElementById('select_selected');
    
    for (var i = 0; i < checkboxArray.length; i++) {
        if (checkboxArray.options[i].selected) {
            waypts.push({
            location: checkboxArray[i].value,
            stopover: true
        });
        }
    }
    
    directionsService.route({
        origin: document.getElementById('select_startpoint').value,
        destination: document.getElementById('select_endpoint').value,
        waypoints: waypts,
        travelMode: google.maps.TravelMode.DRIVING,
        optimizeWaypoints: true,
        provideRouteAlternatives: true
    }, function(response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];


            var path = response.routes[0].overview_path;

            var boxes = routeBoxer.box(path, distance);
            drawBoxes(boxes);
            console.log(path);

            
             //bounds = routeBoxer.box(path, distance);

             //searchBounds(bounds);
            // drawBoxes(bounds);
                     
        /*****************************************
         * try save the response object    
            var json = JSON.stringify(route);
            console.log(json);
            
        **********************************************/
            
            // Inserting the optimized route into an array.
            optimumroute [0]= route.legs[0].start_address ;
            
            
            for (var i = 0; i < route.legs.length; i++) {           
               
               optimumroute [i+1] = route.legs[i].end_address;

            }



            console.log(optimumroute);
            // Displaying Route information in panel.            
            var summaryPanel = document.getElementById('div_details');
            summaryPanel.innerHTML = '<hr><Strong>Route Details</Strong></br></br>';   
           
            // For each route, display summary information.
            for (var i = 0; i < route.legs.length; i++) {
                var routeSegment = i + 1;
                summaryPanel.innerHTML += '<b>Route Segment: ' + routeSegment +'</b><br>';
                summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
                summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
                summaryPanel.innerHTML += route.legs[i].distance.text + '<br><br>';
           
            }
                document.getElementById('btnSave').disabled = false;
                document.getElementById('tourname').disabled = false;
                
        } else {
            window.alert('Directions request failed due to ' + status);
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

/*
* The search function is wrap around a for loop with a setTimeout so that the request are throttled to an avg of 10 a second that is the max request you can make on google
*/

// function searchBounds(bound) {
//    for (var i = 0; i < bound; i++) {
//      (function(i) {
//        setTimeout(function() {

//          // Perform search on the bound and save the result
//          performSearch(bound[i]);

//          //If the last box
//          if ((bound.length - 1) === i) {
//            addAllMarkers(bound);
//          }
//        }, 400);
//      }(i));
//    }
//  }


//  function performSearch(bound) {
//    var request = {
//      bounds: bound,
//      keyword: 'bars'
//    };


//    currentBound = bound;
//    service.radarSearch(request, callback);
//  }

//  // Call back function from the radar search

//  function callback(results, status) {
//    if (status !== google.maps.places.PlacesServiceStatus.OK) {
//      console.error(status);
//      return;
//    }

//    for (var i = 0, result; result = results[i]; i++) {
//      // Go through each result from the search and if the place exist already in our list of places then done push it in to the array
//      if (!placeExists(result.id)) {
//        allPlaces.push(result);
//      }
//    }
//  }

 