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
    <script src="/js/config.js"></script>
    <script src="/js/OverlayScrollbars.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="/css/flatpickr.min.css" rel="stylesheet">
    <link href="/css/dropzone.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="/css/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
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
    </script>
    <!-- <script type='text/javascript'>
        $(window).load(function() {
            $("#bootstrap-wizard-type").change(function() {
                console.log($("#bootstrap-wizard-type option:selected").val());
                if ($("#bootstrap-wizard-type option:selected").val() == 'Others') {
                    $('#other_type').prop('hidden', false);
                } else {
                    $('#other_type').prop('hidden', true);
                }
            });
        });
    </script> -->
</head>

<body>
    <div class="swal" data-swal="<?= session()->get('pesan'); ?>"></div>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>
            <div class="row justify-content-center pt-6">
                <div class="col-sm-10 col-lg-7 col-xxl-5">
                    <div class="card theme-wizard mb-5" id="wizard">

                        <div class="card-header bg-circle-shape bg-shape text-center p-2">
                            <div class="font-sans-serif z-index-1 position-relative">
                                <span class="fw-bolder fs-4  link-light light">RESEND ACTIVATION CODE</span>
                                <p class="fs-1 link-light">Resend activation code to your email.</p>
                            </div>
                        </div>
                        <div class="card-body py-4" id="wizard-controller">
                            <form action="/sendactivationcode" method="POST">
                                <?= csrf_field() ?>
                                <div class="mb-3">
                                    <label class="form-label" for="bootstrap-wizard-wizard-email">Your Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="Email address" pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" required="required" id="bootstrap-wizard-wizard-email" data-wizard-validate-email="true" value="<?= old('email') ?>" />
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>

                                <button class="btn btn-primary px-5 my-3 w-100" type="submit">SEND ACTIVATION CODE</button>
                                <span class="mb-0 undefined">New Client?</span><span><a href="/daftarc"> Create Account</a>
                                </span> or <a href="/loginc">Sign In</a>

                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/anchor.min.js"></script>
    <script src="/js/is.min.js"></script>
    <script src="/js/flatpickr.js"></script>
    <script src="/js/dropzone.min.js"></script>
    <!-- <script src="/js/lottie.min.js"></script> -->
    <script src="/js/validator.min.js"></script>
    <script src="/js/all.min.js"></script>
    <script src="/js/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/js/list.min.js"></script>
    <script src="/js/theme.js"></script>

    <script>
        const swal = $('.swal').data('swal');
        if (swal) {
            Swal.fire({
                html: swal,
            })
        }
    </script>
</body>

</html>