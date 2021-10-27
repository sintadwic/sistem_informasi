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
                    <img src="img/mp1.jpg">
                        <div class="hero-content">
                    <p> Omah kayu ini menjadi salah satu tujuan wisata 
                        Batu Malang yang tidak boleh anda lewatkan. Ukuran rumak ini sekitar 3x3 meter, 
                        dan fasilitas yang ada di Omah Kayu ada kamar tidur dan ada juga pemanas air.<br><br>
                        Nah, untuk bisa menikmati Omah Kayu di Batu Malang adalah Rp 5.000,00 saja 
                        cukup murah bukan? dengan bermodalkan 5000 rupiah kita bisa menikmati hutan 
                        batu malang dari atas pohon atau tepatnya omah kayu di atas pohon. Dan jikalau 
                        anda dan keluarga ingin menginap disana maka biaya yang dikeluarkan adalah 
                        Rp 350.000,00 untuk hari-hari biasa, dan khusus untuk hari libur per satu kamanrnya
                        dikenakan biaya Rp 450.000,00 bagaimana ? cukup mahal bukan ? hehe <br><br> 
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
                            var mymap = L.map('mapid').setView([-7.854938566170708, 112.49774072325474], 17);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1
}).addTo(mymap);
var m1 = L.marker([-7.855129873184822, 112.49788019811547]).addTo(mymap);
    m1.bindPopup("<h1>Omah Kayu</h1> <img src = '/img/mp1.jpg' />")
</script>
</footer>
            </section>
    </div>
</body>


</html>