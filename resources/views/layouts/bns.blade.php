<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batu Night Spectaculer</title>
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
                <h1>Batu Night Spectaculer</h1><br>
                    <img src="img/mp4.jpg">
                        <div class="hero-content">
                    <p> BNS yang merupakan akronim dari Batu Night Spectaculer.
                        Objek wisata yang satu ini berada di Desa Oro-Oro Ombo, dekat dengan Jatim Park 2.
                        Sehingga tidak heran kalau warga batu dan wistawan yang datang kesini terhibur dan 
                        betah berlama-lama disini, ada banyak sekali wahana permainanyang menghibur, 
                        terdapat pulihan wahana permainan yang mengasyikkan, seperti gallery hantu, slalom 
                        test, sepeda udara, lampian garden, dan trampoline. Ada juga berbagai wahana yang 
                        menguji adrenalin, seperti drag race dan mouse coaster<br><br>
                        Tidak hanya untuk anak muda dan dewasa saja, disini juga terdapat wahana untuk bermain 
                        anak-anak, Kids Zone, yang memiliki 25 wahana. Di Batu Night Spectacular, anda juga 
                        dapat menikmati panggung musik yang menampilkan musik dan kesenian tradisional<br><br> 
                        BNS beroperasi pada malam hari, mulai pukul 15.00 sampai 24.00. <br>
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
    var mymap = L.map('mapid').setView([-7.8965159172083235, 112.53456395606531], 17);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);
var m1 = L.marker([-7.896399019057797, 112.53452104072353]).addTo(mymap);
    m1.bindPopup("<h1>Batu Night Spectaculer</h1> <img src = '/img/mp4.jpg' />")
</script>
</footer>
            </section>
    </div>
</body>


</html>