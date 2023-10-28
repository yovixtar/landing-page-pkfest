<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Waiting Room Peserta Webinar PK FEST 8</title>
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

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: TheEvent - v4.7.0
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <?php
    $peserta = array(
        "54789dc3b144167097ca61a23059a7bb",
        "6ebeee83ad34713055ebe08f9b8ae2f4", 
        "5a344161288f69b9336bb4f1ce88282b", 
        "e3315b3c6e1dca02a4597a25476f7c0e",
        "e0495e3e3d20cfea5fcd9032e3c02ad1",
        "2c1042f1ac0edc9c4ce7781c351f19ef",
        "1d98e488b7dc0be9cd79c63cf5646543",
        "6c4b73acf0891e08425535437838a3b0",
        "61bad0383e5796fcf5e5307521a88950",
        "2d6bc4057e70ab39aeaf7205448f7c30",
    );

    if (isset($_GET['peserta'])) {
        if (in_array($_GET['peserta'], $peserta)) {
    ?>
            <script>
                window.setInterval('refresh()', 10000);

                function refresh() {
                    window.location.reload();
                }
            </script>

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
            <!-- ======= Hero Section ======= -->
            <section id="hero">
                <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
                    <h1 class="mb-4 pb-0">Maximize<br><span>Our Potential</span> in Society Era 5.0</h1>
                    <p class="mb-2 pb-0">10 September 2022, Pukul 08.00 - 12.00 WIB</p>
                    <p class="mb-4 pb-0">Link akan muncul +- 15 menit sebelum Acara</p>
                    <p id="countdownEvent" class="text-white"></p>
                    <a href="javascript:void(0)" class="about-btn scrollto disabled">Link Event Belum Tersedia</a>
                </div>
            </section><!-- End Hero Section -->
        <?php
        } else {
        ?>
            <!-- ======= Hero Section ======= -->
            <section id="hero">
                <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
                    <h1 class="mb-4 pb-0">Maximize<br><span>Our Potential</span> in Society Era 5.0</h1>
                    <p class="mb-2 pb-0">Mohon Maaf Anda bukan Peserta</p>
                </div>
            </section><!-- End Hero Section -->
        <?php
        }
    } else {
        ?>
        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
                <h1 class="mb-4 pb-0">Maximize<br><span>Our Potential</span> in Society Era 5.0</h1>
                <p class="mb-2 pb-0">Mohon Maaf Anda bukan Peserta</p>
            </div>
        </section><!-- End Hero Section -->
    <?php
    }
    ?>

</body>

</html>