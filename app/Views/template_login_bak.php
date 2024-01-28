<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentalmo, Rental Mobil dan Motor</title>
    <meta name="title" content="Rentalmo, Rental Mobil dan Motor">
    <meta name="description" content="Rentalmo adalah aplikasi Rental Mobil dan Motor, yang dibangun bersama mitra rental kendaraan di seluruh Nusantara. Daftarkan kendaraan anda dapatkan beragam keuntungan.">
    <meta name="keywords" content="rentalmo, rental, rental mobil, rental motor">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/rentalmo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/rentalmo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/rentalmo.png">
    <link rel="shortcut icon" type="image/x-icon" href="/img/rentalmo.png">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/img/rentalmo.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="/css/theme.min.css" rel="stylesheet" id="style-default">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .form-label {
            margin-bottom: 0rem;
            font-size: 0.875rem;
        }

        .swal2-styled.swal2-confirm {
            border: 0;
            border-radius: 0.25em;
            background: initial;
            background-color: #2a7eed;
            color: #fff;
            font-size: 1em;
        }
    </style>
</head>

<body>
    <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
    <main class="main" id="top">
        <div class="container-fluid">
            <div class="row min-vh-100 flex-center g-0">
                <div class="col-lg-8 col-xxl-5 py-3 position-relative">
                    <div class="card overflow-hidden z-index-1">
                        <div class="card-body p-0">
                            <div class="row g-0 h-100">
                                <div class="col-md-5 text-center bg-card-gradient">
                                    <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                                        <div class="bg-holder bg-auth-card-shape" style="background-image:url(/img/half-circle.png);"></div>
                                        <!--/.bg-holder-->
                                        <div class="z-index-1 position-relative">


                                            <p class=" text-white"><strong class="opacity-40">CURRICULUM VITAE GENERATOR</strong><br>
                                                <span class="link-light  font-sans-serif fs-4 d-inline-block fw-bolder">CV-GEN</span><br>
                                                <span class="opacity-35 fs--2">Simply fill out the form and generate your CV.</span>
                                            </p>

                                        </div>
                                    </div>

                                    <?= $this->renderSection('content'); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/js/pesan.js"></script>
</body>

</html>