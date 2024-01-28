<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">ADD SEA SERVICES RECORD</li>
		<form class="was-validated" action="/simpan_searecord" method="POST">
			<?= csrf_field(); ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="a" class="form-label mb-0">Company Name</label>
						<input type="text" name="nama_perusahaan" class="form-control" id="a" value="<?= old('nama_perusahaan') ?>" required>
						<div class="invalid-feedback">
							Company Name required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="b" class="form-label mb-0">Vessel Name</label>
						<input type="text" name="nama_kapal" class="form-control" id="b" value="<?= old('nama_kapal') ?>" required>
						<div class="invalid-feedback">
							Vessel Name required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="dd" class="form-label mb-0">Vessel Status</label>
						<input type="text" name="status_kapal" class="form-control" id="dd" value="<?= old('status_kapal') ?>" required>
						<div class="invalid-feedback">
							Vessel Status required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="c" class="form-label mb-0">Rank</label>
						<input type="text" name="rank_kapal" class="form-control" id="c" value="<?= old('rank_kapal') ?>" required>
						<div class="invalid-feedback">
							Rank required.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="g" class="form-label mb-0">Period Of Service (Sign On)</label>
						<input type="date" name="kapal_masuk" class="form-control" id="g" value="<?= old('kapal_masuk') ?>" required>
						<div class="invalid-feedback">
							Period Of Service (Sign On) required
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="h" class="form-label mb-0">Period Of Service (Sign Off)</label>
						<input type="date" name="kapal_keluar" class="form-control" id="h" value="<?= old('kapal_keluar') ?>" required>
						<div class="invalid-feedback">
							Period Of Service (Sign Off) required.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 mb-2">
						<label for="d" class="form-label mb-0">Vessel Type</label>
						<input type="text" name="tipe_kapal" class="form-control" id="d" value="<?= old('tipe_kapal') ?>" required>
						<div class="invalid-feedback">
							Vessel Type required.
						</div>
					</div>

					<div class="col-lg-4 mb-2">
						<label for="e" class="form-label mb-0">Vessel Spec (GT)</label>
						<input type="text" name="gt_kapal" class="form-control" id="e" value="<?= old('gt_kapal') ?>" required>
						<div class="invalid-feedback">
							Vessel Spec (GT) required.
						</div>
					</div>
					<div class="col-lg-4 mb-2">
						<label for="f" class="form-label mb-0">Vessel Spec (KW/BHP)</label>
						<input type="text" name="kw_kapal" class="form-control" id="f" value="<?= old('kw_kapal') ?>" required>
						<div class="invalid-feedback">
							Vessel Spec (KW/BHP) required.
						</div>
					</div>
				</div>
			</li>
			<li class="list-group-item">
				<div class="btn-group w-100" role="group" aria-label="Basic example">
					<a href="/profil" type="button" class="btn btn-outline-danger p-2">Profile</a>
					<button type="submit" class="btn btn-danger p-2">Save</submit>
				</div>
			</li>
		</form>

	</ul>
	<?php if ($searecord) { ?>
		<ul class="list-group mt-4">
			<li class="list-group-item active" aria-current="true">MY TRAVEL DOCUMENTS</li>
			<li class="list-group-item">
				<div class="table-responsive mt-2">
					<table class="table table-bordered table-responsive text-nowrap" style="width: 100%;">
						<thead class="judultabel">
							<tr>
								<th rowspan="2" class="align-middle">Company Name</th>
								<th rowspan="2" class="align-middle">Vessel Name</th>
								<th rowspan="2" class="align-middle">Rank</th>
								<th rowspan="2" class="align-middle">Vessel Type</th>
								<th rowspan="2" class="align-middle">Status</th>
								<th colspan="2">Vessel Spec</th>
								<th colspan="2">Periode of Service</th>
								<th rowspan="2" class="align-middle">Action</th>
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
									<td class="d-flex justify-content-end">
										<a href="/edit_searecord/<?= $x->id ?>" target="_self" rel="noopener noreferrer" class="btn m-1" onclick="loading()"><i class="bi bi-pencil-square" style="font-size: 1rem; color: orange;"></i></a>
										<form action="/hapus_searecord/<?= $x->id ?>" method="post">
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