/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var directionsService; 
var directionsDisplay;
var map;
var flightPlanCoordinates = [];

function initializeMap() {
    
    console.log("Inside initializeMap()");
    
    directionsService = new google.maps.DirectionsService;
    directionsDisplay = new google.maps.DirectionsRenderer;
    geocoder = new google.maps.Geocoder();
    
    map = new google.maps.Map(document.getElementById('googlemap'), {
    zoom: 8,
    center: {lat: 7.8578, lng: 80.6525}
    
    });
    directionsDisplay.setMap(map); 
    setPath();
    drawPolyline();

}
/***Setting the map***************************************************************************************************************/

//Set the makers on the map
function setPath(){
    
    console.log("Inside setPath()"); 
    
    geocodeStartAddress(geocoder, map, startPoint);
    geocodeEndAddress(geocoder, map, endPoint);
    
    for(var i=0; i< waypoints.length ;i++){  
        
        var address = waypoints[i]; 
        //console.log(address);
        geocodeWaypointAddress(geocoder, map, address);
    }
    
}

//Set the geocode address
function geocodeStartAddress(geocoder, resultsMap, address) {
    
    console.log("Inside geocodeStartAddress()"); 
    
    geocoder.geocode({'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
        //resultsMap.setCenter(results[0].geometry.location);
        startpointmarker = new google.maps.Marker({
        map: resultsMap,
        position: results[0].geometry.location,
        animation:google.maps.Animation.BOUNCE
      });
      startpointmarker.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
      //flightPlanCoordinates.push(results[1].geometry.location); 
      //console.log(results[0].geometry.location);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}


/*
 * Sets the End location
 */

function geocodeEndAddress(geocoder, resultsMap, address) {
    
    geocoder.geocode({'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
        //resultsMap.setCenter(results[0].geometry.location);
        endpointmarker = new google.maps.Marker({
        map: resultsMap,
        position: results[0].geometry.location,
        animation:google.maps.Animation.BOUNCE
      });
      endpointmarker.setIcon('http://maps.google.com/mapfiles/ms/icons/red-dot.png');
      //flightPlanCoordinates.push(results[1].geometry.location); 
      //console.log(results[0].geometry.location);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

/*
 * Sets the WayPoint
 */

function geocodeWaypointAddress(geocoder, resultsMap, address) {
    
     geocoder.geocode({'address': address}, function(results, status) {
    if (status === google.maps.GeocoderStatus.OK) {
        //resultsMap.setCenter(results[0].geometry.location);
        waypointsmarker = new google.maps.Marker({
        map: resultsMap,
        position: results[0].geometry.location
        //animation:google.maps.Animation.BOUNCE
      });
      waypointsmarker.setIcon('http://maps.google.com/mapfiles/ms/icons/blue-dot.png');
      flightPlanCoordinates.push(results[0].geometry.location); 
      //console.log(results[6].geometry.location);
    } else {
      alert('Geocode was not successful for the following reason: ' + status);
    }
  });
}

 //Set the path on the map
 
 function drawPolyline(){
   

     
   var flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    geodesic: true,
    strokeColor: '#FF0000',
    strokeOpacity: 1.0,
    strokeWeight: 2
  });
   console.log("Inside drawPolyline()"); 
  flightPath.setMap(map);
 }

/***Button Methods***************************************************************************************************************/

/*****Plan City Route button Method*****/

function btnPlanCityRoute(){
    
    var value = document.getElementById('select_city').value;
    if(value){
        //alert("Your are a - " + radioValue);
        window.location = "http://localhost:8000/cityplan/"+value;
    } else{
        alert("Please select any city");      
    } 
    
}

/*****Delete button Method*****/
function btnDelete(){
    
    var token = $('input[name="_token"]').val();
    //alert(token)
    
        if (confirm('Delete this saved tour ?')){
                  
            $.ajax({
                url: '/tour/'+tour_id,
                type: 'DELETE',
                data: {'_method': 'DELETE','_token': token},
                success: function(affectedRows) {
                if (affectedRows > 0) window.location.href = '/tour';              
                }
            });
        
 
    } else{
        alert("Please select any tour");      
    }
}
    
