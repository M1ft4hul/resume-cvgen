<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">ADD LANGUAGE</li>
		<form class="was-validated" action="/simpan_bahasa" method="POST">
			<?= csrf_field(); ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="bahasa" class="form-label mb-0">Language</label>
						<select class="form-select" id="bahasa" name="bahasa" aria-label="Default select example" required>
							<option value="" selected disabled>Select</option>
							<?php foreach ($semuabahasa as $a) { ?>
								<option value="<?= $a['bahasa'] ?>" <?= old('bahasa') == '' . $a['bahasa'] . '' ? 'selected' : '' ?>><?= $a['bahasa'] ?></option>
							<?php } ?>
						</select>
						<div class="invalid-feedback">
							Language required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="level" class="form-label mb-0">Level</label>
						<select class="form-select" id="level" name="level" aria-label="Default select example" required>
							<option value="" selected disabled>Select</option>
							<option value="A1 - Beginner" <?= old('level') == 'A1 Beginner' ? 'selected' : '' ?>>A1 - Beginner</option>
							<option value="A2 - Elementary" <?= old('level') == 'A2 Elementary' ? 'selected' : '' ?>>A2 - Elementary</option>
							<option value="B1 - Intermediate" <?= old('level') == 'B1 Intermediate' ? 'selected' : '' ?>>B1 - Intermediate</option>
							<option value="B2 - Upper Intermediate" <?= old('level') == 'B2 Upper Intermediate' ? 'selected' : '' ?>>B2 - Upper Intermediate</option>
							<option value="C1 - Advanced" <?= old('level') == 'C1 Advanced' ? 'selected' : '' ?>>C1 - Advanced</option>
							<option value="C2 - Proficient" <?= old('level') == 'C2 Proficient' ? 'selected' : '' ?>>C2 - Proficient</option>

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
	<?php if ($bahasa) { ?>
		<ul class="list-group mt-4">
			<li class="list-group-item active" aria-current="true">MY LANGUAGES</li>
			<li class="list-group-item">
				<div class="table-responsive mt-2">
					<table class="table table-bordered table-responsive text-nowrap" style="width: 100%;">
						<thead class="judultabel">
							<tr>
								<th>Language</th>
								<th>level</th>
								<th class="d-flex justify-content-end">Action</th>
							</tr>
						</thead>
						<tbody class="isitabel">
							<?php foreach ($bahasa as $p) { ?>
								<tr>
									<td class="align-middle"><?= $p->bahasa ?></td>
									<td class="align-middle"><?= $p->level ?></td>
									<td class="d-flex justify-content-end">
										<a href="/edit_bahasa/<?= $p->id ?>" target="_self" rel="noopener noreferrer" class="btn m-1" onclick="loading()"><i class="bi bi-pencil-square" style="font-size: 1rem; color: orange;"></i></a>
										<form action="/hapus_bahasa/<?= $p->id ?>" method="post">
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