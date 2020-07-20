<div class="col-sm-12">
<div id="mapid" style="height: 600px;"></div>
</div>

<script>
var mymap = L.map('mapid').setView([-3.987131, 114.007273], 5);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);

<?php foreach ($data_prov['features'] as $prov): ?>
    L.marker([<?= $prov['geometry']['y'] ?>, <?= $prov['geometry']['x'] ?>]).addTo(mymap)
    .bindPopup("Provinsi : <?= $prov['attributes']['Provinsi'] ?><br>"+
    "Positif :  <?= $prov['attributes']['Kasus_Posi'] ?><br>"+
    "Sembuh :  <?= $prov['attributes']['Kasus_Semb'] ?><br>"+
    "Meninggal :  <?= $prov['attributes']['Kasus_Meni'] ?><br>"
    );

<?php endforeach; ?>
</script>