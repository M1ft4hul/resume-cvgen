<?= $this->extend('/kandidat/template'); ?>

<?= $this->section('content'); ?>
<div class="col-lg-9 mb-5">
	<ul class="list-group">
		<li class="list-group-item active" aria-current="true">PERSONAL DATA</li>
		<li class="list-group-item">
			<p>Welcome, <strong><?= session()->get('nama') ?></strong><br>Update or change your profile.</p>
			<hr>
			<div class="row">
				<div class="col-lg-4 mb-2">
					<div class="card">
						<div class="card-header bg-secondary px-1">
							<div class="text-white">PROFILE PHOTO <small class="text-warning"> (Click to change)</small></div>
						</div>
						<div class="card-body">
							<div class=" d-flex justify-content-center">
								<label for="upload_image">
									<div class="row d-flex justify-content-center">
										<label for="upload_image">
											<img src="<?= base_url('/photos/' . $biodata->photo); ?>" alt="" class="rounded profil" width="150px" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
											<input type="file" name="image" class="image" id="upload_image" style="display:none" accept="image/x-png,image/jpeg" />
										</label>
									</div>
								</label>
							</div>

						</div>
					</div>
				</div>
				<div class="col-lg-8 mb-2">
					<div class="row">
						<div class="mb-2">
							<div class="card mb-3 h-100">
								<div class="card-header px-1 py-0 bg-secondary">
									<div class="d-flex bd-highlight">
										<div class="me-auto d-flex align-items-center bd-highlight text-white py-2">PERSONAL DATA FOR COMMON CV (REQUIRED)</div>
									</div>
								</div>
								<div class="card-body">
									<div class="container overflow-hidden p-1">
										<div class="row gy-1">
											<div class="col-12">
												<?php if ($biodata->tempat_lahir != "") { ?>
													<a href="/edit_profil" class="btn btn-success w-100">
														<i class="bi bi-check-square-fill"></i> Profile
													</a>
												<?php } else { ?>
													<a href="/edit_profil" class="btn btn-danger w-100">
														<i class="bi bi-exclamation-square-fill"></i> Profile
													</a>
												<?php } ?>
											</div>
											<div class="col-12">
												<?php if ($pendidikan) { ?>
													<a href="/add_pendidikan" class="btn btn-success w-100"><i class="bi bi-check-square-fill"></i> Educations</a>
												<?php } else { ?>
													<a href="/add_pendidikan" class="btn btn-danger w-100"><i class="bi bi-exclamation-square-fill"></i> Educations</a>
												<?php } ?>

											</div>
											<div class="col-12">
												<?php if ($pengalaman) { ?>
													<a href="/add_pengalaman" class="btn btn-success w-100"><i class="bi bi-check-square-fill"></i> Experiences</a>
												<?php } else { ?>
													<a href="/add_pengalaman" class="btn btn-danger w-100"><i class="bi bi-exclamation-square-fill"></i> Experiences</a>
												<?php } ?>
											</div>
											<div class="col-12">
												<?php if ($bahasa) { ?>
													<a href="/add_bahasa" class="btn btn-success w-100"><i class="bi bi-check-square-fill"></i> Languages</a>
												<?php } else { ?>
													<a href="/add_bahasa" class="btn btn-danger w-100"><i class="bi bi-exclamation-square-fill"></i> Languages</a>
												<?php } ?>
											</div>
											<div class="col-12">
												<?php if ($keahlian) { ?>
													<a href="/add_keahlian" class="btn btn-success w-100"><i class="bi bi-check-square-fill"></i> Other Qualifications</a>
												<?php } else { ?>
													<a href="/add_keahlian" class="btn btn-danger w-100"><i class="bi bi-exclamation-square-fill"></i> Other Qualifications</a>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-2">
							<div class="card mb-3 h-100">
								<div class="card-header px-1 py-0 bg-secondary">
									<div class="d-flex bd-highlight">
										<div class="me-auto d-flex align-items-center bd-highlight text-white py-2">PERSONAL DATA FOR SPECIFIC CV (OPTIONAL)</div>
									</div>
								</div>
								<div class="card-body">
									<div class="container overflow-hidden p-1">
										<div class="row gy-1">

											<div class="col-12">
												<?php if ($doctravel) { ?>
													<a href="/add_doctravel" class="btn btn-success w-100"><i class="bi bi-check-square-fill"></i> Travel Documents</a>
												<?php } else { ?>
													<a href="/add_doctravel" class="btn btn-danger w-100"><i class="bi bi-exclamation-square-fill"></i> Travel Documents</a>
												<?php } ?>
											</div>
											<div class="col-12">
												<?php if ($sertifikat) { ?>
													<a href="/add_sertifikat" class="btn btn-success w-100"><i class="bi bi-check-square-fill"></i> DETAILS of STCW, COC & COP</a>
												<?php } else { ?>
													<a href="/add_sertifikat" class="btn btn-danger w-100"><i class="bi bi-exclamation-square-fill"></i> DETAILS of STCW, COC & COP</a>
												<?php } ?>
											</div>
											<div class="col-12">
												<?php if ($searecord) { ?>
													<a href="/add_searecord" class="btn btn-success w-100"><i class="bi bi-check-square-fill"></i> SEA SERVICES RECORDS</a>
												<?php } else { ?>
													<a href="/add_searecord" class="btn btn-danger w-100"><i class="bi bi-exclamation-square-fill"></i> SEA SERVICES RECORDS</a>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</li>
	</ul>

</div>

<!-- MODAL -->

</div>
</div>
</div>
<?= $this->endSection(); ?>