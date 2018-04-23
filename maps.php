<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        width: 100%;
        height: 250px;
      }
</style>
<script type="text/javascript">
        var peta;
        function initMap(){
            var klaten = new google.maps.LatLng(-7.68748670653862, 110.41531473398209);
            var petaoption = {
                zoom: 16,
                center: klaten,
                };
            peta = new google.maps.Map(document.getElementById('map'),petaoption);
            google.maps.event.addListener(peta,'click',function(event){
                kasihtanda(event.latLng);
            });
            //ambildatabase('awal');
        }
        function kasihtanda(lokasi){
            tanda = new google.maps.Marker({
                    position: lokasi,
                    map: peta
            });
            $("#x").val(lokasi.lat());
            $("#y").val(lokasi.lng());
         
        }
 </script>

<div id="map"></div>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGLH5ezC3e1sYGk09ziYMsmF_KebJk21I&callback=initMap">
</script>