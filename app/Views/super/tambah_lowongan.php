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
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .poto-lowongan {
            max-height: 200px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0px 3px 5px rgb(0 0 0 / 25%);
            margin-bottom: 5px;
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
                    <h1 class="mt-4">Tambah Lowongan</h1>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tambah Lowongan Kerja
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url() ?>/simpan_lowongan" method="POST" enctype="multipart/form-data">
                                <?= csrf_field() ?>
                                <div class="row">
                                    <div class="col-lg-4 mb-4">
                                        <div class="text-center">
                                            <label for="lowongan">
                                                <img src="<?= base_url('lowongan/lowongan.png'); ?>" alt="" class="poto-lowongan" aria-hidden="true" id="potolowongan">

                                                <input type="file" name="lowongan" id="lowongan" style="display:none" class="form-control <?= ($validation->hasError('lowongan')) ? 'is-invalid'  : ''; ?>" accept="image/x-png,image/jpeg,image/webp" onchange="poto_lowongan();" />

                                                <div class="invalid-feedback card-text-12 text-danger">
                                                    <?= $validation->getError('lowongan'); ?>
                                                </div>
                                            </label>
                                            <p class="card-text">Banner Lowongan (400 x 300 px)</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">


                                        <div class="mb-2">
                                            <label for="namalowongan" class="form-label mb-0">Nama Lowongan</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('nama_lowongan')) ? 'is-invalid'  : ''; ?>" name="nama_lowongan" id="namalowongan" aria-describedby="lowongan">
                                            <div class="invalid-feedback card-text-12 text-danger">
                                                <?= $validation->getError('nama_lowongan'); ?>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="perusahaan" class="form-label mb-0">Nama Perusahaan</label>
                                            <input type="text" class="form-control <?= ($validation->hasError('perusahaan')) ? 'is-invalid'  : ''; ?>" name="perusahaan" id="perusahaan" aria-describedby="lowongan">
                                            <div class="invalid-feedback card-text-12 text-danger">
                                                <?= $validation->getError('perusahaan'); ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-2">
                                                    <label for="kuota" class="form-label mb-0">Kuota Lowongan</label>
                                                    <input type="number" class="form-control <?= ($validation->hasError('kuota')) ? 'is-invalid'  : ''; ?>" name="kuota" id="kuota" number-describedby="lowongan">
                                                    <div class="invalid-feedback card-text-12 text-danger">
                                                        <?= $validation->getError('kuota'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-2">
                                                    <label for="dibuka" class="form-label mb-0">Dibuka</label>
                                                    <input type="date" class="form-control <?= ($validation->hasError('dibuka')) ? 'is-invalid'  : ''; ?>" name="dibuka" id="dibuka" number-describedby="lowongan">
                                                    <div class="invalid-feedback card-text-12 text-danger">
                                                        <?= $validation->getError('dibuka'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-2">
                                                    <label for="ditutup" class="form-label mb-0">Ditutup</label>
                                                    <input type="date" class="form-control <?= ($validation->hasError('ditutup')) ? 'is-invalid'  : ''; ?>" name="ditutup" id="ditutup" number-describedby="lowongan">
                                                    <div class="invalid-feedback card-text-12 text-danger">
                                                        <?= $validation->getError('ditutup'); ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-2">
                                                    <label for="negara" class="form-label mb-0">Negara Penerima </label>
                                                    <select class="form-select <?= ($validation->hasError('negara')) ? 'is-invalid'  : ''; ?>" name="negara" aria-label="select example" id="negara">
                                                        <option value="" disabled selected>Select</option>
                                                        <?php foreach ($negara as $n) { ?>
                                                            <option value="<?= $n['nama'] ?>" <?= old('negara') == '' . $n['nama'] . '' ? 'selected' : '' ?>><?= $n['nama'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <div class="invalid-feedback card-text-12 text-danger">
                                                        <?= $validation->getError('negara'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-2">
                                                    <label for="waadmin" class="form-label mb-0">WA Admin</label>
                                                    <input type="number" class="form-control <?= ($validation->hasError('waadmin')) ? 'is-invalid'  : ''; ?>" name="waadmin" id="waadmin" number-describedby="lowongan">
                                                    <div class="invalid-feedback card-text-12 text-danger">
                                                        <?= $validation->getError('waadmin'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="waadmin" class="form-label mb-0">Deskripsi Lowongan</label>
                                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid'  : ''; ?>"></textarea>
                                            <div class="invalid-feedback card-text-12 text-danger">
                                                <?= $validation->getError('deskripsi'); ?>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary my-2 w-100">Submit</button>

                                    </div>
                                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/js/datatables-simple-demo.js"></script>
    <script>
        function poto_lowongan() {
            var lowongan = document.getElementById('potolowongan');
            lowongan.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
</body>

</html>