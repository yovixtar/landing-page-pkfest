<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PK FEST</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
    <style>
        .ffm {
            font-family: "Share Tech";
        }
    </style>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Sept 10, 2022 08:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="countdownEvent"
            document.getElementById("countdownEvent").innerHTML =
                "<div class='alert alert-danger d-inline-block me-3'>" + days +
                "d </div><div class='alert alert-danger d-inline-block me-3'>" + hours +
                "h  </div><div class='alert alert-danger d-inline-block me-3'>" + minutes +
                "m  </div><div class='alert alert-danger d-inline-block me-3'>" + seconds + "s </div>";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdownEvent").innerHTML = "PKFEST Started";
            }
        }, 1000);
    </script>

    <!-- =======================================================
  * Template Name: TheEvent - v4.7.0
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center ">
        <div class="container-fluid container-xxl d-flex align-items-center">

            <div id="logo" class="me-auto">
                <a href="#hero" class="scrollto h2 ffm mb-0"><img src="assets/img/logo.png" alt="" title=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#speakers">Speakers</a></li>
                    <li><a class="nav-link scrollto" href="#venue">Venue</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="#supporters">Sponsors</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <a class="buy-tickets scrollto" href="#buy-tickets">Buy Tickets</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="mb-4 pb-0">Maximize<br><span>Our Potential</span> in Society Era 5.0</h1>
            <p class="mb-4 pb-0">10, 11-12 September 2022, STMIK Widya Pratama, Kota Pekalongan</p>
            <p id="countdownEvent" class="text-white"></p>
            <a href="#about" class="about-btn scrollto">About The Event</a>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>About PK FEST</h2>
                        <p>PK FEST adalah Event tahunan yang diadakan oleh UKM Pengembangan Komputer, STMIK Widya
                            Pratama. PK FEST mengangkat topik-topik trend IT yang berpotensi tinggi di masa depan.</p>
                    </div>
                    <div class="col-lg-3">
                        <h3>Where</h3>
                        <p>Zoom Meeting <br>STMIK Widya Pratama (Lab 5) <br />
                            Jl. Patriot No.25, Dukuh, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51146</p>
                    </div>
                    <div class="col-lg-3">
                        <h3>When</h3>
                        <p>Sabtu, Senin - Rabu<br>10, 12-13 September 2022</p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Speakers Section ======= -->
        <section id="speakers">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Event Speakers</h2>
                    <p>Pembicara Webinar dan Bootcamp</p>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                            <img src="assets/img/speakers/monarizqa.jpg" alt="Speaker 1" class="img-fluid">
                            <div class="details">
                                <h3 class="text-uppercase"><a href="speaker-details.html">Nurvirta Monarizqa</a></h3>
                                <p>Data Scientist Microsoft</p>
                                <div class="social">
                                    <a href="http://twitter.com/nmonarizqa"><i class="bi bi-twitter"></i></a>
                                    <a href="http://instagram.com/nmonarizqa"><i class="bi bi-instagram"></i></a>
                                    <a href="http://linkedin.com/in/nmonarizqa"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/speakers/raihan.jpeg" alt="Speaker 2" class="img-fluid">
                            <div class="details">
                                <h3><a href="speaker-details.html">RAIHAN NUGROHO JAUHARI</a></h3>
                                <p>Data Scientist Bank BRI || Ex-Telkom Indonesia</p>
                                <div class="social">
                                    <a href="https://www.instagram.com/raihanrnj/?hl=id"><i class="bi bi-instagram"></i></a>
                                    <a href="https://www.linkedin.com/in/raihan-nugroho-jauhari"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                            <img src="assets/img/speakers/ekobudi.png" alt="Speaker 2" class="img-fluid">
                            <div class="details">
                                <h3><a href="speaker-details.html">EKO BUDI SUSANTO</a></h3>
                                <p>Dosen STMIK Widya Pratama</p>
                                <div class="social">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End Speakers Section -->

        <!-- ======= Venue Section ======= -->
        <section id="venue">

            <div class="container-fluid" data-aos="fade-up">

                <div class="section-header">
                    <h2>Event Venue</h2>
                    <p>Lokasi PK FEST 8 Diadakan</p>
                </div>

                <div class="row g-0">
                    <div class="col-lg-6 venue-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15844.5229794423!2d109.6648793!3d-6.8749344!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3be4e1ed9ecee65c!2sSTMIK%20Widya%20Pratama%20Pekalongan!5e0!3m2!1sid!2sid!4v1654499297211!5m2!1sid!2sid" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6 venue-info">
                        <div class="row justify-content-center">
                            <div class="col-11 col-lg-8 position-relative">
                                <h3>STMIK Widya Pratama</h3>
                                <p>Sekolah Tinggi Manajemen Informatika dan Komputer Widya Pratama di Pekalongan berdiri tahun 2002 yang diselenggarakan oleh Yayasan Pendidikan Widya Pratama di Pekalongan.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- End Venue Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery">

            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Gallery</h2>
                    <p>Lihat Gallery PK FEST Tahun Sebelumnya</p>
                </div>
            </div>

            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><a href="assets/img/gallery/1.jpg" class="gallery-lightbox"><img src="assets/img/gallery/1.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="assets/img/gallery/2.jpg" class="gallery-lightbox"><img src="assets/img/gallery/2.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="assets/img/gallery/3.jpg" class="gallery-lightbox"><img src="assets/img/gallery/3.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="assets/img/gallery/4.jpg" class="gallery-lightbox"><img src="assets/img/gallery/4.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="assets/img/gallery/5.jpg" class="gallery-lightbox"><img src="assets/img/gallery/5.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="assets/img/gallery/6.jpg" class="gallery-lightbox"><img src="assets/img/gallery/6.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="assets/img/gallery/7.jpg" class="gallery-lightbox"><img src="assets/img/gallery/7.jpg" class="img-fluid" alt=""></a></div>
                    <div class="swiper-slide"><a href="assets/img/gallery/8.jpg" class="gallery-lightbox"><img src="assets/img/gallery/8.jpg" class="img-fluid" alt=""></a></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </section><!-- End Gallery Section -->

        <!-- ======= Supporters Section ======= -->
        <section id="supporters" class="section-with-bg">

            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Sponsors</h2>
                </div>

                <div class="row no-gutters supporters-wrap clearfix d-flex justify-content-center" data-aos="zoom-in" data-aos-delay="100">

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="assets/img/supporters/bri.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="supporter-logo">
                            <img src="assets/img/supporters/desy glow.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- End Sponsors Section -->

        <!-- ======= Buy Ticket Section ======= -->
        <section id="buy-tickets" class="section-with-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Buy Tickets</h2>
                    <p>Beli Tiket Webinar dan Bootcamp PK FEST 8</p>
                </div>


                <div class="row">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Webinar</h5>
                                <h6 class="card-price text-center">Rp 10.000</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Ilmu yang bermanfaat</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Menambah teman baru
                                    </li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>E-sertifikat
                                    </li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Reward Total Ratusan Ribu Rupiah
                                    </li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>25 Point Book*</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Buy
                                        Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Bootcamp</h5>
                                <h6 class="card-price text-center">Rp 65.000</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Ilmu yang bermanfaat</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Menambah teman baru
                                    </li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Sertifikat
                                    </li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Bootcamp Kit / Suvenir</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>BRIZZI Card (E-money BRI)</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>2 X Makan Siang</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Reward Total Ratusan Ribu Rupiah</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>25 Point Book*</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <a href="https://api.whatsapp.com/send/?phone=6281220404221&text=Halo%2C+Saya+ingin+daftar+Bootcamp+PK+FEST+8&app_absent=0" target="_BLANK">
                                        <button class="btn btn-primary">Buy Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pro Tier -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Webinar + Bootcamp</h5>
                                <h6 class="card-price text-center">Rp 75.000</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Ilmu yang bermanfaat</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Menambah teman baru
                                    </li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>E-Sertifikat Webinar
                                    </li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Sertifikat Bootcamp</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Bootcamp Kit / Suvenir</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>BRIZZI Card (E-money BRI)</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Coffee Break</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>2 X Makan Siang</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>Reward Total Ratusan Ribu Rupiah</li>
                                    <li><span class="fa-li"><i class="fa fa-check"></i></span>50 Point Book*</li>
                                </ul>
                                <hr>
                                <div class="text-center">
                                    <a href="https://api.whatsapp.com/send/?phone=6281220404221&text=Halo%2C+Saya+ingin+daftar+Paket+Webinar+dan+Bootcamp+PK+FEST+8&app_absent=0" target="_BLANK">
                                        <button class="btn btn-primary">Buy Now</button>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <p style="margin-top:20px"><i>* Point Book Mahasiswa STMIK Widya Pratama</i></p>
                </div>

            </div>

            <!-- Modal Order Form -->
            <div id="buy-ticket-modal" class="modal fade">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Perhatian !</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Sebelum melakukan pembayaran, silahkan memasukan NIM anda di kolom "STUDENT ID NUMBER"</p>
                            <a href="http://goers.co/webinarpkfest8" target="_BLANK">
                                <button class="btn btn-primary">Beli Tiket</button>
                            </a>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        </section><!-- End Buy Ticket Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg">

            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact Us</h2>
                    <!-- <p>Hubungi kami dengan kontak Whatsapp dibawah ini.</p> -->
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <address>Jl. Patriot No.25, Dukuh, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51146</address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="bi bi-phone"></i>
                            <h3>Phone Number</h3>
                            <p><a href="https://api.whatsapp.com/send/?phone=6281220404221&text=halo+panitia+pkfest%2C&app_absent=0" target="_BLANK">08122 0404 221</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="bi bi-envelope"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:ukmpk.wp@gmail.com">ukmpk.wp@gmail.com</a></p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>PK FEST</strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
      -->
                Created by <a href="https://www.instagram.com/khazim_star/" target="_BLANK">Khazim Star</a>
                Designed by <a href="https://bootstrapmade.com/" target="_BLANK">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>