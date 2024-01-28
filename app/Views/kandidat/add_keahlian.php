<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">ADD OTHER QUALIFICATIONS</li>
		<form class="was-validated" action="/simpan_keahlian" method="POST">
			<?= csrf_field(); ?>
			<li class="list-group-item">
				<label for="keahlian" class="form-label mb-0">Other Qualification</label>
				<textarea class="form-control" name="keahlian" id="keahlian" cols="30" rows="10" required><?= old('keahlian') ?></textarea>
				<div class="invalid-feedback">
					Qualification required.
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
	<?php if ($keahlian) { ?>
		<ul class="list-group mt-4">
			<li class="list-group-item active" aria-current="true">MY QUALIFICATIONS</li>
			<li class="list-group-item">
				<div class="table-responsive mt-2">
					<table class="table table-bordered table-responsive text-nowrap" style="width: 100%;">
						<thead class="judultabel">
							<tr>
								<th>Qualifications</th>
								<th class="d-flex justify-content-end">Action</th>
							</tr>
						</thead>
						<tbody class="isitabel">
							<?php foreach ($keahlian as $p) { ?>
								<tr>
									<td class="align-middle"><?= nl2br($p->keahlian) ?></td>
									<td class="d-flex justify-content-end">
										<a href="/edit_keahlian/<?= $p->id ?>" target="_self" rel="noopener noreferrer" class="btn m-1" onclick="loading()"><i class="bi bi-pencil-square" style="font-size: 1rem; color: orange;"></i></a>
										<form action="/hapus_keahlian/<?= $p->id ?>" method="post">
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