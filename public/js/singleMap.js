var map;
var directionsManager;

function GetMap(x1, y1, name) {
    map = new Microsoft.Maps.Map('#my-map', {});

    //Load the directions module.
    Microsoft.Maps.loadModule('Microsoft.Maps.Directions', function () {
        //Create an instance of the directions manager.
        directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);

        //Get variables from HTML
        const x = document.getElementById('my-map').getAttribute('x');
        const y = document.getElementById('my-map').getAttribute('y');

        if (x != null && x != "") {
            //Create waypoints to route between.
            var seattleWaypoint = new Microsoft.Maps.Directions.Waypoint({ address: 'Ten nocleg', location: new Microsoft.Maps.Location(x, y) });
            directionsManager.addWaypoint(seattleWaypoint);

            if (x1 == null || x1 == '' || y1 == null || y1 == '') {
                x1 = 54.1885043890074;
                y1 = 15.5995419904263;
                name = 'test';
            }

            var workWaypoint = new Microsoft.Maps.Directions.Waypoint({ address: name, location: new Microsoft.Maps.Location(x1, y1) });
            directionsManager.addWaypoint(workWaypoint);

            //Specify the element in which the itinerary will be rendered.
            directionsManager.setRenderOptions({ itineraryContainer: '#directionsItinerary' });

            //Calculate directions.
            directionsManager.calculateDirections();
        }

        
    });
}
