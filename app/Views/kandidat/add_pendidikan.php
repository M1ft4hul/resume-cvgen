<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">ADD EDUCATION</li>
		<form class="was-validated" action="/simpan_pendidikan" method="POST">
			<?= csrf_field(); ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="namasekolah" class="form-label mb-0">Name of School/Institution</label>
						<input type="text" class="form-control" name="nama_sekolah" id="namasekolah" value="<?= old('nama_sekolah') ?>" required>
						<div class="invalid-feedback">
							Name of school required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="grade" class="form-label mb-0">Grade</label>
						<select class="form-select" id="grade" name="grade" aria-label="Default select example" required>
							<option value="" selected disabled>Select</option>
							<option value="Elementary School" <?= old('grade') == 'Elementary School' ? 'selected' : '' ?>>Elementary School</option>
							<option value="Junior High school" <?= old('grade') == 'Junior High school' ? 'selected' : '' ?>>Junior High school</option>
							<option value="Senior High School" <?= old('grade') == 'Senior High School' ? 'selected' : '' ?>>Senior High School</option>
							<option value="Vocational High School" <?= old('grade') == 'Vocational High School' ? 'selected' : '' ?>>Vocational High School</option>
							<option value="College/University" <?= old('grade') == 'College/University' ? 'selected' : '' ?>>College/University</option>

						</select>
						<div class="invalid-feedback">
							Grade required.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="from" class="form-label mb-0">From (year)</label>
						<input type="number" class="form-control yearpicker" name="fromyear" id="from" value="<?= old('fromyear') ?>" required>
						<div class="invalid-feedback">
							From (year) required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="toyear" class="form-label mb-0">To (year)</label>
						<input type="number" class="form-control yearpicker" name="toyear" id="toyear" value="<?= old('toyear') ?>" required>
						<div class="invalid-feedback">
							To (year) required.
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
	<?php if ($pendidikan) { ?>
		<ul class="list-group mt-4">
			<li class="list-group-item active" aria-current="true">MY EDUCATIONS</li>
			<li class="list-group-item">
				<div class="table-responsive mt-2">
					<table class="table table-bordered table-responsive text-nowrap" style="width: 100%;">
						<thead class="judultabel">
							<tr>
								<th>Name of School/Institution</th>
								<th>Grade</th>
								<th>From (Year)</th>
								<th>To (Year)</th>
								<th class="d-flex justify-content-end">Action</th>
							</tr>
						</thead>
						<tbody class="isitabel">
							<?php foreach ($pendidikan as $p) { ?>
								<tr>
									<td class="align-middle"><?= $p->nama_sekolah ?></td>
									<td class="align-middle"><?= $p->jenjang ?></td>
									<td class="align-middle"><?= $p->tahun_masuk ?></td>
									<td class="align-middle"><?= $p->tahun_lulus ?></td>
									<td class="d-flex justify-content-end">
										<a href="/edit_pendidikan/<?= $p->id ?>" target="_self" rel="noopener noreferrer" class="btn m-1" onclick="loading()"><i class="bi bi-pencil-square" style="font-size: 1rem; color: orange;"></i></a>
										<form action="/hapus_pendidikan/<?= $p->id ?>" method="post">
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