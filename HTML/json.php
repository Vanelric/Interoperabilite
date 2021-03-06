    <style>
    html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
    }
    </style>
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places,geometry"></script>
    
    <script>
    var map;
    var liste;
    var pyrmont;
    var all_types = [];
    var query = {}

    location.search.substr(1).split("&").forEach(function(item) {query[item.split("=")[0]] = item.split("=")[1]})

    var rad = function(x) {
        return x * Math.PI / 180;
    };

    var getDistance = function(p1, p2) {
            var R = 6378137; // Earth’s mean radius in meter
            var dLat = rad(p2.lat() - p1.lat());
            var dLong = rad(p2.lng() - p1.lng());
            var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
            Math.cos(rad(p1.lat())) * Math.cos(rad(p2.lat())) *
            Math.sin(dLong / 2) * Math.sin(dLong / 2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var d = R * c;
            
            return d; // returns the distance in meter
        };

        function initialize() {
            all_types = [ query['q'] ];

            pyrmont = new google.maps.LatLng(query['lat'], query['lng']);

            liste = document.getElementById("liste");

            var request = {
                location: pyrmont,
                radius: query['rad'],
                types: all_types
            };

            map = new google.maps.Map(document.getElementById('map-canvas'), {
                center: pyrmont,
                zoom: 15
            });

            var service = new google.maps.places.PlacesService(map);

            service.nearbySearch(request, callback);
        }

        function callback(results, status) {
            var toutListe = "";
            if (status == google.maps.places.PlacesServiceStatus.OK) {
                for (var i = 0; i < results.length; i++) {
                    toutListe += createList(results[i]);
                }
            }
            map = "";
            document.getElementById('map-canvas').innerHTML = "";
            liste.innerHTML += toutListe;
        }

        function createList(place) {
            var placeLoc = place.geometry.location;
            var distance = getDistance(placeLoc, pyrmont); 
            
            return "<div class=\"row\">"
                      +"<div class=\"media col-lg-10 col-lg-offset-1\">"
                        +"<div class=\"media-left\">"
                          +"<a href=\"#\">"
                            +"<img class=\"media-object\" src="+ imgType(all_types) +" alt=\"...\" style=\"height: 60px;\">"
                          +"</a>"
                        +"</div>"
                        +"<div class=\"media-body\">"
                          +"<h3 class=\"media-heading\"><a href=\"resultat3.php?q="+ all_types +"&nom="+ formatAdr(place.name) +"&adr="+ formatAdr(place.vicinity) +"\">"+ place.name +"</a></h3>"
                          +"<p>Distance: "+ Number((distance).toFixed(3)) +" mètres</p>"
                          +"<p>Adresse: "+ place.vicinity +"</p>"
                        +"</div>"
                      +"</div>"
                    +"</div><br><br>";

        }

        function imgType(type){
            if(type == "movie_theater"){
                return "\"img/cinema.jpg\"";
            }
            else if(type == "bar"){
                return "\"img/bar.jpg\"";
            }
            else if(type == "restaurant"){
                return "\"img/restaurant.jpg\"";
            }
            else {
                return "\"img/library.jpg\"";
            }
        }
        
        function formatAdr(adr){
            var regexFormat = new RegExp("((\\s|\\n|,)+)", "g");

            return adr.replace(regexFormat, "_");
        }

        google.maps.event.addDomListener(window, 'load', initialize);
        </script>

        <div id="map-canvas" style="height: 0px; width: 0px;"></div>
        <div id="liste" class="container">
            <?php include ("include/affichage_bdd.php"); ?>
        </div>
