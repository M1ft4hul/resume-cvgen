<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">ADD DETAILS of STCW, COC & COP</li>
		<form class="was-validated" action="/simpan_sertifikat" method="POST">
			<?= csrf_field(); ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="a" class="form-label mb-0">Certificate Type</label>
						<input type="text" name="tipe_sertifikat" class="form-control" id="a" value="<?= old('tipe_sertifikat') ?>" required>
						<div class="invalid-feedback">
							Certificate Type required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="b" class="form-label mb-0">Certificate No.</label>
						<input type="text" name="no_sertifikat" class="form-control" id="b" value="<?= old('no_sertifikat') ?>" required>
						<div class="invalid-feedback">
							Certificate No. required
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="c" class="form-label mb-0">Date of Issued</label>
						<input type="date" name="ser_dibuat" class="form-control" id="c" value="<?= old('ser_dibuat') ?>" required>
						<div class="invalid-feedback">
							Date of Issued required
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="d" class="form-label mb-0">Date of Expire</label>
						<input type="date" name="ser_berakhir" class="form-control" id="d" value="<?= old('ser_berakhir') ?>" required>
						<div class="invalid-feedback">
							Date of Expire required
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="e" class="form-label mb-0">Place/Country</label>
						<input type="text" name="ser_negara" class="form-control" id="e" value="<?= old('ser_negara') ?>" required>
						<div class="invalid-feedback">
							Place/Country required
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="f" class="form-label mb-0">Status</label>
						<select class="form-select" id="f" name="ser_status" aria-label="Default select example" required>
							<option value="" selected disabled>Select Status</option>
							<option value="Lifetime" <?= old('ser_status') == 'Lifetime' ? 'selected' : '' ?>>Lifetime</option>
							<option value="Still Valid" <?= old('ser_status') == 'Still Valid' ? 'selected' : '' ?>>Still Valid</option>
						</select>
						<div class="invalid-feedback">
							Status required
						</div>
					</div>
				</div>
			</li>
			<li class="list-group-item">
				<div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
					<a href="/profil" class="btn btn-outline-danger p-2">Profil</a>
					<button class="btn btn-danger p-2" type="submit">Save</button>
				</div>

			</li>
		</form>
	</ul>
	<?php if ($sertifikat) { ?>
		<ul class="list-group mt-4">
			<li class="list-group-item active" aria-current="true">MY DETAILS of STCW, COC & COP</li>
			<li class="list-group-item">
				<div class="table-responsive mt-2">
					<table class="table table-bordered table-responsive text-nowrap" style="width: 100%;">
						<thead class="judultabel">
							<tr>
								<th>Certificate Type</th>
								<th>Certificate No.</th>
								<th>Date of Issue</th>
								<th>Date of Expire</th>
								<th>Place/Country</th>
								<th>Status</th>
								<th class="d-flex justify-content-end">Action</th>
							</tr>
						</thead>
						<tbody class="isitabel">
							<?php foreach ($sertifikat as $p) { ?>
								<tr>
									<td class="align-middle"><?= $p->tipe_sertifikat ?></td>
									<td class="align-middle"><?= $p->no_sertifikat ?></td>
									<td class="align-middle"><?= $p->ser_dibuat ?></td>
									<td class="align-middle"><?= $p->ser_berakhir ?></td>
									<td class="align-middle"><?= $p->ser_negara ?></td>
									<td class="align-middle"><?= $p->ser_status ?></td>
									<td class="d-flex justify-content-end">
										<a href="/edit_sertifikat/<?= $p->id ?>" target="_self" rel="noopener noreferrer" class="btn m-1" onclick="loading()"><i class="bi bi-pencil-square" style="font-size: 1rem; color: orange;"></i></a>
										<form action="/hapus_sertifikat/<?= $p->id ?>" method="post">
											<?= csrf_field(); ?>
											<input type="hidden" name="_method" value="DELETE">
											<button type="submit" class="btn  m-1" onclick="loading()"><i class="bi bi-x-lg" style="font-size: 1rem; color: red;"></i></button>
										</form>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</li>
		</ul>
	<?php } ?>
</div>

<!-- MODAL -->

</div>
</div>
</div>

<?= $this->endSection(); ?>