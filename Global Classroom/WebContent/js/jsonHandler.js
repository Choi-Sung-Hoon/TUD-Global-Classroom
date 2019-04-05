var roscommonAPI = "http://data-roscoco.opendata.arcgis.com/datasets/2497cf17d216423691e1bb38c6502780_0.geojson"

// Get all events scheduled in County Roscommon 
$(document).ready(function () {
    $.getJSON(roscommonAPI, function (data) {
        var items = [];
        var date1 = new Date();
        var date2 = new Date();
        var dateNow = new Date().toISOString();
        console.log(data.features);
        //Go through all features retrieved from API
        $.each(data.features, function (key, val) {
            //Source contains invalid date format. Converting to valid string
            date1 = val.properties.StartDate;
            date2 = date1.replace('.', ':');
            // Compare event dates to current date before adding to list
            if (date2 >= dateNow) {
                // Add valid events to list
                items.push("<div class='event-item col-md-3'> <img class='category-image' src='img/"+ val.properties.EventType +
                 ".png'> <h4> "+ val.properties.EventName
                  +"</h4> <p>"+ val.properties.Location +"</p></div> ")
            }
        });
        // Append elements to Div
        $("<div/>", {
            "class": "row event-box",
            html: items.join("")
        }).appendTo(".event-container");
    });

});
