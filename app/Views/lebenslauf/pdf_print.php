<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV GENERATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:400,500");
        @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,700");

        body {
            font-family: "Poppins", sans-serif;
            font-size: 13px;
            background: rgb(204, 204, 204);
        }

        .margin {
            margin: 3cm 2cm 3cm 2cm;
            padding-top: 0;
        }

        .book {
            margin: 0;
            padding: 0;
            transform-origin: 0 0;
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .page {
            display: block;
            width: 21cm;
            height: 29.7cm;
            margin: 1cm auto;
            background: white;
            /* box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); */
        }

        .subpage {
            margin: 1cm;
            width: 21cm;
            height: 29.7cm;
        }




        .table> :not(caption)>*>* {
            padding: 0rem 0.5em;
        }

        .isitabel {
            font-size: 11px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #cfcfcf;
        }

        thead {
            font-size: 11px;
        }

        .tanpa-tabel {
            border-color: #dee2e603;
        }
    </style>
</head>

<body>

    <div class="container-fluid" id="contentToPrint">

        <h3 class="text-center mb-5" style="text-align: center;">LEBENSLAUF</h3>

        <div class="col-lg-9 mb-5">

            <div class="d-flex bd-highlight latar mb-2">
                <div class="me-auto pt-3 bd-highlight subjudul"><strong>PERSONLICHE DATEN</strong></div>

            </div>
            <div class="row ">
                <div class="col-2">
                    <?php $img = file_get_contents(
                        'photos/' . $biodata->photo
                    );
                    $data = base64_encode($img);
                    ?>
                    <img src="data:image/png;base64,<?= $data ?>" alt="" class="img-fluid" width="95%">
                </div>
                <div class="col-10">
                    <table class="table table-borderless tanpa-tabel" style="width: 100%">
                        <tbody class="isitabel">
                            <tr class="baris">

                                <td style="width: 200px;">Name</td>
                                <td style="width: 5px;">:</td>
                                <td><strong><?= $biodata->nama ?></strong></td>

                            </tr>
                            <tr class="baris">

                                <td>Geburtsort und Geburtsdatum</td>
                                <td>:</td>
                                <td><?= $biodata->tgl_lahir . ' in ' . $biodata->tempat_lahir ?></td>

                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td><?= nl2br(htmlspecialchars($biodata->alamat)) ?></td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td>:</td>
                                <td><?= $biodata->telepon ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td><?= $biodata->email ?></td>
                            </tr>
                            <tr>
                                <td>Familienstand</td>
                                <td>:</td>
                                <td><?= $biodata->menikah ?></td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>

            <div class="d-flex bd-highlight latar mb-0 mt-2">
                <div class="me-auto pt-3 bd-highlight subjudul"><strong>BERUFSERFAHRUNG</strong></div>


            </div>
            <div class="row">
                <?php foreach ($pengalaman as $x) : ?>
                    <div class="d-flex bd-highlight">
                        <div class="p-1 bd-highlight"><?= $x->tahun_masuk . ' - ' . $x->tahun_lulus; ?></div>
                        <div class="p-1 flex-grow-1 bd-highlight">
                            <strong><?= $x->posisi . '</strong> at ' . $x->perusahaan; ?>

                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

            <div class="d-flex bd-highlight latar mb-0 mt-2">
                <div class="me-auto pt-3 bd-highlight subjudul"><strong>STUDIUM</strong></div>

            </div>
            <div class="row">
                <?php foreach ($pendidikan as $x) : ?>
                    <div class="d-flex bd-highlight">
                        <div class="p-1 bd-highlight"><?= $x->tahun_masuk . ' - ' . $x->tahun_lulus  ?></div>
                        <div class="p-1 flex-grow-1 bd-highlight"><?= $x->nama_sekolah  ?></div>

                    </div>
                <?php endforeach; ?>
            </div>

            <div class="d-flex bd-highlight latar mb-0 mt-2">
                <div class="me-auto pt-3 bd-highlight subjudul">
                    <strong>SPRACHKENNTNISSE</strong>
                </div>
            </div>
            <div class="row">
                <?php foreach ($bahasa as $x) : ?>
                    <div class="d-flex bd-highlight">
                        <div class="p-1 flex-grow-1 bd-highlight">
                            <?= $x->bahasa . ' (' . $x->level . ') '; ?>

                        </div>

                    </div>
                <?php endforeach; ?>

            </div>

            <div class="d-flex bd-highlight latar mb-0 mt-2">
                <div class="me-auto pt-3 bd-highlight subjudul">
                    <strong>SONSTIGE QUALIFIKATIONEN</strong>
                </div>
            </div>
            <div class="row">
                <div class="d-flex bd-highlight">
                    <div class="p-1 d-flex flex-grow-1 bd-highlight">
                        <?= nl2br(htmlspecialchars($keahlian->keahlian)); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function download() {

            const element = document.getElementById("contentToPrint");
            var opt = {
                margin: [2, 2, 2, 2],
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 1,
                    // bottom: 20,
                    dpi: 192,
                    letterRendering: true
                },
                pagebreak: {
                    mode: ['avoid-all']
                },
                jsPDF: {
                    unit: 'cm',
                    format: 'a4',
                    orientation: 'portrait'
                }
            };

            html2pdf()
                .set(opt)
                .from(element)
                .save('Curriculum_Vitae.pdf', 'returnPromise')

        }
    </script>
</body>

</html>