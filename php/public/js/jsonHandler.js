var roscommonAPI = "http://data-roscoco.opendata.arcgis.com/datasets/2497cf17d216423691e1bb38c6502780_0.geojson"
var geocodeAPI = "http://open.mapquestapi.com/geocoding/v1/address?key=KEY&location=Washington,DC"
window.onload = function() {
   
  }
$(document).ready(function () {


    L.mapquest.key = 'sNGNx6OObzOG1vmRBcQqPh1u0yeZpMj2';

    var address = $('#location').html();
    L.mapquest.geocoding().geocode(address, createMap);

    function createMap(error, response) {
      var location = response.results[0].locations[0];
      var latLng = location.displayLatLng;
      var map = L.mapquest.map('map', {
        center: [latLng['lat'], latLng['lng']],
        layers: L.mapquest.tileLayer('map'),
        zoom: 17
      });
        console.log(latLng['lat']);
        console.log(latLng['lng']);
        L.circle([latLng['lat'], latLng['lng']], { radius: 100 }).addTo(map);
    }

    var items = [];
    var date1 = new Date();
    var date2 = new Date();
    var dateNow = new Date().toISOString();
    
    // Get all events scheduled in County Roscommon 
    $.getJSON(roscommonAPI, function (data) {

        //Go through all features retrieved from API
        $.each(data.features, function (key, val) {
            //Source contains invalid date format. Converting to valid string
            date1 = val.properties.StartDate;
            date2 = date1.replace('.', ':');
            // Compare event dates to current date before adding to list
            if (date2 >= dateNow) {
                // Add valid events to list
                items.push("<div id="+key+" class='event-item col-md-3'> <img class='category-image' src='img/" + val.properties.EventType +
                    ".png'> <h4> " + val.properties.EventName
                    + "</h4> <p>" + val.properties.Location + "</p></div> ")
            }
        });
        // Append elements to Div
        $("<div/>", {
            "class": "row event-box",
            html: items.join("")
        }).appendTo(".event-container");
    });

    //Search filtering
    $('#search-button').on('click', function () {
        $('.event-box').remove();
        //Take value from search bar and use it to compare items in array.
        var filterParam = $('#search-bar').val();
        var filteredItems = items.filter(function(str) {
            return str.includes(filterParam);    
        });
        $("<div/>", {
            "class": "row event-box",
            html: filteredItems.join("")
        }).appendTo(".event-container");

    });  

    $('#search-bar').keyup(function() {
          // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
            // Cancel the default action, if needed
            event.preventDefault();
            $('#search-button').click();
        }
    });
});
