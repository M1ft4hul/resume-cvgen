<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>CV-GEN</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/typewriter.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/typewriter.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/typewriter.png">
    <link rel="shortcut icon" type="image/x-icon" href="../img/typewriter.png">
    <meta name="msapplication-TileImage" content="../img/typewriter.png">
    <meta name="theme-color" content="#ffffff">
    <script src="<?= base_url() ?>/js/config.js"></script>
    <script src="<?= base_url() ?>/js/OverlayScrollbars.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <!-- <link href="/css/leaflet.css" rel="stylesheet">
    <link href="/css/MarkerCluster.css" rel="stylesheet">
    <link href="/css/MarkerCluster.Default.css" rel="stylesheet"> -->
    <link href="<?= base_url() ?>/css/main.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/css/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="<?= base_url() ?>/css/OverlayScrollbars.min.css" rel="stylesheet">
    <!-- <link href="/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl"> -->
    <link href="<?= base_url() ?>/css/theme.min.css" rel="stylesheet" id="style-default">
    <!-- <link href="/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl"> -->
    <link href="<?= base_url() ?>/css/user.min.css" rel="stylesheet" id="user-style-default">

    <link href="<?= base_url() ?>/css/dataTables.bootstrap5.min.css" rel="stylesheet" id="user-style-default">
    <link href="<?= base_url() ?>/css/fixedHeader.bootstrap.min.css" rel="stylesheet" id="user-style-default">
    <link href="<?= base_url() ?>/css/responsive.bootstrap.min.css" rel="stylesheet" id="user-style-default">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <style>
        a {
            color: white;
            text-decoration: none;
        }
    </style>
    <!-- <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script> -->
</head>

<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>
            <nav class="navbar navbar-light navbar-vertical navbar-expand-xl navbar-card" style="display: none;">
                <script>
                    var navbarStyle = localStorage.getItem("navbarStyle");
                    if (navbarStyle && navbarStyle !== 'transparent') {
                        document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
                    }
                </script>
                <div class="d-flex align-items-center">
                    <div class="toggle-icon-wrapper">
                        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    </div>
                    <a class="navbar-brand" href="<?= base_url('/clients') ?> ">
                        <div class="d-flex align-items-center py-3">
                            <img class="me-2" src="/img/typewriter.png" alt="" width="45" />
                            <span class="font-sans-serif fs-2">CV-GEN</span>
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                    <div class="navbar-vertical-content scrollbar">
                        <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                            <li class="nav-item">
                                <a class="nav-link" href="/clients" role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span class="fas fa-home"></span>
                                        </span>
                                        <span class="nav-link-text ps-1">Home</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                    <div class="col-auto navbar-vertical-label">Documents</div>
                                    <div class="col ps-0">
                                        <hr class="mb-0 navbar-vertical-divider" />
                                    </div>
                                </div>
                                <a class="nav-link" href="/cvs" role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span class="fas fa-file-pdf"></span>
                                        </span>
                                        <span class="nav-link-text ps-1">CV Deck Engine</span>
                                    </div>
                                </a>
                                <a class="nav-link" href="/cvshb" role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span class="fas fa-file-pdf"></span>
                                        </span>
                                        <span class="nav-link-text ps-1">CV Cruise Ship & Hotel</span>
                                    </div>
                                </a>
                                <a class="nav-link" href="/cvw" role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span class="fas fa-file-pdf"></span>
                                        </span>
                                        <span class="nav-link-text ps-1">CV Working in Germany</span>
                                    </div>
                                </a>
                                <a class="nav-link" href="/cvh" role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span class="fas fa-file-pdf"></span>
                                        </span>
                                        <span class="nav-link-text ps-1">CV For Public</span>
                                    </div>
                                </a>

                                <a class="nav-link" href="/cgform" role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-icon">
                                            <span class="fas fa-file-pdf"></span>
                                        </span>
                                        <span class="nav-link-text ps-1">Buat Google Form</span>
                                    </div>
                                </a>

                            </li>
                            <li class="nav-item">
                                <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
                                    <div class="col-auto navbar-vertical-label">Pengaturan</div>
                                    <div class="col ps-0">
                                        <hr class="mb-0 navbar-vertical-divider" />
                                    </div>
                                </div>
                                <a class="nav-link" href="#" role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user-cog"></span></span><span class="nav-link-text ps-1">Profile</span></div>
                                </a>
                                <a class="nav-link" href="/logout" role="button" data-bs-toggle="" aria-expanded="false">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-sign-out-alt"></span></span><span class="nav-link-text ps-1">Logout</span></div>
                                </a>

                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggle-icon">
                        <span class="toggle-line"></span>
                    </span>
                </button>

            </nav>
            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="/clients">
                        <div class="d-flex align-items-center"><img class="me-2" src="/img/typewriter.png" alt="" width="40" /><span class="font-sans-serif">CV-GEN</span></div>
                    </a>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait px-2"><input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" /><label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
                        </li>

                    </ul>
                </nav>
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;" data-move-target="#navbarVerticalNav" data-navbar-top="combo">
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggle-icon">
                            <span class="toggle-line"></span>
                        </span>
                    </button>

                </nav>
                <script>
                    var navbarPosition = localStorage.getItem('navbarPosition');
                    var navbarVertical = document.querySelector('.navbar-vertical');
                    var navbarTopVertical = document.querySelector('.content .navbar-top');
                    var navbarTop = document.querySelector('[data-layout] .navbar-top');
                    var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
                    if (navbarPosition === 'top') {
                        navbarTop.removeAttribute('style');
                        navbarTopVertical.remove(navbarTopVertical);
                        navbarVertical.remove(navbarVertical);
                        navbarTopCombo.remove(navbarTopCombo);
                    } else if (navbarPosition === 'combo') {
                        navbarVertical.removeAttribute('style');
                        navbarTopCombo.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarTopVertical.remove(navbarTopVertical);
                    } else {
                        navbarVertical.removeAttribute('style');
                        navbarTopVertical.removeAttribute('style');
                        navbarTop.remove(navbarTop);
                        navbarTopCombo.remove(navbarTopCombo);
                    }
                </script>


                <?= $this->renderSection('content'); ?>

                <footer class="footer">
                    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">www.cv-gen.com <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2022 &copy;</p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v1.0.0</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?= base_url() ?>/js/jquery-3.5.1.js"></script>
    <script src="<?= base_url() ?>/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/js/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url() ?>/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?= base_url() ?>/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/js/responsive.bootstrap.min.js"></script>

    <script src="<?= base_url() ?>/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/js/anchor.min.js"></script>
    <script src="<?= base_url() ?>/js/main.min.js"></script>
    <script src="<?= base_url() ?>/js/dayjs.min.js"></script>
    <script src="<?= base_url() ?>/js/all.min.js"></script>
    <script src="<?= base_url() ?>/js/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="<?= base_url() ?>/js/theme.js"></script>

    <script>
        $(document).ready(function() {


            var table = $('#example').DataTable({
                responsive: true,

            });

            new $.fn.dataTable.FixedHeader(table);

            var tableoff = $('#exampleoff').DataTable({
                responsive: true,

            });

            new $.fn.dataTable.FixedHeader(tableoff);
        });

        function onkan(id) {
            $(".onID").val(id);
            $("#modal_on").modal('show');
        }

        function offkan(id) {
            $(".offID").val(id);
            $("#modal_off").modal('show');
        }

        function hapus(id) {
            $(".hapusID").val(id);
            $("#modal_hapus").modal('show');
        }
    </script>

</body>

</html>