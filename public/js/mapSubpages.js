window.onload = () => GetMap(54.181675,15.569575);

function GetMap(la, lo) {
    var largeEl = document.getElementById("largeMapLink");
    var dirEl = document.getElementById("dirMapLink");

    var map = new Microsoft.Maps.Map('#sub-map', {
        credentials: 'ArnGjMKK1i1pqfVUfvKGlq33gKNMEgcV5wFmJ3L2QLm65AgaekhL44ZlGvAktUQ_',
        center: new Microsoft.Maps.Location(la, lo),
        zoom: 15
    });

    if (la != 54.181675 || lo != 15.569575) {
        var center = map.getCenter();

        //Create pushpin
        var pin = new Microsoft.Maps.Pushpin(center, {
            color: 'blue',
        });

        //Add the pushpin to the map
        map.entities.push(pin);

        largeEl.setAttribute('href', "https://bing.com/maps/default.aspx?cp=" + la + "~" + lo + "&lvl=18&style=r");
        dirEl.setAttribute('href', "https://bing.com/maps/default.aspx?rtp=~pos." + la + "_" + lo + "&rtop=0~1~0")
    }
}

function setAddress(id) {
    var address = document.getElementById(id).innerHTML;
    var where = document.getElementById("address");

    where.innerHTML = address;
}