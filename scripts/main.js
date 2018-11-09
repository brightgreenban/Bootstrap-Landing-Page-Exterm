/* PRELOADER */
$(window).on('load', function () {
    $preloader = $('#cube-loader'),
    $loader = $preloader.find('.caption');
    $loader.fadeOut();
    $preloader.delay(500).fadeOut('slow');
});

/* SCROLL */
function scrolling(id){
    var offset = 0;
    $('html, body').animate({
        scrollTop: $(id).offset().top - offset
    }, 700);
    return false;
}

/* MAP */

    var locations = [
        ['Bondi Beach', 50.348883, 30.553728, 3],
        ['Coogee Beach', 49.823901, 23.927118, 2],
        ['Cronulla Beach', 48.399302, 35.047612, 1]
    ];


    // When the user clicks the marker, an info window opens.

    function initMap() {
        var myLatLng = {lat: 49.248883, lng: 30.553728};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
            center: myLatLng
            });

        var count=0;


        for (count = 0; count < locations.length; count++) {  

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[count][1], locations[count][2]),
                map: map
                });

            marker.info = new google.maps.InfoWindow({
                content: locations [count][0]
                });


            google.maps.event.addListener(marker, 'click', function() {  
                // this = marker
                var marker_map = this.getMap();
                this.info.open(marker_map, this);
                // Note: If you call open() without passing a marker, the InfoWindow will use the position specified upon construction through the InfoWindowOptions object literal.
                });
        }
    }