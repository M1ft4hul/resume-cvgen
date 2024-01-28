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

    <link rel="shortcut icon" href="<?= base_url() ?>/img/typewriter.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>CV GENERATOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

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
                                        <ul class="list-group d-none d-lg-block d-xl-block">
                                            <?php if (session()->get('logged_in') && session()->get('level') == 1) { ?>
                                                <li class="list-group-item active" aria-current="true">MAIN MENU</li>
                                                <li class="list-group-item"><a href="/pilihan">Home</a></li>
                                                <li class="list-group-item"><a href="/deck_engine">CV for Seafarer</a></li>
                                                <li class="list-group-item"><a href="/cruise_ship">CV for Cruise Ship</a></li>
                                                <li class="list-group-item"><a href="/lebenslauf">Lebenslauf</a></li>
                                                <li class="list-group-item"><a href="/genpublic">CV for Public</a></li>
                                                <li class="list-group-item"><a href="/gform">Job Vacancy</a></li>
                                                <li class="list-group-item"><a href="/profil">Profile</a></li>
                                                <li class="list-group-item"><a href="/logout">Logout</a></li>
                                            <?php } else { ?>
                                                <li class="list-group-item active" aria-current="true">MAIN MENU</li>
                                                <li class="list-group-item"><a href="/">Home</a></li>
                                                <li class="list-group-item"><a href="/cv-generator">CV-Generator</a></li>
                                                <li class="list-group-item"><a href="/gform">Job Vacancy</a></li>
                                                <li class="list-group-item"><a href="https://news.cv-gen.com/" target="_blank">CV-Gen News</a></li>
                                                <li class="list-group-item"><a href="/login">Login/Register</a></li>
                                            <?php } ?>
                                        </ul>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group d-none d-lg-block d-xl-block">
                        <ul class="list-group d-none d-lg-block d-xl-block">
                            <?php if (session()->get('logged_in') && session()->get('level') == 1) { ?>
                                <li class="list-group-item active" aria-current="true">MAIN MENU</li>
                                <li class="list-group-item"><a href="/pilihan">Home</a></li>
                                <li class="list-group-item"><a href="/deck_engine">CV for Seafarer</a></li>
                                <li class="list-group-item"><a href="/cruise_ship">CV for Cruise Ship</a></li>
                                <li class="list-group-item"><a href="/lebenslauf">Lebenslauf</a></li>
                                <li class="list-group-item"><a href="/genpublic">CV for Public</a></li>
                                <li class="list-group-item"><a href="/gform">Job Vacancy</a></li>
                                <li class="list-group-item"><a href="/profil">Profile</a></li>
                                <li class="list-group-item"><a href="/logout">Logout</a></li>
                            <?php } else { ?>
                                <li class="list-group-item active" aria-current="true">MAIN MENU</li>
                                <li class="list-group-item"><a href="/">Home</a></li>
                                <li class="list-group-item"><a href="/cv-generator">CV-Generator</a></li>
                                <li class="list-group-item"><a href="/gform">Job Vacancy</a></li>
                                <li class="list-group-item"><a href="https://news.cv-gen.com/" target="_blank">CV-Gen News</a></li>
                                <li class="list-group-item"><a href="/login">Login/Register</a></li>
                            <?php } ?>
                        </ul>
                    </ul>
                    <div class="card shadow-sm mt-3 d-none d-lg-block d-xl-block">
                        <div class="card-body">
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
                <div class="col-lg-9 ">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true"><strong>Terms and Conditions</strong></li>
                        <li class="list-group-item">
                            <h2><strong>Welcome to cv-gen!</strong></h2>

                            <p>These terms and conditions outline the rules and regulations for the use of cv-gen's Website, located at https://cv-gen.com/.</p>

                            <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use cv-gen if you do not agree to take all of the terms and conditions stated on this page.</p>

                            <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

                            <h3><strong>Cookies</strong></h3>

                            <p>We employ the use of cookies. By accessing cv-gen, you agreed to use cookies in agreement with the cv-gen's Privacy Policy. </p>

                            <p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>

                            <h3><strong>License</strong></h3>

                            <p>Unless otherwise stated, cv-gen and/or its licensors own the intellectual property rights for all material on cv-gen. All intellectual property rights are reserved. You may access this from cv-gen for your own personal use subjected to restrictions set in these terms and conditions.</p>

                            <p>You must not:</p>
                            <ul>
                                <li>Republish material from cv-gen</li>
                                <li>Sell, rent or sub-license material from cv-gen</li>
                                <li>Reproduce, duplicate or copy material from cv-gen</li>
                                <li>Redistribute content from cv-gen</li>
                            </ul>

                            <p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the <a href="https://www.termsandconditionsgenerator.com/">Free Terms and Conditions Generator</a>.</p>

                            <p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. cv-gen does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of cv-gen,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, cv-gen shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>

                            <p>cv-gen reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>

                            <p>You warrant and represent that:</p>

                            <ul>
                                <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
                                <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
                                <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
                                <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
                            </ul>

                            <p>You hereby grant cv-gen a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>

                            <h3><strong>Hyperlinking to our Content</strong></h3>

                            <p>The following organizations may link to our Website without prior written approval:</p>

                            <ul>
                                <li>Government agencies;</li>
                                <li>Search engines;</li>
                                <li>News organizations;</li>
                                <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
                                <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                            </ul>

                            <p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>

                            <p>We may consider and approve other link requests from the following types of organizations:</p>

                            <ul>
                                <li>commonly-known consumer and/or business information sources;</li>
                                <li>dot.com community sites;</li>
                                <li>associations or other groups representing charities;</li>
                                <li>online directory distributors;</li>
                                <li>internet portals;</li>
                                <li>accounting, law and consulting firms; and</li>
                                <li>educational institutions and trade associations.</li>
                            </ul>

                            <p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of cv-gen; and (d) the link is in the context of general resource information.</p>

                            <p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>

                            <p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to cv-gen. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>

                            <p>Approved organizations may hyperlink to our Website as follows:</p>

                            <ul>
                                <li>By use of our corporate name; or</li>
                                <li>By use of the uniform resource locator being linked to; or</li>
                                <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
                            </ul>

                            <p>No use of cv-gen's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>

                            <h3><strong>iFrames</strong></h3>

                            <p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>

                            <h3><strong>Content Liability</strong></h3>

                            <p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>

                            <h3><strong>Your Privacy</strong></h3>

                            <p>Please read Privacy Policy</p>

                            <h3><strong>Reservation of Rights</strong></h3>

                            <p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>

                            <h3><strong>Removal of links from our website</strong></h3>

                            <p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>

                            <p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>

                            <h3><strong>Disclaimer</strong></h3>

                            <p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>

                            <ul>
                                <li>limit or exclude our or your liability for death or personal injury;</li>
                                <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                                <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                                <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
                            </ul>

                            <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>

                            <p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
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



</body>

</html>