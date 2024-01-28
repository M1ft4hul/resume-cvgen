<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">ADD DETAILS of STCW, COC & COP</li>
		<form class="was-validated" action="/simpanedit_sertifikat/<?= $sertifikat->id ?>" method="POST">
			<?= csrf_field(); ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="a" class="form-label mb-0">Certificate Type</label>
						<input type="text" name="tipe_sertifikat" class="form-control" id="a" value="<?= old('tipe_sertifikat') ? old('tipe_sertifikat') : $sertifikat->tipe_sertifikat ?>" required>
						<div class="invalid-feedback">
							Certificate Type required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="b" class="form-label mb-0">Certificate No.</label>
						<input type="text" name="no_sertifikat" class="form-control" id="b" value="<?= old('no_sertifikat') ? old('no_sertifikat') : $sertifikat->no_sertifikat ?>" required>
						<div class="invalid-feedback">
							Certificate No. required
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="c" class="form-label mb-0">Date of Issued</label>
						<input type="date" name="ser_dibuat" class="form-control" id="c" value="<?= old('ser_dibuat') ? old('ser_dibuat') : $sertifikat->ser_dibuat ?>" required>
						<div class="invalid-feedback">
							Date of Issued required
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="d" class="form-label mb-0">Date of Expire</label>
						<input type="date" name="ser_berakhir" class="form-control" id="d" value="<?= old('ser_berakhir') ? old('ser_berakhir') : $sertifikat->ser_berakhir ?>" required>
						<div class="invalid-feedback">
							Date of Expire required
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="e" class="form-label mb-0">Place/Country</label>
						<input type="text" name="ser_negara" class="form-control" id="e" value="<?= old('ser_negara') ? old('ser_negara') : $sertifikat->ser_negara ?>" required>
						<div class="invalid-feedback">
							Place/Country required
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="f" class="form-label mb-0">Status</label>
						<select class="form-select" id="f" name="ser_status" aria-label="Default select example" required>
							<?php if ($sertifikat->ser_status != "") { ?>
								<option value="<?= $sertifikat->ser_status ?>" selected><?= $sertifikat->ser_status ?></option>
								<option value="" disabled>-</option>
								<option value="Lifetime" <?= old('ser_status') == 'Lifetime' ? 'selected' : '' ?>>Lifetime</option>
								<option value="Still Valid" <?= old('ser_status') == 'Still Valid' ? 'selected' : '' ?>>Still Valid</option>
							<?php } else { ?>
								<option value="" selected disabled>Select</option>
								<option value="Lifetime" <?= old('ser_status') == 'Lifetime' ? 'selected' : '' ?>>Lifetime</option>
								<option value="Still Valid" <?= old('ser_status') == 'Still Valid' ? 'selected' : '' ?>>Still Valid</option>
							<?php } ?>
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
</div>

<!-- MODAL -->

</div>
</div>
</div>

<?= $this->endSection(); ?>