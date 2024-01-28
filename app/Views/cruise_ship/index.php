<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="../img/typewriter.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>CV GENERATOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/css/pdf.css">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,500");
        @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,700");

        body {
            font-family: "Poppins", sans-serif;
            background-color: #edf2f9;
            font-size: 13px;
        }

        /* CSS comes here */
        #video {
            border: 1px solid black;
            width: 100%;
            height: 100%;
            /* height: 240px; */
        }

        #photo {
            border: 1px solid black;
            width: 100%;
            /* height: 240px; */
        }

        #canvas {
            display: none;
        }

        .camera {
            /* width: 340px; */
            width: 100%;
            display: inline-block;
        }

        .output {
            width: 100%;
            /* width: 340px; */
            display: inline-block;
        }

        #startbutton {
            display: block;
            position: relative;
            margin-left: auto;
            margin-right: auto;
            bottom: 36px;
            padding: 5px;
            background-color: #6a67ce;
            border: 1px solid rgba(255, 255, 255, 0.7);
            font-size: 14px;
            color: rgba(255, 255, 255, 1.0);
            cursor: pointer;
        }

        .contentarea {
            font-size: 16px;
            font-family: Arial;
            text-align: center;
        }

        .p-5 {
            padding: 1rem !important;
        }

        .btn-primary {
            color: #fff;
            background-color: #0a969d;
            border-color: #0a969d;
        }

        .btn-outline-primary {
            color: #0a969d;
            border-color: #0a969d;
        }

        .list-group-item.active {
            z-index: 2;
            color: #fff;
            background-color: #0a969d;
            border-color: #0a969d;
        }

        a {
            color: #dc3545;
            text-decoration: none;
        }

        #startbutton {
            background-color: #0a969d;
        }


        /* croppin */
        @-webkit-keyframes placeHolderShimmer {
            0% {
                background-position: -468px 0;
            }

            100% {
                background-position: 468px 0;
            }
        }

        @keyframes placeHolderShimmer {
            0% {
                background-position: -468px 0;
            }

            100% {
                background-position: 468px 0;
            }
        }


        .canvas {
            max-height: 150px;
            width: auto;
            max-width: 300px;
        }

        .form-control,
        .form-select {
            background-color: #e9ecef;
        }

        /* responsive iframe */
        .aaa {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding-top: 56.25%;
            /* 16:9 Aspect Ratio */
        }

        .responsive-iframe {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .isitabel {
            font-size: 11px;
        }

        .judultabel {
            font-size: 12px;
        }

        .isi-cv {
            overflow: auto;
            white-space: nowrap;
            border: 1px solid #c5c5c5;
            padding: 15px;
            width: 100%;
        }

        .tanpa-tabel {
            border-color: #dee2e603;
        }

        .latar {
            background-color: whitesmoke;
            margin-bottom: 0.5rem !important;
        }

        .btn {
            padding: 0.1rem 0.1rem;
        }

        .subjudul {
            margin-top: 0cm;
            margin-right: 0cm;
            margin-left: 0cm;
            line-height: 107%;
            font-size: 15px;
        }

        .accordion-flush .accordion-item .accordion-button {
            background-color: #0a969d;
            border-radius: 5px 5px 0 0;
            color: white;
            padding: 10px;
            font-size: 10pt;
        }

        .accordion-body {
            padding: 0;
        }

        .swal2-styled.swal2-confirm {
            background-color: #065a5e !important;
        }
    </style>
</head>

<body>
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "555807571514599");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v13.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
    <div class="container" style="padding:0px !important; margin-bottom: 60px">
        <div class="p-5 mb-4 shadow-sm text-center" style="background: #0a969d;">
            <h1 class="display-5 fw-bold">CURRICULUM VITAE</h1>
            <p class="fs-4 text-white my-0">Simply fill out the form and generate your CV to pdf file.</p>
        </div>

        <div class="container ">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <div class="accordion accordion-flush mb-3 d-block d-lg-none d-xl-none" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    MAIN MENU
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="list-group">
                                        <li class="list-group-item active" aria-current="true">MAIN MENU</li>
                                        <li class="list-group-item"><a href="/pilihan">Home</a></li>
                                        <li class="list-group-item"><a href="/deck_engine">CV for Seafarer</a></li>
                                        <li class="list-group-item"><a href="/cruise_ship">CV for Cruise Ship</a></li>
                                        <li class="list-group-item"><a href="/lebenslauf">Lebenslauf</a></li>
                                        <li class="list-group-item"><a href="/genpublic">CV for Public</a></li>
                                        <li class="list-group-item"><a href="/gform">Job Vacancy</a></li>
                                        <li class="list-group-item"><a href="/profil">Profile</a></li>
                                        <li class="list-group-item"><a href="/logout">Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="list-group d-none d-lg-block d-xl-block">
                        <li class="list-group-item active" aria-current="true">MAIN MENU</li>
                        <li class="list-group-item"><a href="/pilihan">Home</a></li>
                        <li class="list-group-item"><a href="/deck_engine">CV for Seafarer</a></li>
                        <li class="list-group-item"><a href="/cruise_ship">CV for Cruise Ship</a></li>
                        <li class="list-group-item"><a href="/lebenslauf">Lebenslauf</a></li>
                        <li class="list-group-item"><a href="/genpublic">CV for Public</a></li>
                        <li class="list-group-item"><a href="/gform">Job Vacancy</a></li>
                        <li class="list-group-item"><a href="/profil">Profile</a></li>
                        <li class="list-group-item"><a href="/logout">Logout</a></li>
                    </ul>
                    <div class="card shadow-sm mt-3 d-none d-lg-block d-xl-block">
                        <div class="card-body kontak">
                            <h5 class="card-title text-center">FEEDBACK/CONTACT</h5>
                            <div class="text-center">
                                <p class="text-center">Need help? Click here</p>
                            </div>
                            <div class="d-none d-lg-block d-xl-block">
                                <a href="https://wa.me/+628115995950?text=Hi%20Admin,%20could%20you%20please%20explain%20in%20more%20detail%20about%20this%20CV-Generator" class="btn btn-success w-100"><i class="bi bi-whatsapp"></i> Whatsapp</a>
                            </div>
                            <br>
                            <div class="text-center">
                                <a href="<?php echo base_url('/privacy') ?>">Privacy Policy</a> <br>
                                <a href="<?php echo base_url('/imprint') ?>">Imprint</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg mb-5">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">GENERATE CV</li>
                        <li class="list-group-item text-center p-3">
                            <div class="btn-group w-100  " role="group" aria-label="Basic example">
                                <button type="button" class="shadow-sm p-2  btn btn-warning btn-lg " onclick="document.getElementById('frame_cruiseship').contentWindow.download();"><i class="bi bi-cloud-download-fill"></i> SAVE PDF <small>(Default Size)</small></button>
                                <button type="button" class="shadow-sm p-2  btn btn-danger btn-lg" onclick="document.getElementById('frame_cruiseship').contentWindow.print();"><i class="bi bi-printer-fill"></i> PRINT/SAVE <small>(Custom Size)</small> </button>
                            </div>
                        </li>
                        <li class="list-group-item text-center">
                            <div class="ratio ratio-1x1">
                                <iframe class="embed-responsive-item" name="frame" src="<?= base_url('/pdf_view_cruiseship') ?>"></iframe>
                            </div>

                            <iframe class="embed-responsive-item" width="0px" height="0px" name="frame_cruiseship" id="frame_cruiseship" src="<?= base_url('/pdf_print_cruiseship') ?>"></iframe>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fixed-bottom" style="padding:0px !important; ">
        <footer class="footer mt-auto py-2 " style="background: #0a969d;">
            <div class="container text-center">
                <a href="https://www.cv-gen.com/" target="_blank" rel="noopener noreferrer" class="text-white">Copyright &copy;. 2021-<script>
                        document.write(new Date().getFullYear())
                    </script> | www.cv-gen.com</a>
            </div>
        </footer>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function download() {
            const element = window.getElementById("contentToPrint");
            html2pdf()
                .from(element)
                .save();
        }
    </script>
</body>

</html>