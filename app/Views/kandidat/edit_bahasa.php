<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">UPDATE LANGUAGE</li>
		<form class="was-validated" action="/simpanedit_bahasa/<?= $bahasa->id ?>" method="POST">
			<?= csrf_field(); ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="bahasa" class="form-label mb-0">Language</label>
						<input type="text" class="form-control" name="bahasa" id="bahasa" value="<?= old('bahasa') ? old('bahasa') : $bahasa->bahasa ?>" required>
						<div class="invalid-feedback">
							Language required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="level" class="form-label mb-0">Level</label>
						<select class="form-select" id="level" name="level" aria-label="Default select example" required>
							<?php if ($bahasa->level != "") { ?>
								<option value="<?= $bahasa->level ?>" selected><?= $bahasa->level ?></option>
								<option value="" disabled>-</option>
								<option value="A1 - Beginner" <?= old('level') == 'A1 Beginner' ? 'selected' : '' ?>>A1 - Beginner</option>
								<option value="A2 - Elementary" <?= old('level') == 'A2 Elementary' ? 'selected' : '' ?>>A2 - Elementary</option>
								<option value="B1 - Intermediate" <?= old('level') == 'B1 Intermediate' ? 'selected' : '' ?>>B1 - Intermediate</option>
								<option value="B2 - Upper Intermediate" <?= old('level') == 'B2 Upper Intermediate' ? 'selected' : '' ?>>B2 - Upper Intermediate</option>
								<option value="C1 - Advanced" <?= old('level') == 'C1 Advanced' ? 'selected' : '' ?>>C1 - Advanced</option>
								<option value="C2 - Proficient" <?= old('level') == 'C2 Proficient' ? 'selected' : '' ?>>C2 - Proficient</option>
							<?php } else { ?>
								<option value="" selected disabled>Select</option>
								<option value="A1 - Beginner" <?= old('level') == 'A1 Beginner' ? 'selected' : '' ?>>A1 - Beginner</option>
								<option value="A2 - Elementary" <?= old('level') == 'A2 Elementary' ? 'selected' : '' ?>>A2 - Elementary</option>
								<option value="B1 - Intermediate" <?= old('level') == 'B1 Intermediate' ? 'selected' : '' ?>>B1 - Intermediate</option>
								<option value="B2 - Upper Intermediate" <?= old('level') == 'B2 Upper Intermediate' ? 'selected' : '' ?>>B2 - Upper Intermediate</option>
								<option value="C1 - Advanced" <?= old('level') == 'C1 Advanced' ? 'selected' : '' ?>>C1 - Advanced</option>
								<option value="C2 - Proficient" <?= old('level') == 'C2 Proficient' ? 'selected' : '' ?>>C2 - Proficient</option>
							<?php } ?>
						</select>
						<div class="invalid-feedback">
							Level required.
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