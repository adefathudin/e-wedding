<?php

$id = $_GET['id'] ? $_GET['id'] : null;
$place = $_GET['place'] ? $_GET['place'] : null;

if (!empty($id) and !empty($place)) {
    if (base64_encode(base64_decode($id, true)) == $id and base64_encode(base64_decode($place, true)) == $place) {
        $id = base64_decode($_GET['id']);
        $place = " (" . base64_decode($_GET['place']) . ")";
    } else {
        $id = '';
        $place = '';
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, sif (nk-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <meta name="description" content="Our Wedding - Melly Handayani & Ade Fathudin">
    <meta property="og:title" content="Melly and Ade Wedding" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="http://melly.adefathudin.com/img/section1/ma.jpg">
    <meta property="og:image" itemprop="image" content="http://melly.adefathudin.com/img/section1/ma.jpg">
    <link itemprop="thumbnailUrl" href="http://melly.adefathudin.com/img/section1/ma.jpg">
    <link itemprop="url" href="http://melly.adefathudin.com/img/section1/ma.jpg">
    <meta property='og:type' content='article'>


    <title>Our Wedding - Melly Handayani and Ade Fathudin</title>
    <link rel="icon" href="img/favicon.png" type="image/gif" />


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <!-- fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Dancing+Script|Dosis|Kaushan+Script|Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <!-- style sheets -->
    <link href="css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <style>
        .chat-online {
            color: #34ce57
        }

        .chat-offline {
            color: #e4606d
        }

        .chat-messages {
            display: flex;
            flex-direction: column;
            max-height: 800px;
            overflow-y: scroll
        }

        .chat-message-left,
        .chat-message-right {
            display: flex;
            flex-shrink: 0
        }

        .chat-message-left {
            margin-right: auto
        }

        .chat-message-right {
            flex-direction: row-reverse;
            margin-left: auto
        }

        .py-3 {
            padding-top: 1rem !important;
            padding-bottom: 1rem !important;
        }

        .px-4 {
            padding-right: 1.5rem !important;
            padding-left: 1.5rem !important;
        }

        .flex-grow-0 {
            flex-grow: 0 !important;
        }

        .border-top {
            border-top: 1px solid #dee2e6 !important;
        }
    </style>


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" id="home">
    <nav class="navbar navbar-expand-xl navbar-light fixed-top">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand wow slideInLeft" href="#" style="font-size: 20px;">Melly <i class="fas fa-heartbeat hvr-pulse"></i> Ade</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa fa-list"></i>
            </button>


            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="#mukadimah">Mukadimah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#akad-resepsi">Akad & Resepsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#event">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#lokasi-acara">Lokasi Acara</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#doa">Ucapan Do'a</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>



    <section class="section-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 content offset-xl-6">
                    <div class="wrap-content">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-2" id="mukadimah">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h1>اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَا تُهُ</h1>
                    <div class="text-section">
                        <p>
                            Dengan memohon rahmat dan ridho Allah SWT yang telah menciptakan makhluknya secara
                            berpasang-pasangan, kami bermaksud menyelenggarakan pernikahan kami
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-md-6">

                            <div class="col-xl-8 bridegroom">
                                <img src="img/section2/text-bg2.png" />

                            </div>
                            <div class="text-section">
                                <h3 class="">Melly Handayani</h3>
                                <p>
                                    <span class="font-italic">Putri Pertama dari</span><br>
                                    <span>Bpk. Samad & Ibu Nesah</span>
                                </p>

                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6">
                            <div class="col-xl-8  bride">
                                <img src="img/section2/text-bg2.png" />

                            </div>
                            <div class="text-section">
                                <h3 class="">Ade Fathudin S.Kom</h3>
                                <p>
                                    <span class="font-italic">Putra Keenam dari</span><br>
                                    <span>Bpk. A. Komarudin & Almh. Ibu Enah</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 text-section">
                        <figure class="text-center">
                            <blockquote class="blockquote">
                                <p>
                                    Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan
                                    untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan
                                    Dia
                                    menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu
                                    benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.
                                </p>
                            </blockquote>
                            <h5 style="font-family: 'Dancing Script', cursive;">Q.S Ar-Rum (21)</h5>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-5" id="akad-resepsi">
        <div class="container">
            <div class="row">

                <div class="col-xl-12 heading">
                    <h1>Akad & Resepsi</h1>
                </div>

            </div>
            <div class="row">

                <div class="col-xl-6 col-md-8 event text-center">
                    <div class="col-xl-11 p-0 border-area">
                        <div class="content">
                            <h1 class="mb-4">Akad Nikah</h1>
                            <h3 class="mb-4"><i class="fa fa-calendar-alt"></i></h3>
                            <h6>Minggu, 06 Februari 2022 <br> 09:00 WIB - Selesai</h6><br>
                            <h3 class="mb-4"><i class="fa fa-map-marker-alt"></i></h3>
                            <h6 class="font-weight-bold">Kediaman Mempelai Wanita</h6>
                            <h6>Kp. Kebantenan, Jl. Koja 2 RT/RW 003/012, Jatiasih, Bekasi</h6>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-8 event text-center">
                    <div class="col-xl-11 p-0 border-area">
                        <div class="content">
                            <h1 class="mb-4">Resepsi</h1>
                            <h3 class="mb-4"><i class="fa fa-calendar-alt"></i></h3>
                            <h6>Minggu malam Senin, 06 - 07 Februari 2022<br> 10:00 WIB - Selesai</h6><br>
                            <h3 class="mb-4"><i class="fa fa-map-marker-alt"></i></h3>
                            <h6 class="font-weight-bold">Kediaman Mempelai Wanita</h6>
                            <h6>Kp. Kebantenan, Jl. Koja 2 RT/RW 003/012, Jatiasih, Bekasi</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-3" id="event">
        <div class="container">
            <div class="row">
                <!-- days -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <p id="days">111</p>
                    <h1>Hari</h1>
                </div>

                <!-- hours -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <p id="hours">10</p>
                    <h1>Jam</h1>
                </div>

                <!-- minutes -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <p id="minutes">9</p>
                    <h1>Menit</h1>
                </div>
                <!-- seconds -->
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <p id="Seconds">0</p>
                    <h1>Detik</h1>
                </div>
            </div>
        </div>
    </section>

    <!--section 7-->

    <section class="section-7" id="lokasi-acara">
        <div class="container">
            <div class="row ">
                <div class="col-xl-12 heading">
                    <h1>Lokasi Acara</h1>
                </div>
            </div>
            <div class="text-section">
                <p>Kp. Kebantenan, Jl. Koja 2 RT/RW 003/012, Jatiasih, Bekasi</p>
                <p>

                    <a href="https://goo.gl/maps/Vk58z1Xsg5n4Qb6V7" target="_blank" class="btn btn-primary mb-4 btn-outline-primary"><i class="fa fa-globe-asia fa-spin"></i> Open Google Maps <i class="fas fa-map-marked-alt text-danger"></i></a>
                </p>
            </div>
            <div class="row">
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6184872031868!2d106.95753351531975!3d-6.313744663544738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd0f240fa66f66f5!2zNsKwMTgnNDkuNSJTIDEwNsKwNTcnMzUuMCJF!5e0!3m2!1sen!2sid!4v1642401469706!5m2!1sen!2sid" width="100%" height="100%" style="border:0; min-height: 350px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- 
    <section class="section-7" id="doa" style="background: #efefef;">
        <div class="container">
            <div class="row">

                <div class="col-xl-12 heading">
                    <h1>Ucapan Do'a</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8">
                    <main class="content">
                        <div class="container p-0">
                            <div class="card shadow">
                                <div class="row g-0">
                                    <div class="col-12 col-lg-12 col-xl-12">
                                        <div class="position-relative">
                                            <div class="flex-grow-0 py-3 px-4 border-top">
                                                <div class="form-group">
                                                    <form method="POST" action="" class="form-doa">
                                                        <input type="text" class="form-control mb-2" placeholder="Nama kamu" value="<?= $id . $place ?>">
                                                        <textarea class="form-control mb-2" placeholder="Ucapan do'a..."></textarea>
                                                        <div class="d-flex justify-content-end">
                                                            <button class="btn btn-outline-primary btn-submit" type="submit"><span style="font-style: 'Dancing Script';">kirim </span> <i class="fa fa-hand-holding-heart text-danger"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="chat-messages p-4">
                                                <div class="chat-message-left pb-4">
                                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3">
                                                        <div class="font-weight-bold">Ade Fathudin</div>
                                                        <div class="text-muted small text-nowrap mb-2">06 Feb 2022 12:09 WIB</div>
                                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                                    </div>
                                                </div>
                                                <div class="chat-message-left pb-4">
                                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3">
                                                        <div class="font-weight-bold">Ade Fathudin</div>
                                                        <div class="text-muted small text-nowrap mb-2">06 Feb 2022 12:09 WIB</div>
                                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                                    </div>
                                                </div>
                                                <div class="chat-message-left pb-4">
                                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3">
                                                        <div class="font-weight-bold">Ade Fathudin</div>
                                                        <div class="text-muted small text-nowrap mb-2">06 Feb 2022 12:09 WIB</div>
                                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                                    </div>
                                                </div>
                                                <div class="chat-message-left pb-4">
                                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3">
                                                        <div class="font-weight-bold">Ade Fathudin</div>
                                                        <div class="text-muted small text-nowrap mb-2">06 Feb 2022 12:09 WIB</div>
                                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                                    </div>
                                                </div>
                                                <div class="chat-message-left pb-4">
                                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3">
                                                        <div class="font-weight-bold">Ade Fathudin</div>
                                                        <div class="text-muted small text-nowrap mb-2">06 Feb 2022 12:09 WIB</div>
                                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                                    </div>
                                                </div>
                                                <div class="chat-message-left pb-4">
                                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3">
                                                        <div class="font-weight-bold">Ade Fathudin</div>
                                                        <div class="text-muted small text-nowrap mb-2">06 Feb 2022 12:09 WIB</div>
                                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                                    </div>
                                                </div>
                                                <div class="chat-message-left pb-4">
                                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3">
                                                        <div class="font-weight-bold">Ade Fathudin</div>
                                                        <div class="text-muted small text-nowrap mb-2">06 Feb 2022 12:09 WIB</div>
                                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                                    </div>
                                                </div>
                                                <div class="chat-message-left pb-4">
                                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3">
                                                        <div class="font-weight-bold">Ade Fathudin</div>
                                                        <div class="text-muted small text-nowrap mb-2">06 Feb 2022 12:09 WIB</div>
                                                        Sit meis deleniti eu, pri vidit meliore docendi ut, an eum erat animal commodo.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </section> -->


    <section class="section-9">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 thank-section text-section">
                    <p>
                        Acara ini diselenggarakan dengan tetap menjalankan protokol kesehatan yang harus dipatuhi demi
                        mencegah penyebaran virus Covid-19. Tanpa mengurangi rasa hormat, para tamu undangan dihimbau
                        untuk melakukan hal berikut:
                    </p>
                    <img class="img-fluid" height="70%" width="70%" src="img/prokes.png" />
                    <p>
                        Atas kehadiran dan do’a restu Bapak/Ibu/Saudara/i Kami ucapkan terimakasih.
                    </p>
                    <div class="section-2">
                        <h1 class="mt-4">وَالسَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p class="text-center">&copy; 2021 - Created with <i class="fa fa-heart text-danger"></i> by <a href="https://adefathudin.com" target="_blank">Ade Fathudin</a></p>
    </footer>

    <?php if ($id != '' and $place != '') { ?>

        <div class="modal fade" id="mymodalx" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Body-->
                    <div class="modal-body text-center mb-1 mt-2">
                        <h5 class="mt-1 mb-2" style="font-family: 'Dancing Script', cursive;color: #000000;">Wedding Invitation</h5>
                        <h3 class="mt-1 mb-2 font-weight-bold" style="font-family: 'Dancing Script', cursive;color: #000000;">Melly & Ade</h3>
                        <div class="modal-body">
                            <p style="margin-bottom: 15px;">Dear</p>
                            <h3 style="font-family: 'Comfortaa', cursive;"><?= $id ?></h3>
                            <p style="font-size: 16px;">di <?= $place ?></p>
                        </div>
                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Open</button>
                        </div>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>

    <?php } ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- 
    <script>
        var JS = {
            Init: function() {
                var _this = this;
                _this._init_panel_doa();
            },            
            _init_panel_doa: function() {

                var $panel_doa = $('#doa');
                var $form = $anel_doa.find('.form-doa');

                form.validate({
                    submitHandler: function(form){
                        $(form).ajaxSubmit({
                            url: $(form).attr('action'),
                            method: $(form).attr('method'),
                            beforeSubmit: function(){
                                $form.find('type["submit"]').text('processing')
                            }
                        })
                    }
                })
            }

        }
    </script> -->

    </script>


    <!-- stickey nav -->
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 5) {
                $(".navbar").addClass("bg-transparent")
            } else {
                $(".navbar").removeClass("bg-transparent")
            }

        });

        $('#mymodalx').modal('show');
    </script>
    <!-- stickey nav end -->



    <!--wow js-->

    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!--wow js end-->


    <!-- smooth scroll -->
    <script>
        $(document).ready(function() {

            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });

            if ('<?= $id ?>') {
                //$('#contactForm').find('#message').focus();
                $('#contactForm').find('#name').attr('readonly', true);
            } else {
                $('#contactForm').find('#name').focus();
            }

            var doa = $('#doa');
            var form = doa.find('.form-doa');

            form

        });
    </script>

    <!--smooth scroll end-->


    <!-- countdown timer-->
    <script>
        function countdown() {

            var launchday = new Date("february 06,2022 08:0:00");
            var now = new Date();
            var timediff = launchday.getTime() - now.getTime();

            var seconds = Math.floor(timediff / 1000);
            var minutes = Math.floor(seconds / 60);
            var hours = Math.floor(minutes / 60);
            var days = Math.floor(hours / 24);

            hours %= 24;
            minutes %= 60;
            seconds %= 60;

            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("Seconds").innerHTML = seconds;


            var timer = setTimeout('countdown()', 1000);



        }
    </script>

    <script type="text/javascript">
        countdown();
    </script>

    <!-- countdown timer-->


</body>

</html>