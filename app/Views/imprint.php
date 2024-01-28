<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CV Generator Otomatis untuk bekerja di Jerman, Kapal dan Hotel">
    <meta name="description" content="Ingin dapat pekerjaan di Kapal dan Hotel diJerman atau Eropa? Gunakan Aplikasi untuk CV generator otomatis bagi yang ingin bekerja di Hotel atau Kapal Laut.">
    <meta name="author" content="cv-gen">
    <meta name="keywords" content="CV, CV Generator, Curriculum Vitae, CV for Work in Germany, CV For Seafarer, CV for Cruise Ship and Hotel">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="CV Generator Otomatis untuk bekerja di Jerman, Kapal dan Hotel" />
    <meta property="og:description" content="Ingin dapat pekerjaan di Kapal dan Hotel diJerman atau Eropa? Gunakan Aplikasi untuk CV generator otomatis bagi yang ingin bekerja di Hotel atau Kapal Laut." />
    <meta property="og:url" content="https://cv-gen.com/" />
    <meta property="og:image" content="https://cv-gen.com/img/cv-gen-medsos.jpg" />

    <link rel="shortcut icon" href="../img/typewriter.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>CV GENERATOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.11/cropper.min.css" integrity="sha512-NCJ1O5tCMq4DK670CblvRiob3bb5PAxJ7MALAz2cV40T9RgNMrJSAwJKy0oz20Wu7TDn9Z2WnveirOeHmpaIlA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/css/pdf.css">
    <link rel='stylesheet' href='/css/yearpicker.css' />
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
            font-size: 13px;
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
    </style>
</head>

<body>
    <!-- Messenger Chat plugin Code -->
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
                <div class="col-lg-30 mb-5">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">Impressum</li>
                        <li class="list-group-item">
                            <h1>OWNER OF THE WEBSITE</h1>
                            <p>Tri Pramedi Agusadharin</p>

                            <h2>INFORMATION ABOUT THE COMPANY</h2>

                            <p>Jl. Pahlawan No. 1 Kota Baubau, Sulawesi Tenggara, Indonesia <br>
                                E-Mail: ami@cv-gen.com <br>
                                E-Mail: tripramedi@gmail.com <br>
                                Tel. 6285298649951 <br>
                                Tel. 6285256947201</p>

                            <h2>INFORMATION ABOUT THE COMPANY REGISTRATION</h2>

                            <p>Information on online dispute resolution: The EU Commission has created an internet platform for online dispute resolution (so-called “OS platform”). The OS platform serves as a contact point for the out-of-court settlement of disputes regarding contractual obligations arising from online purchase contracts. You can access the OS platform using the following link: <a href="http://ec.euopa.eu/consumers/odr">http://ec.euopa.eu/consumers/odr</a> “Notice in accordance with Section 36 of the Consumer Dispute Settlement Act (VSBG)..</p>

                        </li>
                    </ul>
                </div>

                <!-- MODAL -->

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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function loading() {

            Swal.fire({
                html: 'Please wait...', // add html attribute if you want or remove
                allowOutsideClick: false,
                showCancelButton: false,
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading()
                },
            });
        }
        const swal = $('.swal').data('swal');
        if (swal) {
            Swal.fire({
                html: swal,
            })
        }
    </script>
</body>

</html>