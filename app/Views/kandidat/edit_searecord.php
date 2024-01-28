<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">UPDATE SEA SERVICES RECORD</li>
		<form class="was-validated" action="/simpanedit_searecord/<?= $searecord->id ?>" method="POST">
			<?= csrf_field(); ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="a" class="form-label mb-0">Company Name</label>
						<input type="text" name="nama_perusahaan" class="form-control" id="a" value="<?= old('nama_perusahaan') ? old('nama_perusahaan') : $searecord->nama_perusahaan ?>" required>
						<div class="invalid-feedback">
							Company Name required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="b" class="form-label mb-0">Vessel Name</label>
						<input type="text" name="nama_kapal" class="form-control" id="b" value="<?= old('nama_kapal') ? old('nama_kapal') : $searecord->nama_kapal ?>" required>
						<div class="invalid-feedback">
							Vessel Name required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="dd" class="form-label mb-0">Vessel Status</label>
						<input type="text" name="status_kapal" class="form-control" id="dd" value="<?= old('status_kapal') ? old('status_kapal') : $searecord->status_kapal ?>" required>
						<div class="invalid-feedback">
							Vessel Status required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="c" class="form-label mb-0">Rank</label>
						<input type="text" name="rank_kapal" class="form-control" id="c" value="<?= old('rank_kapal') ? old('rank_kapal') : $searecord->rank_kapal ?>" required>
						<div class="invalid-feedback">
							Rank required.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="g" class="form-label mb-0">Period Of Service (Sign On)</label>
						<input type="date" name="kapal_masuk" class="form-control" id="g" value="<?= old('kapal_masuk') ? old('kapal_masuk') : $searecord->kapal_masuk ?>" required>
						<div class="invalid-feedback">
							Period Of Service (Sign On) required
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="h" class="form-label mb-0">Period Of Service (Sign Off)</label>
						<input type="date" name="kapal_keluar" class="form-control" id="h" value="<?= old('kapal_keluar') ? old('kapal_keluar') : $searecord->kapal_keluar ?>" required>
						<div class="invalid-feedback">
							Period Of Service (Sign Off) required.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 mb-2">
						<label for="d" class="form-label mb-0">Vessel Type</label>
						<input type="text" name="tipe_kapal" class="form-control" id="d" value="<?= old('tipe_kapal') ? old('tipe_kapal') : $searecord->tipe_kapal ?>" required>
						<div class="invalid-feedback">
							Vessel Type required.
						</div>
					</div>

					<div class="col-lg-4 mb-2">
						<label for="e" class="form-label mb-0">Vessel Spec (GT)</label>
						<input type="text" name="gt_kapal" class="form-control" id="e" value="<?= old('gt_kapal') ? old('gt_kapal') : $searecord->gt_kapal ?>" required>
						<div class="invalid-feedback">
							Vessel Spec (GT) required.
						</div>
					</div>
					<div class="col-lg-4 mb-2">
						<label for="f" class="form-label mb-0">Vessel Spec (KW/BHP)</label>
						<input type="text" name="kw_kapal" class="form-control" id="f" value="<?= old('kw_kapal') ? old('kw_kapal') : $searecord->kw_kapal ?>" required>
						<div class="invalid-feedback">
							Vessel Spec (KW/BHP) required.
						</div>
					</div>
				</div>
			</li>
			<li class="list-group-item">

				<div class="btn-group w-100" role="group" aria-label="Basic example">
					<a href="/profil" type="button" class="btn btn-outline-danger">Profile</a>
					<button type="submit" class="btn btn-danger">Update</submit>
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