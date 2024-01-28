<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">UPDATE EXPERIENCES</li>
		<form class="was-validated" action="/simpanedit_pengalaman/<?= $pengalaman->id ?>" method="POST">
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="perusahaan" class="form-label mb-0">Company</label>
						<input type="text" class="form-control" name="perusahaan" id="perusahaan" value="<?= old('perusahaan') ? old('perusahaan') : $pengalaman->perusahaan ?>" required>
						<div class="invalid-feedback">
							Company required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="posisi" class="form-label mb-0">Position</label>
						<input type="text" class="form-control" name="posisi" id="posisi" value="<?= old('posisi') ? old('posisi') : $pengalaman->posisi ?>" required>
						<div class="invalid-feedback">
							Position required.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="from" class="form-label mb-0">From (year)</label>
						<input type="number" class="form-control " name="fromyear" id="from" value="<?= old('fromyear') ? old('fromyear') : $pengalaman->tahun_masuk ?>" required>
						<div class="invalid-feedback">
							From (year) required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="toyear" class="form-label mb-0">To (year)</label>
						<input type="number" class="form-control " name="toyear" id="toyear" value="<?= old('toyear') ? old('toyear') : $pengalaman->tahun_lulus ?>" required>
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