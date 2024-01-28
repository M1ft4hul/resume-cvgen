<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CV GENERATOR</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/img/typewriter.png" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/css/styles.css" rel="stylesheet" />
    <!-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        .poto-lowongan {
            max-height: 200px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0px 3px 5px rgb(0 0 0 / 25%);
            margin-bottom: 5px;
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

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">CV-GEN</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?= base_url() ?>/super">
                            <div class="sb-nav-link-icon"><i class="bi bi-speedometer"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="<?= base_url() ?>/cari_lowongan">
                            <div class="sb-nav-link-icon"><i class="bi bi-briefcase-fill"></i></div>
                            Job Vacancy
                        </a>
                        <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Data kandidat
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Deck Engine</a>
                                <a class="nav-link" href="#">Hotel Dept.</a>
                                <a class="nav-link" href="#">Lebenslauf</a>
                                <a class="nav-link" href="#">Public Use</a>
                            </nav>
                        </div> -->
                        <!-- <a class="nav-link" href="/client">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-users-gear"></i></div>
                            Data Client
                        </a> -->
                        <div class="sb-sidenav-menu-heading">Settings</div>
                        <a class="nav-link" href="<?= base_url() ?>/profil_super">
                            <div class="sb-nav-link-icon"><i class="bi bi-person-fill-gear"></i></div>
                            Profil
                        </a>
                        <a class="nav-link" href="<?= base_url() ?>/logout">
                            <div class="sb-nav-link-icon"><i class="bi bi-box-arrow-right"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?= session()->get('nama') ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Profile</h1>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Ubah akun
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url() ?>/simpan_super" method="POST">
                                <?= csrf_field() ?>
                                <div class="mb-2">
                                    <label for="username" class="form-label mb-0">Username</label>
                                    <input type="text" class="form-control" name="username" value="<?= session()->get('username') ?>" id="username" aria-describedby="lowongan" readonly>
                                </div>
                                <div class="mb-2">
                                    <label for="password" class="form-label mb-0">Password Baru</label>
                                    <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid'  : ''; ?>" name="password" id="password" aria-describedby="lowongan">
                                    <span class="mata"><i class="bi bi-eye-fill" id="show_eye"></i></span>
                                    <div class="invalid-feedback card-text-12 text-danger">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary my-2 w-100">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; cv-gen 2022</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/js/scripts.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/js/datatables-simple-demo.js"></script>
    <script>
        function poto_lowongan() {
            var lowongan = document.getElementById('potolowongan');
            lowongan.src = URL.createObjectURL(event.target.files[0]);
        };

        $(function() {
            $("#show_eye").click(function() {
                $(this).toggleClass("bi bi-eye-slash-fill");
                var type = $(this).hasClass("bi-eye-slash-fill") ? "text" : "password";
                $("#password").attr("type", type);
            });
        });
    </script>

    </script>
</body>

</html>