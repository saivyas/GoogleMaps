<?php
$address = 'New Jersy';
$trim =  str_replace(',','',$_POST['name']);
if(trim($trim)!='')
{
  $address = $_POST['name'];
}
?>
<style>
#map{height:100%;}
</style>
<div id="map"></div>
 <script>
 var map,geocoder,infowindow
 var content="Loaction";

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
           center: {lat: -34.397, lng: 150.644}

        });
        geocoder = new google.maps.Geocoder();
        infowindow = new google.maps.InfoWindow({
          content: content
        });

        geocodeAddress(geocoder, map);
}

      function geocodeAddress(geocoder, resultsMap) {
  var address = "<?php echo $address; ?>";
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
            infowindow.setContent(results[0].formatted_address);
            marker.addListener('click', function() {
          infowindow.open(map, marker);
        });

          } else {
            console.log('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBsWOi7nJKuWHZ6xHs9iD27J4kc26PUfws&callback=initMap">
</script> 