<link rel="stylesheet" type="text/css" href="css/products-style.css">
<link rel="stylesheet" type="text/css" href="css/about-style.css">
<br/>
<br/>
<br/>
<div class="about-container">
    <div class="about-logo"><img src="img/logo1.png"></div>
    <div class="about-text">
        <h2>Newmerrill Company</h2>
        <p>
            Newmerrill company is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            <br><br>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            <br><br>
            Lorem Ipsum has been and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passa
        </p>
    </div>
    <div class="location-map">
        <div id="map-canvas"></div>
    </div>
    <div class="contact-section">
        <h4>CONTACT INFORMATION</h4>
        <!-- <div class=""> -->
            <h5><div class="contact-icon fa fa-fw fa-map-marker"></div>44 Mortada Basha st, Janaklees, Alexandria, Egypt</h5>
            <h5><div class="contact-icon fa fa-fw fa-phone"></div>+2035758511 - +2035743543</h5>
            <h5><div class="contact-icon fa fa-fw fa-fax"></div>+2035730665</h5>
            <h5><div class="contact-icon fa fa-fw fa-mobile"></div>+201000005936</h5>
            <h5><div class="contact-icon fa fa-fw fa-envelope"></div>newmerrill@hotmail.co.uk</h5>
        <!-- </div> -->
    </div>
</div>
<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(31.241628, 29.969257),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>