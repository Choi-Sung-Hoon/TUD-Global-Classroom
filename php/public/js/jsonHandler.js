// var roscommonAPI = "http://data-roscoco.opendata.arcgis.com/datasets/2497cf17d216423691e1bb38c6502780_0.geojson"
var geocodeAPI = "http://open.mapquestapi.com/geocoding/v1/address?key=KEY&location=Washington,DC"
window.onload = function() {
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
        L.circle([latLng['lat'], latLng['lng']], { radius: 100 }).addTo(map);
    }
  }

