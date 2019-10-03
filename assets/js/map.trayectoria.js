var map;
var InforObj = [];
var centerCords = {
    lat: -33.5634707,
    lng: -70.7019857
};
var markersOnMap = [{
    placeName: "Buin",
    placeText: "560 casas",
    LatLng: [{
        lat: -33.7313897,
        lng: -70.742431
    }]
},
{
    placeName: "Colina",
    placeText: "1.108 casas",
    LatLng: [{
        lat:-33.2045451,
        lng: -70.6759654
    }]
},
{
    placeName: "Santiago",
    placeText: "441 departamentos",
    LatLng: [{
        lat: -33.4462262,
        lng: -70.6606702
    }]
},
{
    placeName: "Ñuñoa",
    placeText: "1.100 casas",
    LatLng: [{
        lat: -33.4566678,
        lng: -70.5978415
    }]
},
{
    placeName: "La Reina",
    placeText: "200 casas",
    LatLng: [{
        lat: -33.4411269,
        lng: -70.5340591
    }]
},
{
    placeName: "Puente Alto",
    placeText: "1.310 casas",
    LatLng: [{
        lat: -33.6186082,
        lng: -70.5906057
    }]
},
{
    placeName: "San Bernardo",
    placeText: "1.050 casas",
    LatLng: [{
        lat: -33.5854485,
        lng: -70.6987361
    }]
},
{
    placeName: "Padre Hurtado",
    placeText: "760 casas",
    LatLng: [{
        lat: -33.5695362,
        lng: -70.8156717
    }]
},
{
    placeName: "Peñaflor",
    placeText: "360 casas",
    LatLng: [{
        lat: -33.6060255,
        lng: -70.8781837
    }]
},
{
    placeName: "Maipú",
    placeText: "11.328 casas",
    LatLng: [{
        lat: -33.5105866,
        lng: -70.7572607
    }]
}
];

window.onload = function () {
    initMap();
};

function addMarkerInfo() {
    for (var i = 0; i < markersOnMap.length; i++) {
        var contentString = '<div id="content"><h2>' + markersOnMap[i].placeName +
            '</h2><p>' + markersOnMap[i].placeText + '</p></div>';
            var image = '';
        const marker = new google.maps.Marker({
            position: markersOnMap[i].LatLng[0],
            map: map,
            icon: {
                path: google.maps.SymbolPath.CIRCLE,
                scale: 0
            }
        });

        const infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 200
        });

        marker.addListener('click', function () {
            closeOtherInfo();
            infowindow.open(marker.get('map'), marker);
            InforObj[0] = infowindow;
        });
        infowindow.open(map,marker);
    }
}

function closeOtherInfo() {
    if (InforObj.length > 0) {
        /* detach the info-window from the marker ... undocumented in the API docs */
        InforObj[0].set("marker", null);
        /* and close it */
        InforObj[0].close();
        /* blank the array */
        InforObj.length = 0;
    }
}
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: centerCords,
        streetViewControl: false,
        mapTypeId: 'satellite'
    });
    addMarkerInfo();
}