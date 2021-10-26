<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pariwisata</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-video-catalog.css">
    <!--

TemplateMo 552 Video Catalog

https://templatemo.com/tm-552-video-catalog

-->
</head>

<body>
    <div class="tm-page-wrap mx-auto">
        <div class="position-relative">
            <div class="position-absolute tm-site-header">
                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="col-5 col-md-8 ml-auto mr-0">
                            <div class="tm-site-nav">
                                <nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed"
                                        type="button" data-toggle="collapse" data-target="#navbar-nav"
                                        aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item active">
                                                <a class="nav-link tm-nav-link
                                                    {{ Request::path() === 'layouts/maps' ? 'bg-primary' : ''}} " href="/maps">Maps</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="contact.html">About</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-welcome-container text-center text-white">
                <div class="tm-welcome-container-inner">
                    <p class="tm-welcome-text mb-1 text-white">Sistem Informasi Pariwisata</p>
                    <p class="tm-welcome-text mb-4 text-white">Menyediakan berbagai informasi tempat wisata di kota Batu
                    </p>
                    <a href="#content" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
                        <span>Destination</span>
                    </a>
                </div>
            </div>

            <div id="tm-video-container">
                <video autoplay muted loop id="tm-video">
                    <!-- <source src="video/sunset-timelapse-video.mp4" type="video/mp4"> -->
                    <source src="video/wheat-field.mp4" type="video/mp4">
                </video>
            </div>

            <i id="tm-video-control-button" class="fas fa-pause"></i>
        </div>

        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">
                <main>
                    <div class="col-12">
                        <h2 class="tm-page-title mb-4">Our Destinations</h2>
                    </div>

                    <div class="row tm-catalog-item-list">
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/c1.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a class="position-absolute tm-img-overlay">
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Alun-Alun Kota Wisata Batu</h3>
                                <p class="tm-catalog-item-text">Alun-Alun kota. Memiliki ciri khas berupa monumen
                                    berbentuk apel dan bianglala, tempat ini menjadi lokasi wisata murah meriah bagi
                                    warga Batu dan sekitarnya.
                                    Banyak wahana permainan khas pasar malam kagetan yang bisa dicoba di sini ..
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/c2.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a class="position-absolute tm-img-overlay">
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Jawa Timur Park 1</h3>
                                <p class="tm-catalog-item-text">Taman hiburan keluarga ini berlokasi di Jalan Kartika
                                    nomor 2. Ini adalah taman bermain terbesar pertama di Jawa Timur, cikal bakal dari
                                    Jatim Park 2, Jatim Park 3,
                                    dan objek wisata Batu lainnnya yang juga dikelola Jatim Park Group (JTP) <a
                                        href="/content">Selengkapnya..</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/c3.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a class="position-absolute tm-img-overlay">
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Jawa Timur Park 2</h3>
                                <p class="tm-catalog-item-text">Jatim Park 2 yang berlokasi di Jalan Oro-Oro Ombo nomor
                                    9. Objek wisata Batu yang satu
                                    ini punya Batu Secret Zoo dan Eco Green Park yang pasti disukai anak-anak.
                                    Juga ada akuarium dengan berbagai jenis ikan, pulau harimau, rumah terbalik, fantasy
                                    land, dan river adventure yang tak kalah seru. <a
                                        href="https://jtp.id/jatimpark2/">Selengkapnya..</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/c4.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a class="position-absolute tm-img-overlay">
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Jawa Timur Park 3</h3>
                                <p class="tm-catalog-item-text">Terbaru dari Jatim Park Group adalah Jatim Park 3 yang
                                    beralamat di Jalan Raya
                                    Ir. Soekarno nomor 144. Taman hiburan ini punya Dino Park, Infinite World, Fun Tech
                                    Plaza, sampai Museum Musik Dunia. <a href="https://jtp.id/dinopark/">Selengkapnya..
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/c5.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a class="position-absolute tm-img-overlay">
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Predator Fun Park</h3>
                                <p class="tm-catalog-item-text">Predator Fun Park yang bermaskot buaya unyu merupakan
                                    taman hiburan dengan tema reptil yang berlokasi di
                                    Jalan Raya Tlekung 315, Kecamatan Junrejo, Batu. Tempat ini punya berbagai jenis
                                    wisata edukatif yang menarik buat anak.
                                    Mulai dari galeri buaya, croco train, waterboom, outbond, family fun house <a
                                        href="https://jtp.id/predatorfunpark/">Selengkapnya..</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/tn-06.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a class="position-absolute tm-img-overlay">
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Batu Night Spectacular</h3>
                                <p class="tm-catalog-item-text">di malam hari yang meriah, coba mampir ke Batu Night
                                    Spectacular (BNS) bersama keluarga.
                                    Ada berbagai jenis wahana permainan seru yang bisa dicoba. Sekadar jajan atau
                                    menikmati keindahan Lampion Garden juga bisa. <a
                                        href="https://jtp.id/bns/">Selengkapnya..</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="img/c7.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a class="position-absolute tm-img-overlay">
                                </a>
                            </div>
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title">The Onsen Hot Spring Resort</h3>
                                <p class="tm-catalog-item-text"> pemandian air panas dan vilanya ada The Onsen, resort
                                    yang menawarkan sensasi liburan mewah bergaya Jepang.
                                    Suasananya memang dibuat persis seperti onsen di negeri sakura. <a
                                        href="https://www.jtp.id/">Selengkapnya..</p>
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Subscribe form and footer links -->
                <div class="row mt-5 pt-3">
                    <div class="col-xl-6 col-lg-12 mb-4">
                        <div class="tm-bg-gray p-5 h-100">
                            <h3 class="tm-text-primary mb-3">More Information</h3>
                            <p class="mb-5">Memberikan informasi tempat wisata di Kota batu, beserta lokasi yang
                                tertera pada map didalam website.
                            </p>
                            <p class="mb-1"> Contact : 081111x21112 </p>
                            <p> Email : jalanjalanLaravel@gmail.com </p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- tm-content-container -->
        </div>

    </div> <!-- .tm-page-wrap -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function setVideoSize() {
            const vidWidth = 1920;
            const vidHeight = 1080;
            let windowWidth = window.innerWidth;
            let newVidWidth = windowWidth;
            let newVidHeight = windowWidth * vidHeight / vidWidth;
            let marginLeft = 0;
            let marginTop = 0;

            if (newVidHeight < 500) {
                newVidHeight = 500;
                newVidWidth = newVidHeight * vidWidth / vidHeight;
            }

            if (newVidWidth > windowWidth) {
                marginLeft = -((newVidWidth - windowWidth) / 2);
            }

            if (newVidHeight > 720) {
                marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
            }

            const tmVideo = $('#tm-video');

            tmVideo.css('width', newVidWidth);
            tmVideo.css('height', newVidHeight);
            tmVideo.css('margin-left', marginLeft);
            tmVideo.css('margin-top', marginTop);
        }

        $(document).ready(function () {
            /************** Video background *********/

            setVideoSize();

            // Set video background size based on window size
            let timeout;
            window.onresize = function () {
                clearTimeout(timeout);
                timeout = setTimeout(setVideoSize, 100);
            };

            // Play/Pause button for video background      
            const btn = $("#tm-video-control-button");

            btn.on("click", function (e) {
                const video = document.getElementById("tm-video");
                $(this).removeClass();

                if (video.paused) {
                    video.play();
                    $(this).addClass("fas fa-pause");
                } else {
                    video.pause();
                    $(this).addClass("fas fa-play");
                }
            });
        })

    </script>
</body>

</html>
