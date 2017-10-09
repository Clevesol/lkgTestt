/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var directionsService; 
var directionsDisplay;
var map;
var placemakers = [];
var infowindows = [];

/*
 * Initializes the map when page loads
 */ 
function initializeMap() {
    
    var myposition = {lat: city.latitude, lng: city.longitude};
    
    map = new google.maps.Map(document.getElementById('googlemap'), {
        zoom: 12,
        center: myposition
        
    });
    var marker = new google.maps.Marker({
        position: myposition ,
        animation: google.maps.Animation.BOUNCE
    });

    marker.setMap(map);
      
    setMarkers();
    /***
     * Adding Action listners to elements
     * 
     ***/
   
   /***Add action listener to Selection list********************************************************/

    $('#select_place').on('change',function(){   
        
        var place = document.getElementById('select_place').value;
        
        $.get('/getplace?placename='+place,function(data){
        
            //alert("Data: " + data.name);
            //console.log(data.picture);
            $('#div_description').empty();
            $("#div_description").append('<div class="content-section2">\n\
                    <p class="lead">'+data.name+'</p>\n\
                    \n\<p>'+data.description+ '</p>\n\
                \n\</div>'
            );
            
            $('#div_details').empty();
            $("#div_details").append('<div class="content-section2">\n\
                <div class="row">\n\
                    <div class="col-sm-8">\n\
                        <p class="lead"><b>In brief :</b></p>\n\
                        <p class="follow"><b>Situvated Province : </b> '+data.province+'</p>\n\
                        <p class="follow"><b>Situvated District : </b> '+data.district+'</p>\n\
                        <p class="follow"><b>Rating : </b>'+data.rating+'</p>\n\
                    </div>\n\
                    <div class="col-sm-4">\n\
                    </div>\n\
                </div>\n\
            \n\</div>'
            );
            $('#div_img').empty();
            $("#div_img").append('<img class="img-responsive" src='+data.picture+'>');
         
        });
    });
    
    /***Add action listener to catogory list********************************************************/

     $('#select_category').on('change',function(){
    
        var category = document.getElementById('select_category').value;
        console.log(category); 
        $.get('/filterplace?category='+category+'&cityid='+cityid,function(data){
            
            $('#div_description').empty();
            $('#div_details').empty();
            $('#div_img').empty();
            //alert(data[1]['name']);
            $("#select_place").get(0).options.length = 0;
            $.each(data, function(key,value) {
                //alert(value['name']);
                $("#select_place").append($("<option></option>")
                    .attr("value",value['name']).text(value['name']));
            });	
            
        });
    });
}           

//Set the makers on the map
function setMarkers(){
       
    for(var i=0; i< places.length;i++){
        
        var cordinate = {lat: places[i].latitude, lng: places[i].longitude};

        placemakers[i] = new google.maps.Marker({
            position: cordinate,
            title: places[i].name
        });
        
        placemakers[i].setMap(map);
        
        infowindows [i] = new google.maps.InfoWindow({
            content:  places[i].description
        });
              
        placemakers[i].addListener('click', function() {
            infowindow[i].open(map, placemakers[i]);
        });

        
    }
    
}  
  
/***Button Methoods***************************************************************************************************************/

 

 