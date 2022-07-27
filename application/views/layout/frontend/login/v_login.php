<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p><? $title ?></p>
					<h1><?= $title ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end breadcrumb section -->

<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mb-5 mb-lg-0">
				<div class="form-title">
					<h2><?= $title ?></h2>
				</div>
				<div id="form_status"></div>
				<div class="contact-form">
					<?php

					echo form_open('pelanggan/login');

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

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" name="username" value="<?= set_value('username') ?>">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password" value="<?= set_value('password') ?>">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-warning" value="Submit">Masuk</button>
						<a href="<?= base_url('pelanggan/register') ?>" type="submit" class="btn btn-primary">Registrasi</a>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="contact-form-wrap">
					<div class="contact-form-box">
						<h4><i class="fas fa-map"></i> Alamat Toko</h4>
						<p>Jl. Awirarangan 01/03 <br> Kab.kuningan</p>
					</div>
					<div class="contact-form-box">
						<h4><i class="far fa-clock"></i> Jam Buka</h4>
						<p>Sening - Minggu: 8 sampai 7 malam
					</div>
					<div class="contact-form-box">
						<h4><i class="fas fa-address-book"></i> Kontak</h4>
						<p>Phone: +62 857 1281 67582 <br> Email: ipeng-oleholeh@gmail.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end contact form -->

<!-- find our location -->
<div class="find-location blue-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
			</div>
		</div>
	</div>
</div>
<!-- end find our location -->


<!-- end google map section -->