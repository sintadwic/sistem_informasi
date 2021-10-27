<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omah Kayu</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/content.css">
</head>

<body>
    <div class="container">
        <main class="content">
            <section class="hero"> 
                <h1>Omah Kayu</h1><br>
                    <img src="img/tn-02.jpg">
                        <div class="hero-content">
                    <p> Taman Flora Wisata Santerra De Laponte adalah tempat rekreasi dimana pengunjung akan 
                        disajikan beberapa tumbuhan dan bunga-bunga yang cantik. Ada tanaman Euphorbia, mawar, 
                        tanaman gantung, lidah mertua, dan masih banyak lagi.<br><br>
                        Santera De Laponte di tengah pandemi beroperasi pukul 08.00 pagi hingga 17.00 WIB. 
                        Tiket masuk cukup terjangkau, yakni sebesar Rp 30.000,00. Flora Wisata Santerra De 
                        Laponte berlokasi di Pandesari, Pujon Batu.Flora Wisata Santera De Laponte, 
                        selain dikelilingi banyak tanaman, juga mempunyai banyak bangunan dengan nuansa Belanda 
                        anterra De Laponte memiliki wahana antara lain cinema 7D, robot dengan harga Rp 25.000,00 
                        hingga berfoto bersama dino.<br><br> 
                        Bangunan warna warni yang cantik serta menara kincir angin 
                        membuat seperti berada di Belanda. Selain itu, beberapa sudut dengan pemandangan rumah 
                        susun juga bentuk bangunan kedai ala korea yang dibangun untuk berfoto-foto bersama 
                        kerabat atau kekuarga. <br>
                    </p>

                    <a href="/home" class="action-btn">Kembali</a>
                </div>
                <footer>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/maps.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <style>
       #mapid { width: 80%; height: 600px; }
   </style>
<div id="mapid"></div>
<div class="container">
        <main class="content">
            <section class="hero">
        </p>
    </div>
<script>
    var mymap = L.map('mapid').setView([-7.854236987003573, 112.4855026254115], 17);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);
var m1 = L.marker([-7.854183846060937, 112.4856635586897]).addTo(mymap);
    m1.bindPopup("<h1>Santera De Laponte</h1> <img src = '/img/c2.jpg' />")
</script>
</footer>
            </section>
    </div>
</body>


</html>