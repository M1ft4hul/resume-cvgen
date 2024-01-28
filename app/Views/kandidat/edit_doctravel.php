<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">ADD TRAVEL DOCUMENTS</li>
		<form class="was-validated" action="/simpanedit_doctravel/<?= $doctravel->id ?>" method="POST">
			<?= csrf_field(); ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="docname" class="form-label mb-0">Document Name</label>
						<input type="text" name="dok_nama" class="form-control " id="docname" value="<?= old('dok_nama') ? old('dok_nama') : $doctravel->nama_dokumen ?>" required>
						<div class="invalid-feedback">
							Document name required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="docnumber" class="form-label mb-0">Number</label>
						<input type="text" name="dok_nomor" class="form-control" id="docnumber" value="<?= old('dok_nomor') ? old('dok_nomor') : $doctravel->nomor_dokumen ?>" required>
						<div class="invalid-feedback">
							Document number required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="dok_dibuat" class="form-label mb-0">Date of Issue</label>
						<input type="date" name="dok_dibuat" class="form-control" id="dok_dibuat" value="<?= old('dok_dibuat') ? old('dok_dibuat') : $doctravel->tgl_terbit_dok ?>" required>
						<div class="invalid-feedback">
							Date of Issue required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="d" class="form-label mb-0">Date of Expire</label>
						<input type="date" name="dok_akhir" class="form-control" id="d" value="<?= old('dok_akhir') ? old('dok_akhir') : $doctravel->tgl_berakhir_dok ?>" required>
						<div class="invalid-feedback">
							Date of Expire required.
						</div>
					</div>
					<div class="col-md">
						<label for="e" class="form-label mb-0">Place of Issue</label>
						<input type="text" name="dok_kota" class="form-control" id="e" value="<?= old('dok_kota') ? old('dok_kota') : $doctravel->dok_dikeluarkan_oleh ?>" required>
						<div class="invalid-feedback">
							Place of Issue required.
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