//Get variables from HTML
const x = document.getElementById("my-map").getAttribute("x");
const y = document.getElementById("my-map").getAttribute("y");

window.onload = () => {
    /*
    \ An empty character (unicode U+200e) was used
    \ so that only one name is displayed when the map is first loaded.
    */
    GetMap(x + 1, y + 1, "‎");
};

function GetMap(x1, y1, name) {
    let map = new Microsoft.Maps.Map("#my-map", {});

    //Load the directions module.
    Microsoft.Maps.loadModule("Microsoft.Maps.Directions", function () {
        //Create an instance of the directions manager.
        let directionsManager = new Microsoft.Maps.Directions.DirectionsManager(
            map
        );

        //Create waypoints to route between.
        let thisLoc = new Microsoft.Maps.Directions.Waypoint({
            address: "Ten nocleg",
            location: new Microsoft.Maps.Location(x, y),
        });

        directionsManager.addWaypoint(thisLoc);

        var workWaypoint = new Microsoft.Maps.Directions.Waypoint({
            address: name,
            location: new Microsoft.Maps.Location(x1, y1),
        });

        directionsManager.addWaypoint(workWaypoint);

        //Specify the element in which the itinerary will be rendered.
        directionsManager.setRenderOptions({
            itineraryContainer: "#directionsItinerary",
        });

        //Calculate directions.
        directionsManager.calculateDirections();
    });
}
