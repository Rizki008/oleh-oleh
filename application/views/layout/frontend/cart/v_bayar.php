<div class="container">
	<!-- HERO SECTION-->
	<section class="py-5 bg-light">
		<div class="container">
			<div class="row px-4 px-lg-5 py-lg-4 align-items-center">
				<div class="col-lg-6">
					<h1 class="h2 text-uppercase mb-0">Pembayaran</h1>
				</div>
				<div class="col-lg-6 text-lg-end">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
							<li class="breadcrumb-item"><a class="text-dark" href="<?= base_url() ?>">Home</a></li>
							<li class="breadcrumb-item"><a class="text-dark" href="#">Pembayaran</a></li>
							<li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<section class="py-5">
		<!-- BILLING ADDRESS-->
		<h2 class="h5 text-uppercase mb-4">Billing details</h2>
		<div class="row">
			<div class="col-lg-8">
				<?php
				echo validation_errors('<div class="alert alert-warning alert-dismissible">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
										<h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

				//notifikasi gagal upload gambar
				if (isset($error_upload)) {
					echo '<div class="alert alert-warning alert-dismissible">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											<h5><i class="icon fas fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
				}
				echo form_open_multipart('pesanan/bayar/' . $pesanan->id_transaksi); ?>
				<form action="#">
					<div class="row gy-3">
						<div class="col-lg-6">
							<label class="form-label text-sm text-uppercase" for="firstName">Atas Nama </label>
							<input class="form-control form-control-lg" name="atas_nama" type="text" id="firstName" placeholder="Atas Nama">
						</div>
						<div class="col-lg-6">
							<label class="form-label text-sm text-uppercase" for="lastName">Nama Bank </label>
							<input class="form-control form-control-lg" name="nama_bank" type="text" id="lastName" placeholder="Nama Bank">
						</div>
						<div class="col-lg-6">
							<label class="form-label text-sm text-uppercase" for="email">No Rek </label>
							<input class="form-control form-control-lg" name="no_rek" type="number" id="email" placeholder="No Rekening">
						</div>
						<div class="col-lg-6">
							<label class="form-label text-sm text-uppercase" for="phone">Bukti Bayar</label>
							<input type="file" id="bukti_bayar" name="bukti_bayar" style="display:none" onchange="document.getElementById('filename').value=this.value">
							<input type="text" id="filename">
							<input type="button" value="Upload Bukti" onclick="document.getElementById('bukti_bayar').click()">
						</div>
						<div class="col-lg-12 form-group">
							<a class="btn btn-dark" href="<?= base_url('pesanan') ?>">Kembali</a>
							<button class="btn btn-dark" type="submit">Bayar</button>
						</div>
					</div>
				</form>
				<?php echo form_close() ?>
			</div>
			<!-- ORDER SUMMARY-->
			<div class="col-lg-4">
				<div class="card border-0 rounded-0 p-lg-4 bg-light">
					<div class="card-body">
						<h5 class="text-uppercase mb-4">Your order</h5>
						<ul class="list-unstyled mb-0">
							<li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">Total Bayar</strong><span class="text-muted small">Rp. <?= number_format($pesanan->total_bayar, 0) ?>.-</span></li>
							<li class="border-bottom my-2"></li>
							<li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">Bank</strong>
								<?php
								foreach ($rekening as $key => $value) { ?>
									<span class="text-muted small"><?= $value->nama_bank ?></span>
								<?php }
								?>
							</li>
							<li class="border-bottom my-2"></li>
							<li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small fw-bold">No Rekening</strong>
								<?php
								foreach ($rekening as $key => $value) { ?>
									<span><?= $value->no_rek ?></span>
								<?php }
								?>
							</li>
							<li class="d-flex align-items-center justify-content-between"><strong class="small fw-bold">Atas Nama</strong>
								<?php
								foreach ($rekening as $key => $value) { ?>
									<span class="text-muted small"><?= $value->atas_nama ?></span>
								<?php }
								?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>