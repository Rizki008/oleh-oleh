<div class="container">
	<!-- HERO SECTION-->
	<section class="py-5 bg-light">
		<div class="container">
			<div class="row px-4 px-lg-5 py-lg-4 align-items-center">
				<div class="col-lg-6">
					<h1 class="h2 text-uppercase mb-0"><?= $title ?></h1>
				</div>
				<div class="col-lg-6 text-lg-end">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
							<li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<section class="py-5">
		<!-- BILLING ADDRESS-->
		<h2 class="h5 text-uppercase mb-4"><?= $title ?></h2>
		<div class="row">
			<div class="col-lg-8">
				<?php

				echo form_open('pelanggan/register');

				echo validation_errors('<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i> Coba Lagi</h5>', '</div>');

				if (
					$this->session->flashdata('pesan')
				) {
					echo '<div class="alert alert-success alert-dismissible"> 
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-check"></i>Sukses</h5>';
					echo
					$this->session->flashdata('pesan');
					echo '</div>';
				}
				?>
				<form action="#">
					<div class="row gy-3">

						<div class="col-lg-6">
							<label class="form-label text-sm text-uppercase" for="firstName">Nama Pelanggan </label>
							<input class="form-control form-control-lg" type="text" id="nama_pelanggan" name="nama_pelanggan" placeholder="Enter your Name">
						</div>
						<div class="col-lg-6">
							<label class="form-label text-sm text-uppercase" for="firstName">Username </label>
							<input class="form-control form-control-lg" type="text" name="username" id="username" placeholder="Enter your Username">
						</div>
						<div class="col-lg-6">
							<label class="form-label text-sm text-uppercase" for="firstName">No Telphone </label>
							<input class="form-control form-control-lg" type="telp" name="no_tlpn" id="no_tlpn" placeholder="Enter your Telephone">
						</div>
						<div class="col-lg-6">
							<label class="form-label text-sm text-uppercase" for="firstName">Kode Pos </label>
							<input class="form-control form-control-lg" type="text" name="kode_pos" id="kode_pos" placeholder="Enter your Zip/pos">
						</div>
						<div class="col-lg-6">
							<label class="form-label text-sm text-uppercase" for="firstName">Alamat </label>
							<input class="form-control form-control-lg" type="text" name="alamat" id="alamat" placeholder="Enter your Country">
						</div>
						<div class="col-lg-6">
							<label class="form-label text-sm text-uppercase" for="lastName">Password </label>
							<input class="form-control form-control-lg" type="password" id="password" name="password" value="<?= set_value('password') ?>" placeholder="Enter your Password">
						</div>
						<div class="col-lg-12 form-group">
							<a href="<?= base_url('pelanggan/login') ?>" type="submit" class="btn btn-primary">Masuk</a>
							<button class="btn btn-dark" type="submit">Registrasi</button>
						</div>
					</div>
				</form>
				<?php echo form_close() ?>
			</div>

		</div>
	</section>
</div>