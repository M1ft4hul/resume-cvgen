<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CV GENERATE</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="/css/pdf.css">
</head>

<body>

	<div class="container-fluid">
		<div class="book">
			<div class="A4">

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
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="/js/pdf.js"></script>

</body>

</html>