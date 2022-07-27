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

					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nama Pelanggan" name="nama_pelanggan" id="nama_pelanggan">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" name="username" id="username">
					</div>
					<div class="form-group">
						<input type="telp" name="no_tlpn" class="form-control" placeholder="Phone" name="no_tlpn" id="no_tlpn">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Password" name="password" id="password">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Kode Pos" name="kode_pos" id="kode_pos">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Alamat Lengkap" name="alamat" id="alamat">
					</div>
					<!-- <div class="form-group">
						<select name="provinsi" id="provinsi" class="form-control" required>
							<option value="">---Pilih Provinsi---</option>
							<?php foreach ($provinsi as $key => $value) { ?>
								<option value="<?= $value->id_provinsi ?>" data-provinsi="<?= $value->provinsi ?>" name="provinsi"><?= $value->provinsi ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<select name="kabupaten" id="kabupaten" class="form-control" required></select>
					</div> -->
					<div class="form-group">
						<button type="submit" class="btn btn-warning" value="Submit">Registrasi</button>
						<a href="<?= base_url('pelanggan/login') ?>" class="btn btn-primary">Masuk</a>
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