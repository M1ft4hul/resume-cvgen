<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">UPDATE OTHER QUALIFICATIONS</li>
		<form class="was-validated" action="/simpanedit_keahlian/<?= $keahlian->id ?>" method="POST">
			<?= csrf_field(); ?>
			<li class="list-group-item">
				<label for="keahlian" class="form-label mb-0">Other Qualification</label>
				<textarea class="form-control" name="keahlian" id="keahlian" cols="30" rows="10" required><?= old('keahlian') ? old('keahlian') : $keahlian->keahlian ?></textarea>
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
</div>

<!-- MODAL -->

</div>
</div>
</div>

<?= $this->endSection(); ?>