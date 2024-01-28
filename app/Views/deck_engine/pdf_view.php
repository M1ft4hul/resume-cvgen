<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>CV GENERATE</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="/css/pdf.css">
</head>

<body>

	<div class="container-fluid">
		<!-- <div class="A4"> -->
		<div class="book">
			<!-- <div class="page"> -->
			<div class="A4">
				<!-- <div class="margin"> -->
				<h3 class="text-center mb-5" style="text-align: center;">CURRICULUM VITAE SEAFARER</h3>
				<p class="subjudul"><strong>PERSONAL DATA</strong></p>
				<div class="row">
					<div class="col-2">
						<?php $img = file_get_contents(
							'photos/' . $biodata->photo
						);
						$data = base64_encode($img);
						?>
						<img src="data:image/jpg;base64,<?= $data ?>" alt="" width="100px" height="130px">
					</div>
					<div class="col-10">
						<table class="table table-borderless tanpa-tabel">
							<tbody class="isitabel">
								<tr>
									<td style="width: 150px;">Full Name</td>
									<td>: <?= $biodata->nama; ?></td>
								</tr>
								<tr>
									<td>Place of Bith</td>
									<td>: <?= $biodata->tempat_lahir; ?></td>
								</tr>
								<tr>
									<td>Date of Birth</td>
									<td>: <?= $biodata->tgl_lahir; ?></td>
								</tr>
								<tr>
									<td>Permanen Address</td>
									<td>: <?= $biodata->alamat; ?></td>
								</tr>
								<tr>
									<td>Phone No.</td>
									<td>: <?= $biodata->telepon; ?></td>
								</tr>
								<tr>
									<td>Email</td>
									<td>: <?= $biodata->email; ?></td>
								</tr>
								<tr>
									<td>Marital Status</td>
									<td>: <?= $biodata->menikah; ?></td>
								</tr>
								<tr>
									<td>Taxt ID</td>
									<td>: <?= $biodata->npwp; ?></td>
								</tr>
								<tr>
									<td>Nearest Airport</td>
									<td>: <?= $biodata->bandara; ?></td>
								</tr>
								<tr>
									<td>Height/Weight</td>
									<td>: <?= $biodata->tinggi . ' cm/' . $biodata->berat . ' kg'; ?></td>
								</tr>
								<tr>
									<td>Overall and Shoe Size</td>
									<td>: <?= $biodata->ukuran_pakaian . '/' . $biodata->ukuran_sepatu; ?></td>
								</tr>
								<tr>
									<td>English Ability</td>
									<td>: <?= $bahasa->bahasa ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<br>
				<p class="subjudul"><strong>EDUCATION AND DOCUMENT</strong></p>
				<div>1. DOCUMENT TRAVEL</div>
				<table class="table table-bordered">
					<thead class="judultabel">
						<tr>
							<th class="align-middle">Doc. Name</th>
							<th class="align-middle">Doc. Number</th>
							<th class="align-middle">Date of Issue</th>
							<th class="align-middle">Date of Expire</th>
							<th class="align-middle">Place of Issue</th>
						</tr>
						</tbody>
					<tbody class="isitabel">
						<?php foreach ($doc_travel as $x) { ?>
							<tr>
								<td class="align-middle"><?= $x->nama_dokumen ?></td>
								<td class="align-middle"><?= $x->nomor_dokumen ?></td>
								<td class="align-middle"><?= $x->tgl_terbit_dok ?></td>
								<td class="align-middle"><?= $x->tgl_berakhir_dok ?></td>
								<td class="align-middle"><?= $x->dok_dikeluarkan_oleh ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<div>2. EDUCATION</div>
				<table class="table table-bordered">
					<thead class="judultabel">
						<tr>
							<th class="align-middle">Name of School/Institution</th>
							<th class="align-middle">Grade</th>
							<th class="align-middle">From (Year)</th>
							<th class="align-middle">To (Year)</th>
						</tr>
					</thead>
					<tbody class="isitabel">
						<?php foreach ($pendidikan as $x) { ?>
							<tr>
								<td class="align-middle"><?= $x->nama_sekolah ?></td>
								<td class="align-middle"><?= $x->jenjang ?></td>
								<td class="align-middle"><?= $x->tahun_masuk ?></td>
								<td class="align-middle"><?= $x->tahun_lulus ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<div>3. DETAILS of STCW, COC & COP</div>
				<table class="table table-bordered">
					<thead class="judultabel">
						<tr>
							<th class="align-middle">Certificate Type</th>
							<th class="align-middle">Certificate No.</th>
							<th class="align-middle">Date of Issue</th>
							<th class="align-middle">Date of Expire</th>
							<th class="align-middle">Place/Country</th>
							<th class="align-middle">Status</th>
						</tr>
					</thead>
					<tbody class="isitabel">
						<?php foreach ($sertifikat as $x) { ?>
							<tr>
								<td class="align-middle"><?= $x->tipe_sertifikat ?></td>
								<td class="align-middle"><?= $x->no_sertifikat ?></td>
								<td class="align-middle"><?= $x->ser_dibuat ?></td>
								<td class="align-middle"><?= $x->ser_berakhir ?></td>
								<td class="align-middle"><?= $x->ser_negara ?></td>
								<td class="align-middle"><?= $x->ser_status ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<p class="subjudul"><strong>SEA SERVICES RECORD</strong></p>
				<table class="table table-bordered">
					<thead class="judultabel">
						<tr>
							<th rowspan="2" class="align-middle">Company Name</th>
							<th rowspan="2" class="align-middle">Vessel Name</th>
							<th rowspan="2" class="align-middle">Rank</th>
							<th rowspan="2" class="align-middle">Vessel Type</th>
							<th rowspan="2" class="align-middle">Status</th>
							<th colspan="2">Vessel Spec</th>
							<th colspan="2">Periode of Service</th>
						</tr>
						<tr>
							<th>GT</th>
							<th>KW/BHP</th>
							<th>SIGN IN</th>
							<th>SIGN OUT</th>
						</tr>
					</thead>
					<tbody class="isitabel">
						<?php foreach ($searecord as $x) { ?>
							<tr>
								<td class="align-middle"><?= $x->nama_perusahaan ?></td>
								<td class="align-middle"><?= $x->nama_kapal ?></td>
								<td class="align-middle"><?= $x->rank_kapal ?></td>
								<td class="align-middle"><?= $x->tipe_kapal ?></td>
								<td class="align-middle"><?= $x->status_kapal ?></td>
								<td class="align-middle"><?= $x->gt_kapal ?></td>
								<td class="align-middle"><?= $x->kw_kapal ?></td>
								<td class="align-middle"><?= $x->kapal_masuk ?></td>
								<td class="align-middle"><?= $x->kapal_keluar ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<div class="d-flex bd-highlight latar mb-0 mt-2">
					<div class="me-auto pt-3 bd-highlight subjudul">
						<strong>OTHER QUALIFICATIONS</strong>
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