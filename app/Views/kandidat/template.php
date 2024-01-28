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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
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
        span.mata {
            position: relative;
            top: -30px;
            margin: 0 10px;
            float: right;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
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
                <div class="col-lg-3 mb-3">
                    <ul class="list-group mb-4">
                        <li class="list-group-item p-0">
                            <div class="d-flex justify-content-around">
                                <a href="https://www.facebook.com/cvgenoverseas" target="_blank" style="text-decoration: none;"><i class="bi bi-facebook" style="font-size: 2rem; color: #195acd"></i></a>
                                <a href="https://instagram.com/cvgencom" target="_blank" style="text-decoration: none;"><i class="bi bi-instagram" style="font-size: 2rem; color: #c719cd"></i></a>
                                <a href="https://twitter.com/Amsulistiani" target="_blank" style="text-decoration: none;"><i class="bi bi-twitter" style="font-size: 2rem; color: #0da2f0"></i></a>
                                <a href="https://www.linkedin.com/in/amsulistiani-ensch-85379824" target="_blank" style="text-decoration: none;"><i class="bi bi-linkedin" style="font-size: 2rem; color: #0dcaf0"></i></a>
                            </div>
                        </li>
                    </ul>
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
                                        <a href="/pilihan">
                                            <li class="list-group-item">Home</li>
                                        </a>
                                        <a href="/deck_engine">
                                            <li class="list-group-item">CV for Seafarer</li>
                                        </a>
                                        <a href="/cruise_ship">
                                            <li class="list-group-item">CV for Cruise Ship
                                            </li>
                                        </a>
                                        <a href="/lebenslauf">
                                            <li class="list-group-item">Lebenslauf
                                            </li>
                                        </a>
                                        <a href="/genpublic">
                                            <li class="list-group-item">CV for Public
                                            </li>
                                        </a>
                                        <a href="/gform">
                                            <li class="list-group-item">Job Vacancy
                                            </li>
                                        </a>
                                        <a href="/profil">
                                            <li class="list-group-item">Profile
                                            </li>
                                        </a>
                                        <a href="/logout">
                                            <li class="list-group-item">Logout
                                            </li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="list-group d-none d-lg-block d-xl-block">
                        <li class="list-group-item active" aria-current="true">MAIN MENU</li>
                        <a href="/pilihan">
                            <li class="list-group-item">Home</li>
                        </a>
                        <a href="/deck_engine">
                            <li class="list-group-item">CV for Seafarer</li>
                        </a>
                        <a href="/cruise_ship">
                            <li class="list-group-item">CV for Cruise Ship</li>
                        </a>
                        <a href="/lebenslauf">
                            <li class="list-group-item">Lebenslauf</li>
                        </a>
                        <a href="/genpublic">
                            <li class="list-group-item">CV for Public</li>
                        </a>
                        <a href="/gform">
                            <li class="list-group-item">Job Vacancy</li>
                        </a>
                        <a href="/profil">
                            <li class="list-group-item">Profile</li>
                        </a>
                        <a href="/logout">
                            <li class="list-group-item">Logout</li>
                        </a>
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
                        </div>
                    </div>
                </div>

                <?= $this->renderSection('content'); ?>

                <div class="container-fluid fixed-bottom" style="padding:0px !important; ">
                    <footer class="footer mt-auto py-2 " style="background: #0a969d;">
                        <div class="container text-center">
                            <a href="https://www.cv-gen.com/" target="_blank" rel="noopener noreferrer" class="text-white">Copyright &copy;. 2021-<script>
                                    document.write(new Date().getFullYear())
                                </script> | www.cv-gen.com</a>
                        </div>
                    </footer>
                </div>

                <div class="modal fade" id="profil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">PHOTO PROFILE</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class="d-grid mb-3">
                                    <button type="button" id="crop" class="btn btn-primary btn-md" onclick="loading()">SAVE PHOTO</button>
                                </div>
                                <div class="row">
                                    <div class="col" style="padding-left: 0px !important;">
                                        <img src="" id="sample_image" class="img-fluid" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.11/cropper.min.js" integrity="sha512-FHa4dxvEkSR0LOFH/iFH0iSqlYHf/iTwLc5Ws/1Su1W90X0qnxFxciJimoue/zyOA/+Qz/XQmmKqjbubAAzpkA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script src='/js/yearpicker.js'></script>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                <script>
                    $(function() {
                        $("#show_eye").click(function() {
                            $(this).toggleClass("bi bi-eye-slash-fill");
                            var type = $(this).hasClass("bi-eye-slash-fill") ? "text" : "password";
                            $("#password").attr("type", type);
                        });
                    });

                    $(".yearpicker").yearpicker()

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


                    var $modal = $('#profil');
                    var image = document.getElementById('sample_image');
                    var cropper;

                    $('#upload_image').change(function(event) {
                        var files = event.target.files;

                        var done = function(url) {
                            image.src = url;
                            $modal.modal('show');
                        };

                        if (files && files.length > 0) {
                            reader = new FileReader();
                            reader.onload = function(event) {
                                done(reader.result);
                            };
                            reader.readAsDataURL(files[0]);
                        }
                    });

                    $modal.on('shown.bs.modal', function() {
                        cropper = new Cropper(image, {
                            // aspectRatio: 16 / 9,
                            aspectRatio: 4 / 5,
                            // aspectRatio: NaN,
                            // aspectRatio: 1,
                            viewMode: 3,
                            // preview: '.preview'
                        });

                    }).on('hidden.bs.modal', function() {
                        cropper.destroy();
                        cropper = null;
                    });

                    $('#crop').click(function() {
                        canvas = cropper.getCroppedCanvas({
                            width: 400,
                            height: 400,
                            fillColor: '#fff',
                            imageSmoothingEnabled: true,
                            imageSmoothingQuality: 'high',
                        });

                        canvas.toBlob(function(blob) {
                            url = URL.createObjectURL(blob);
                            var reader = new FileReader();
                            reader.readAsDataURL(blob);
                            reader.onloadend = function() {
                                var base64data = reader.result;
                                $.ajax({

                                    url: '/simpan_photo',
                                    method: 'POST',
                                    data: {
                                        image: base64data,
                                    },
                                    success: function(data) {
                                        $modal.modal('hide');
                                        // location.reload();
                                        location.href = "/profil";
                                        // $('#profilku').attr('src', data);
                                    }
                                });
                            };
                        });
                    });
                </script>
</body>

</html>