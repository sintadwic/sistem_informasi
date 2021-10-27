<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taman Kelinci</title>
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
                <h1>Taman Kelinci</h1><br>
                    <img src="img/mp3.jpg">
                        <div class="hero-content">
                    <p> Rumah Kelinci mini ini menjadi salah satu spot wisata terbaru yang bisa anda 
                        jadikan tempat untuk rekreasi bersama keluarga kalau anda sedang ke daerah Batu Malang<br><br>
                        Lokasinya ada di Pujin sebelum Goa pinus hanya berjarak 100m dari goa pinus, menuju 
                        arah ke gunuk banyak paralayang sebelum sampai di kanan jalan akan ada taman kelinci.
                        Taman kelinci ini hanya 500 meter persegi nan indah dimana terdapat rumah-rumah kelinci 
                        yang dihuni oleh kelinci-kelinci mungil yang lucu  <br><br>
                        Tiket masuknya hanya 10.000 Rupiah per orang anda bisa berfoto sepuasnya. Spot foto ada 
                        miniatur rumah hobit, miniatur taman berbentuk ember tumpah, rumah-rumah kecil kelinci, 
                        foto spot bertuliskan taman kelinci. Gak kebanyak gimana bagusnya taman kelinci kan?<br><br>
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
    var mymap = L.map('mapid').setView([-7.851406250864044, 112.49374421160914], 17);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);
var m1 = L.marker([-7.851299968247729, 112.49379785578635]).addTo(mymap);
    m1.bindPopup("<h1>Taman Kelinci</h1> <img src = '/img/mp3.jpg' />")
</script>
</footer>
            </section>
    </div>
</body>


</html>