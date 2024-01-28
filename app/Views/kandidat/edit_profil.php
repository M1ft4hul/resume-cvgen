<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">PROFILE</li>
		<form class="was-validated" action="/simpan_profil/<?= $biodata->id_user ?>" method="POST">
			<li class="list-group-item">
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="username" class="form-label mb-0">Username</label>
						<input type="text" class="form-control" id="username" value="<?= $biodata->username ?>" disabled>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="password" class="form-label mb-0">Password</label>
						<input type="password" class="form-control" name="password" id="password" value="<?= old('password') ?>" required>
						<span class="mata"><i class="bi bi-eye-fill" id="show_eye"></i></span>
						<div class="invalid-feedback">
							Your Password required.
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="name" class="form-label mb-0">Full Name</label>
						<input type="text" class="form-control" name="nama" id="name" value="<?= old('nama') ? old('nama') : $biodata->nama ?>" required>
						<div class="invalid-feedback">
							Full name required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="email" class="form-label mb-0">Email</label>
						<input type="email" class="form-control" name="email" id="email" value="<?= old('email') ? old('email') : $biodata->email ?>" required>
						<div class="invalid-feedback">
							Valid Email required.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="hp" class="form-label mb-0">Phone Number <small>(ex.08123456789)</small> </label>
						<input type="number" class="form-control" name="hp" id="hp" value="<?= old('telepon') ? old('telepon') : $biodata->telepon ?>" required>
						<div class="invalid-feedback">
							Phone Number required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="wa" class="form-label mb-0">Whatsapp <small>(ex.08123456789)</small></label>
						<input type="number" class="form-control" name="wa" id="wa" value="<?= old('wa') ? old('wa') : $biodata->wa ?>" required>
						<div class="invalid-feedback">
							Whatsapp required.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="tempatlahir" class="form-label mb-0">Place of Birth </label>
						<input type="text" class="form-control" name="tempatlahir" id="tempatlahir" value="<?= old('tempat_lahir') ? old('tempat_lahir') : $biodata->tempat_lahir ?>" required>
						<div class="invalid-feedback">
							Place of Birth required.
						</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="tgllahir" class="form-label mb-0">Date of Birth </label>
						<input type="date" class="form-control" name="tgllahir" id="tgllahir" value="<?= old('tgl_lahir') ? old('tgl_lahir') : $biodata->tgl_lahir ?>" required>
						<div class="invalid-feedback">
							Date of Birth required.
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 mb-2">
						<label for="jk" class="form-label mb-0">Gender </label>
						<select class="form-select" name="jk" required aria-label="select example">


							<?php if ($biodata->jk != "") {
								echo '<option value="' . $biodata->jk . '" selected>' . $biodata->jk . '</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>';
							} else { ?>
								<option value="" selected disabled>Select</option>
								<option value="Male" <?= old('jk') == 'Male' ? 'selected' : '' ?>>Male</option>
								<option value="Female" <?= old('jk') == 'Female' ? 'selected' : '' ?>>Female</option>
							<?php } ?>
						</select>
						<div class="invalid-feedback">Gender required.</div>
					</div>
					<div class="col-lg-3 mb-2">
						<label for="menikah" class="form-label mb-0">Marital menikah</label>
						<select class="form-select " id="menikah" name="menikah" aria-label="Default select example" required>

							<?php if ($biodata->menikah != "") { ?>
								<option value="" disabled>Select</option>
								<option value="<?php $biodata->menikah ?>" selected><?php $biodata->menikah ?></option>
								<option value="Single" <?= old('menikah') == 'Single' ? 'selected' : '' ?>>Single</option>
								<option value="Married" <?= old('menikah') == 'Married' ? 'selected' : '' ?>>Married</option>
								<option value="Widowed" <?= old('menikah') == 'Widowed' ? 'selected' : '' ?>>Widowed</option>
								<option value="Divorced" <?= old('menikah') == 'Divorced' ? 'selected' : '' ?>>Divorced</option>
								<option value="Separated" <?= old('menikah') == 'Separated' ? 'selected' : '' ?>>Separated</option>
							<?php } else { ?>
								<option value="" selected disabled>Select</option>
								<option value="Single" <?= old('menikah') == 'Single' ? 'selected' : '' ?>>Single</option>
								<option value="Married" <?= old('menikah') == 'Married' ? 'selected' : '' ?>>Married</option>
								<option value="Widowed" <?= old('menikah') == 'Widowed' ? 'selected' : '' ?>>Widowed</option>
								<option value="Divorced" <?= old('menikah') == 'Divorced' ? 'selected' : '' ?>>Divorced</option>
								<option value="Separated" <?= old('menikah') == 'Separated' ? 'selected' : '' ?>>Separated</option>
							<?php } ?>
						</select>
						<div class="invalid-feedback">Marital status required.</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="negara" class="form-label mb-0">Nationality </label>
						<select class="form-select" name="negara" required aria-label="select example" id="negara">

							<?php if ($biodata->negara != "") { ?>
								<option value="" disabled>Select</option>
								<option value="<?= $biodata->negara ?>" selected><?= $biodata->negara ?></option>
								<?php foreach ($negara as $n) { ?>
									<option value="<?= $n['nama'] ?>" <?= old('negara') == '' . $n['nama'] . '' ? 'selected' : '' ?>><?= $n['nama'] ?></option>
								<?php } ?>
							<?php } else { ?>
								<option value="" selected disabled>Select </option>
								<?php foreach ($negara as $n) { ?>
									<option value="<?= $n['nama'] ?>" <?= old('negara') == '' . $n['nama'] . '' ? 'selected' : '' ?>><?= $n['nama'] ?></option>
							<?php }
							} ?>
						</select>
						<div class="invalid-feedback">Nationality required.</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 mb-2">
						<label for="tinggi" class="form-label mb-0">Height (Cm) </label>
						<input type="number" class="form-control" name="tinggi" id="tinggi" value="<?= old('tinggi') ? old('tinggi') : $biodata->tinggi ?>" required>
						<div class="invalid-feedback">Height required.</div>
					</div>
					<div class="col-lg-3 mb-2">
						<label for="berat" class="form-label mb-0">Weight (Kg) </label>
						<input type="number" class="form-control" name="berat" id="berat" value="<?= old('berat') ? old('berat') : $biodata->berat ?>" required>
						<div class="invalid-feedback">Weight required.</div>
					</div>
					<div class="col-lg-3 mb-2">
						<label for="sepatu" class="form-label mb-0">Shoe size </label>
						<input type="number" class="form-control" name="sepatu" id="sepatu" value="<?= old('ukuran_sepatu') ? old('ukuran_sepatu') : $biodata->ukuran_sepatu ?>" required>
						<div class="invalid-feedback">Shoe size required.</div>
					</div>
					<div class="col-lg-3 mb-2">
						<label for="baju" class="form-label mb-0">Coverall size </label>
						<select class="form-select" name="baju" required aria-label="select example">

							<?php if ($biodata->ukuran_pakaian != "") {
								echo '<option value="' . $biodata->ukuran_pakaian . '"  selected>' . $biodata->ukuran_pakaian . '</option>
												<option value="S"  >S</option>
												<option value="M"  >M</option>
												<option value="L"  >L</option>
												<option value="XL"  >XL</option>
												<option value="XXL"  >XXL</option>';
							} else { ?>
								<option value="" selected disabled>Select</option>
								<option value="S" <?= old('baju') == 'S' ? 'selected' : '' ?>>S</option>
								<option value="M" <?= old('baju') == 'M' ? 'selected' : '' ?>>M</option>
								<option value="L" <?= old('baju') == 'L' ? 'selected' : '' ?>>L</option>
								<option value="XL" <?= old('baju') == 'XL' ? 'selected' : '' ?>>XL</option>
								<option value="XXL" <?= old('baju') == 'XXL' ? 'selected' : '' ?>>XXL</option>
							<?php } ?>
						</select>
						<div class="invalid-feedback">Coverall size required.</div>
					</div>

				</div>
				<div class="row">
					<div class="col-lg-6 mb-2">
						<label for="npwp" class="form-label mb-0">Tax ID <small>(Type "-" if Empty)</small></label>
						<input type="text" class="form-control" name="npwp" id="npwp" value="<?= old('npwp') ? old('npwp') : $biodata->npwp ?>" required>
						<div class="invalid-feedback">Taxt ID required.</div>
					</div>
					<div class="col-lg-6 mb-2">
						<label for="bandara" class="form-label mb-0">Nearest airport</label>
						<input type="text" class="form-control" name="bandara" id="bandara" value="<?= old('bandara') ? old('bandara') : $biodata->bandara ?>" required>
						<div class="invalid-feedback">Nearest airport required.</div>
					</div>
				</div>
				<div class="col6 mb-2">
					<label for="alamat" class="form-label mb-0">Address</label>
					<textarea class="form-control" name="alamat" id="alamat" cols="30" rows="2" required><?= old('alamat') ? old('alamat') : $biodata->alamat ?></textarea>
					<div class="invalid-feedback">Address required.</div>
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