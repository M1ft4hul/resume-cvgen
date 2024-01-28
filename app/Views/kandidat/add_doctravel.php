<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">ADD TRAVEL DOCUMENTS</li>
		<form class="was-validated" action="/simpan_doctravel" method="POST">
			<?= csrf_field(); ?>
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="docname" class="form-label mb-0">Document Name</label>
						<input type="text" name="dok_nama" class="form-control " id="docname" value="<?= old('dok_nama'); ?>" required>
						<div class="invalid-feedback">
							Document name required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="docnumber" class="form-label mb-0">Number</label>
						<input type="text" name="dok_nomor" class="form-control" id="docnumber" value="<?= old('dok_nomor') ?>" required>
						<div class="invalid-feedback">
							Document number required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="dok_dibuat" class="form-label mb-0">Date of Issue</label>
						<input type="date" name="dok_dibuat" class="form-control" id="dok_dibuat" value="<?= old('dok_dibuat') ?>" required>
						<div class="invalid-feedback">
							Date of Issue required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="d" class="form-label mb-0">Date of Expire</label>
						<input type="date" name="dok_akhir" class="form-control" id="d" value="<?= old('dok_akhir') ?>" required>
						<div class="invalid-feedback">
							Date of Expire required.
						</div>
					</div>
					<div class="col-md">
						<label for="e" class="form-label mb-0">Place of Issue</label>
						<input type="text" name="dok_kota" class="form-control" id="e" value="<?= old('dok_kota') ?>" required>
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
	<?php if ($doctravel) { ?>
		<ul class="list-group mt-4">
			<li class="list-group-item active" aria-current="true">MY TRAVEL DOCUMENTS</li>
			<li class="list-group-item">
				<div class="table-responsive mt-2">
					<table class="table table-bordered table-responsive text-nowrap" style="width: 100%; ">
						<thead class="judultabel ">
							<tr>
								<th>Doc. Name</th>
								<th>Doc. Number</th>
								<th>Date of Issue</th>
								<th>Date of Expire</th>
								<th>Place of Issue</th>
								<th class="d-flex justify-content-end">Action</th>
							</tr>
						</thead>
						<tbody class="isitabel">
							<?php foreach ($doctravel as $x) { ?>
								<tr>
									<td class="align-middle"><?= $x->nama_dokumen; ?></td>
									<td class="align-middle"><?= $x->nomor_dokumen; ?></td>
									<td class="align-middle"><?= $x->tgl_terbit_dok; ?></td>
									<td class="align-middle"><?= $x->tgl_berakhir_dok; ?></td>
									<td class="align-middle"><?= $x->dok_dikeluarkan_oleh; ?></td>
									<td class="d-flex justify-content-end">
										<a href="/edit_doctravel/<?= $x->id; ?>" target="_self" rel="noopener noreferrer" class="btn m-1" onclick="loading()"><i class="bi bi-pencil-square" style="font-size: 1rem; color: orange;"></i></a>
										<form action="/hapus_doctravel/<?= $x->id; ?>" method="post">
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