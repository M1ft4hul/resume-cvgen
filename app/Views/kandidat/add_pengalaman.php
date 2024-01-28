<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">ADD EXPERIENCES</li>
		<form class="was-validated" action="/simpan_pengalaman" method="POST">
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="perusahaan" class="form-label mb-0">Company</label>
						<input type="text" class="form-control" name="perusahaan" id="perusahaan" value="<?= old('perusahaan') ?>" required>
						<div class="invalid-feedback">
							Company required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="posisi" class="form-label mb-0">Position</label>
						<input type="text" class="form-control" name="posisi" id="posisi" value="<?= old('posisi') ?>" required>
						<div class="invalid-feedback">
							Position required.
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
	<?php if ($pengalaman) { ?>
		<ul class="list-group mt-4">
			<li class="list-group-item active" aria-current="true">MY EXPERIENCES</li>
			<li class="list-group-item">
				<div class="table-responsive mt-2">
					<table class="table table-bordered table-responsive text-nowrap" style="width: 100%;">
						<thead class="judultabel">
							<tr>
								<th>Year</th>
								<th>Company</th>
								<th>Position</th>

								<th class="d-flex justify-content-end">Action</th>
							</tr>
						</thead>
						<tbody class="isitabel">
							<?php foreach ($pengalaman as $p) { ?>
								<tr>
									<td class="align-middle"><?= $p->tahun_masuk . ' - ' . $p->tahun_lulus ?></td>
									<td class="align-middle"><?= $p->perusahaan ?></td>
									<td class="align-middle"><?= $p->posisi ?></td>

									<td class="d-flex justify-content-end">
										<a href="/edit_pengalaman/<?= $p->id ?>" target="_self" rel="noopener noreferrer" class="btn m-1" onclick="loading()"><i class="bi bi-pencil-square" style="font-size: 1rem; color: orange;"></i></a>
										<form action="/hapus_pengalaman/<?= $p->id ?>" method="post">
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