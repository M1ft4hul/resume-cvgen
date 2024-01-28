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

    <title>CV GENERATOR</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>/img/typewriter.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>/img/typewriter.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>/img/typewriter.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>/img/typewriter.png">
    <link rel="manifest" href="<?= base_url() ?>/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="<?= base_url() ?>/img/typewriter.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>/css/theme.min.css" rel="stylesheet" id="style-default">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
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
                                        <p class="text-white">Already have an account?<br><a role="button" tabindex="0" href="/login" class="mt-2 px-4 btn btn-outline-light">Sign In</a></p>
                                        <p class="mb-0 mt-4 mt-md-5 fs--1 fw-semi-bold text-white opacity-75">Read the <a class="text-decoration-underline text-white" href="terms"> Terms and Conditions </a></p>
                                    </div>
                                </div>
                                <div class="col-md-7 d-flex flex-center">
                                    <div class="p-4 p-md-4 flex-grow-1">
                                        <div class="row flex-between-center">
                                            <div class="col-auto">
                                                <h3>Sign Up</h3>
                                            </div>
                                        </div>
                                        <form method="POST" action="/simpan_daftar">
                                            <?= csrf_field(); ?>

                                            <div class="mb-2">
                                                <label class="form-label" for="card-nama">Full Name</label>
                                                <input class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid'  : ''; ?>" id="card-nama" type="text" name="nama" value="<?= old('nama'); ?>" autocomplete="off" />
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('nama'); ?>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="card-email">Email</label>
                                                <input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid'  : ''; ?>" id="card-email" type="email" name="email" value="<?= old('email'); ?>" autocomplete="off" />
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('email'); ?>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="card-wa">Username</label>
                                                <input class="form-control <?= ($validation->hasError('username')) ? 'is-invalid'  : ''; ?>" id="card-username" type="text" name="username" value="<?= old('username'); ?>" autocomplete="off" />
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('username'); ?>
                                                </div>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label" for="password">Password</label>
                                                <input class="form-control <?= ($validation->hasError('password')) ? 'is-invalid'  : ''; ?>" id="password" type="password" name="password" value="<?= old('password'); ?>" />
                                                <span class="mata"><i class="bi bi-eye-fill" id="show_eye"></i></span>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('password'); ?>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="upassword">Confirm Password</label>
                                                <input class="form-control <?= ($validation->hasError('upassword')) ? 'is-invalid'  : ''; ?>" id="upassword" type="password" name="upassword" value="<?= old('upassword'); ?>" />
                                                <span class="mata"><i class="bi bi-eye-fill" id="show_eyex"></i></span>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('upassword'); ?>
                                                </div>
                                            </div>
                                            <div class="form-check ">
                                                <input type="checkbox" id="invalidCheck3" class="form-check-input <?= ($validation->hasError('setuju')) ? 'is-invalid' : ''; ?> " name="setuju" value="1" <?= old('setuju') == '1' ? 'checked' : '' ?>>
                                                <label class="form-check-label " for="invalidCheck3">
                                                    <span class="text-muted">I agree all statements in </span> <a href="<?= base_url('/terms'); ?>" class="text-primary fs--1">Terms</a> & </span> <a href="<?= base_url('/privacy'); ?>" class="text-primary fs--1">Privacy</a>
                                                </label>
                                                <div id="invalidCheck3Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('setuju'); ?>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-success d-block w-100 mt-3" type="submit">Signup</button>
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
    <script>
        // <i class="bi bi-eye-slash-fill"></i>
        $(function() {
            $("#show_eye").click(function() {
                $(this).toggleClass("bi bi-eye-slash-fill");
                var type = $(this).hasClass("bi-eye-slash-fill") ? "text" : "password";
                $("#password").attr("type", type);
            });
            $("#show_eyex").click(function() {
                $(this).toggleClass("bi bi-eye-slash-fill");
                var type = $(this).hasClass("bi-eye-slash-fill") ? "text" : "password";
                $("#upassword").attr("type", type);
            });
        });
    </script>
</body>

</html>