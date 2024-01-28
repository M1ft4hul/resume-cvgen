<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">UPDATE EDUCATION</li>
		<form class="was-validated" action="/simpanedit_pendidikan/<?= $pendidikan->id ?>" method="POST">
			<?= csrf_field(); ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="namasekolah" class="form-label mb-0">Name of School/Institution</label>
						<input type="text" class="form-control" name="nama_sekolah" id="namasekolah" value="<?= old('nama_sekolah') ? old('nama_sekolah') : $pendidikan->nama_sekolah ?>" required>
						<div class="invalid-feedback">
							Name of school required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="grade" class="form-label mb-0">Grade</label>
						<select class="form-select" id="grade" name="grade" aria-label="Default select example" required>
							<?php if ($pendidikan->jenjang != "") { ?>
								<option value="<?= $pendidikan->jenjang ?>" selected><?= $pendidikan->jenjang ?></option>
								<option value="" disabled>-</option>
								<option value="Elementary School" <?= old('jenjang') == 'Elementary School' ? 'selected' : '' ?>>Elementary School</option>
								<option value="Junior High school" <?= old('jenjang') == 'Junior High school' ? 'selected' : '' ?>>Junior High school</option>
								<option value="Senior High School" <?= old('jenjang') == 'Senior High School' ? 'selected' : '' ?>>Senior High School</option>
								<option value="Vocational High School" <?= old('jenjang') == 'Vocational High School' ? 'selected' : '' ?>>Vocational High School</option>
								<option value="College/University" <?= old('jenjang') == 'College/University' ? 'selected' : '' ?>>College/University</option>
							<?php } else { ?>
								<option value="" selected disabled>Select Grade</option>
								<option value="Elementary School" <?= old('jenjang') == 'Elementary School' ? 'selected' : '' ?>>Elementary School</option>
								<option value="Junior High school" <?= old('jenjang') == 'Junior High school' ? 'selected' : '' ?>>Junior High school</option>
								<option value="Senior High School" <?= old('jenjang') == 'Senior High School' ? 'selected' : '' ?>>Senior High School</option>
								<option value="Vocational High School" <?= old('jenjang') == 'Vocational High School' ? 'selected' : '' ?>>Vocational High School</option>
								<option value="College/University" <?= old('jenjang') == 'College/University' ? 'selected' : '' ?>>College/University</option>
							<?php } ?>
						</select>
						<div class="invalid-feedback">
							Grade required.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="from" class="form-label mb-0">From (year)</label>
						<input type="number" class="form-control " name="fromyear" id="from" value="<?= old('fromyear') ? old('fromyear') : $pendidikan->tahun_masuk ?>" required>
						<div class="invalid-feedback">
							From (year) required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="toyear" class="form-label mb-0">To (year)</label>
						<input type="number" class="form-control " name="toyear" id="toyear" value="<?= old('toyear') ? old('toyear') : $pendidikan->tahun_lulus ?>" required>
						<div class="invalid-feedback">
							To (year) required.
						</div>
					</div>
				</div>
			</li>
			<li class="list-group-item">
				<div class="btn-group w-100" role="group" aria-label="Basic mixed styles example">
					<a href="/profil" class="btn btn-outline-danger p-2">Profil</a>
					<button class="btn btn-danger p-2" type="submit">Update</button>
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