<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaliwatu Rafting</title>
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
                <h1>Kaliwatu Rafting</h1><br>
                    <img src="img/mp6.jpg">
                        <div class="hero-content">
                    <p> Anda suka dan tertarik dengan kegiatan yang menantang? bagaimana kalau 
                        kita menaklukan ganasnya sungai Kaliwatu? <br><br>
                        Kalau anda sedang berada di Jatim Park 1, anda bisa menuju ke arah arung 
                        jeram di Kaliwatu ini yang jarakny hanya 4,5 km saja. Bagi anda yang inigin 
                        menguji adrenalin, tempat ini menjadi salah satu spot wisata di Batu Malang 
                        yang wajib anda sambangi. Bagaminama? Anda tertarik untuk menaklukan Kaliwatu?<br><br> 
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
    var mymap = L.map('mapid').setView([-7.864122978139449, 112.53438152695102], 17);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);
var m1 = L.marker([-7.863952931149034, 112.53427423859662]).addTo(mymap);
    m1.bindPopup("<h1>Kaliwatu Rafting</h1> <img src = '/img/mp6.jpg' />")
</script>
</footer>
            </section>
    </div>
</body>


</html>