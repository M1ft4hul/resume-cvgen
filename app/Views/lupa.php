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
                                    <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                                        <p class="text-white">Don't have an account yet?<br><a role="button" tabindex="0" href="/daftar" class="mt-2 px-4 btn btn-outline-light">Sign Up</a> -or- <a role="button" tabindex="0" href="/login" class="mt-2 px-4 btn btn-outline-light">Login</a></p>
                                        <p class="mb-0 mt-4 mt-md-5 fs--1 fw-semi-bold text-white opacity-75">Read the <a class="text-decoration-underline text-white" href="terms"> Terms and Conditions </a></p>
                                    </div>
                                </div>
                                <div class="col-md-7 d-flex flex-center">
                                    <div class="p-4 p-md-5 flex-grow-1">
                                        <div class="row flex-between-center">
                                            <div class="col-auto">
                                                <h3>Forgot the password?</h3>
                                            </div>
                                        </div>
                                        <form action="<?= base_url('/sendemail') ?>" method="post">
                                            <?= csrf_field() ?>
                                            <div class="mb-3">
                                                <label class="form-label" for="card-wa">Email</label>
                                                <input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid'  : ''; ?>" id="card-email" type="email" name="email" autocomplete="off" placeholder="youremail@email.com" />
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('email'); ?>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <button class="btn btn-success d-block w-100 mt-3" type="submit" onclick="loading()">Send Reset Email</button>
                                            </div>
                                        </form>
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