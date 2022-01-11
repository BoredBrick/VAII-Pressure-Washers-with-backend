function initMap() {
    var coords = {lat: 48.811832, lng: 19.652496 };
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 14,
        center: coords,
        scrollwheel: false
    });
    var marker = new google.maps.Marker({
        position: coords,
        map: map,
        label: "PowerWashers"
    });
}
