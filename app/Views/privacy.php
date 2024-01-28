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
                        <li class="list-group-item active" aria-current="true">Privacy Policy</li>
                        <li class="list-group-item">
                            <h1>Privacy Policy for Currculum Vitae Generator</h1>

                            <p>At Currculum Vitae Generator, accessible from https://resume.cv-gen.com/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Currculum Vitae Generator and how we use it.</p>

                            <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

                            <h2>Log Files</h2>

                            <p>Currculum Vitae Generator follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information. Our Privacy Policy was created with the help of the <a href="https://www.privacypolicyonline.com/privacy-policy-generator/">Privacy Policy Generator</a>.</p>

                            <h2>Cookies and Web Beacons</h2>

                            <p>Like any other website, Currculum Vitae Generator uses "cookies". These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>

                            <p>For more general information on cookies, please read <a href="https://www.privacypolicyonline.com/what-are-cookies/">the "Cookies" article from the Privacy Policy Generator</a>.</p>
                            >>>>>>> parent of e1b9ab7 ([brands] Updated credits link)

                            <h2>Google DoubleClick DART Cookie</h2>

                            <p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL – <a href="https://policies.google.com/technologies/ads">https://policies.google.com/technologies/ads</a></p>


                            <h2>Privacy Policies</h2>

                            <P>You may consult this list to find the Privacy Policy for each of the advertising partners of Currculum Vitae Generator.</p>

                            <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Currculum Vitae Generator, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

                            <p>Note that Currculum Vitae Generator has no access to or control over these cookies that are used by third-party advertisers.</p>

                            <h2>Third Party Privacy Policies</h2>

                            <p>Currculum Vitae Generator's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

                            <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites. What Are Cookies?</p>

                            <h2>Children's Information</h2>

                            <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

                            <p>Currculum Vitae Generator does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>

                            <h2>Online Privacy Policy Only</h2>

                            <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Currculum Vitae Generator. This policy is not applicable to any information collected offline or via channels other than this website.</p>

                            <h2>Consent</h2>

                            <p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>
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