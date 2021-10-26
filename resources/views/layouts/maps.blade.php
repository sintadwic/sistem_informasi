<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/maps.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <style>
        #mapid {
            height: 400px;
        }

    </style>

</head>

<body>
    <div id="mapid"></div>
    <div class="container">
        <main class="content">
            <section class="hero">
        <h3>Lokasi Tempat Wisata</h3>
        <p>Memberikan informasi tempat wisata di Kota batu, beserta lokasi yang
            tertera pada map didalam website. <br> <br>
            <a href="/home">Kembali
        </p>
    </div>
</body>

<script>
    var mymap = L.map('mapid').setView([-7.8711369, 112.5262475], 19);
    L.tileLayer(
        'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

    // ------------------ destination 1 ---------------------------
    var m1 = L.marker([-7.8711369, 112.5262475]).addTo(mymap);
    m1.bindPopup("<h1>Alun Alun</h1> <img src = '/img/map/mp1.jpg' />")

    // ------------------ destination 2 ---------------------------
    var m2 = L.marker([-7.8841636, 112.5238234]).addTo(mymap);
    m2.bindPopup("<h1>Jatimpark 1</h1> <img src = '/img/map/mp2.jpg' />")

    // ------------------ destination 3 ---------------------------
    var m3 = L.marker([-7.8889575, 112.5296176]).addTo(mymap);
    m3.bindPopup("<h1>Jatimpark 2</h1> <img src = '/img/map/mp3.jpg' />")

    // ------------------ destination 4 ---------------------------
    var m4 = L.marker([-7.8971285, 112.550914]).addTo(mymap);
    m4.bindPopup("<h1>Jatimpark 3</h1> <img src = '/img/map/mp4.jpg' />")

    // ------------------ destination 5 ---------------------------
    var m5 = L.marker([-7.9130615, 112.5462198]).addTo(mymap);
    m5.bindPopup("<h1>Predator Fun Park</h1> <img src = '/img/map/mp5.jpg' />")

    // ------------------ destination 6 ---------------------------
    var m6 = L.marker([-7.8965212, 112.5325577]).addTo(mymap);
    m6.bindPopup("<h1>Batu Night Spectacular</h1> <img src = '/img/map/mp6.jpg' />")

    // ------------------ destination 7 ---------------------------
    var m7 = L.marker([-7.8646751, 112.4967883]).addTo(mymap);
    m7.bindPopup("<h1>The Onsen</h1> <img src = '/img/map/mp7.jpg' />")

</script>

</html>
