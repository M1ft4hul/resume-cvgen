<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CV GENERATE</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="/css/pdf.css">
	<style>
		.latar {
			background-color: #fb4c4c;
		}
	</style>
</head>

<body>

	<div class="container-fluid">
		<div class="book">
			<div class="A4">

				<h3 class="text-center mb-5" style="text-align: center;">CURRICULUM VITAE</h3>

				<div class="col-lg-9 mb-5">

					<div class="d-flex bd-highlight latar mb-2">
						<div class="me-auto d-flex align-items-center bd-highlight subjudul"><strong>PERSONAL DATA</strong></div>

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
						<div class="col">
							<table class="table table-borderless tanpa-tabel" style="width: 100%">
								<tbody class="isitabel">
									<tr>

										<td colspan="3">
											<h5><strong><?= $biodata->nama  ?></strong></h5>
										</td>


									</tr>
									<tr class="baris">

										<td style="width: 200px;">Place & Date of Birth</td>
										<td style="width: 5px;">:</td>
										<td><?= $biodata->tgl_lahir . ' in ' . $biodata->tempat_lahir ?></td>

									</tr>
									<tr>
										<td>Gender</td>
										<td>:</td>
										<td><?= $biodata->jk ?></td>
									</tr>
									<tr>
										<td>Height</td>
										<td>:</td>
										<td><?= $biodata->tinggi . ' <small>Cm.</small>' ?></td>
									</tr>
									<tr>
										<td>Weight</td>
										<td>:</td>
										<td><?= $biodata->berat . ' <small>Kg.</small>' ?></td>
									</tr>
									<tr>
										<td>Nationality</td>
										<td>:</td>
										<td><?= $biodata->negara ?></td>
									</tr>
									<tr>
										<td>Address</td>
										<td>:</td>
										<td><?= nl2br(htmlspecialchars($biodata->alamat)) ?></td>
									</tr>
									<tr>
										<td>Phone</td>
										<td>:</td>
										<td><?= $biodata->telepon ?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td>:</td>
										<td><?= $biodata->email ?></td>
									</tr>

								</tbody>
							</table>

						</div>
					</div>

					<div class="d-flex bd-highlight latar mb-2 mt-3">
						<div class="me-auto d-flex align-items-center bd-highlight subjudul"><strong>WORKING EXPERIENCES</strong></div>

					</div>
					<div class="row">
						<?php foreach ($pengalaman as $x) : ?>
							<div class="d-flex bd-highlight">
								<div class="p-1 bd-highlight"><?= $x->tahun_masuk . ' - ' . $x->tahun_lulus  ?></div>
								<div class="p-1 flex-grow-1 bd-highlight">
									<strong><?= $x->posisi . '</strong> at ' . $x->perusahaan  ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>


					<div class="d-flex bd-highlight latar mb-2 mt-3">
						<div class="me-auto d-flex align-items-center bd-highlight subjudul"><strong>EDUCATION</strong></div>

					</div>
					<div class="row">
						<?php foreach ($pendidikan as $x) : ?>
							<div class="d-flex bd-highlight">
								<div class="p-1 bd-highlight"><?= $x->tahun_masuk . ' - ' . $x->tahun_lulus  ?></div>
								<div class="p-1 flex-grow-1 bd-highlight"><?= $x->nama_sekolah  ?></div>

							</div>
						<?php endforeach; ?>
					</div>


					<div class="d-flex bd-highlight latar mb-2 mt-3">
						<div class="me-auto d-flex align-items-center bd-highlight subjudul"><strong>Other Qualifications & Skills</strong></div>
					</div>
					<div class="row">
						<?php foreach ($keahlian as $x) : ?>
							<div class="d-flex bd-highlight">
								<div class="p-1 d-flex flex-grow-1 bd-highlight">
									<?= nl2br(htmlspecialchars($x->keahlian)); ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>

				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="/js/pdf.js"></script>
</body>

</html>