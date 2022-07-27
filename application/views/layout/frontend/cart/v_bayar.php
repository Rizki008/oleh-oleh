<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<!-- <p>Fresh and Organic</p> -->
					<h1>Bayar Pesanan</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end breadcrumb section -->

<!-- check out section -->
<div class="checkout-section mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="checkout-accordion-wrap">
					<div class="accordion" id="accordionExample">
						<div class="card single-accordion">
							<h4>Pelanggan</h4>
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Total Bayar Rp. <?= number_format($pesanan->total_bayar, 0) ?>.-
									</button>
								</h5>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									<div class="billing-address-form">
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
										<div class="card-body">
											<div class="form-group">
												<label>Atas Nama</label>
												<input name="atas_nama" class="form-control" placeholder="Atas Nama" required>
											</div>
											<div class="form-group">
												<label>Nama Bank</label>
												<input name="nama_bank" class="form-control" placeholder="Nama Bank" required>
											</div>
											<div class="form-group">
												<label>No Rek</label>
												<input name="no_rek" class="form-control" placeholder="No Rek" required>
											</div>
											<!-- <div class="form-group">
												<label for="exampleInputFile">Bukti Bayar</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" name="bukti_bayar" class="custom-file-input" required>
														<label class="custom-file-label" for="exampleInputFile">Pilih File</label>
													</div>
												</div>
											</div> -->
											<div class="form-group">
												<label for="exampleInputFile">Bukti Bayar</label>
												<div class="input-group">
													<div class="custom-file">
														<input type="file" id="bukti_bayar" name="bukti_bayar" style="display:none" onchange="document.getElementById('filename').value=this.value">
														<input type="text" id="filename">
														<input type="button" value="Upload Bukti" onclick="document.getElementById('bukti_bayar').click()">
													</div>
												</div>
											</div>
										</div>
										<!-- /.card-body -->

										<div class="card-footer">
											<a href="<?= base_url('pesanan') ?>" class="btn btn-success">Kembali</a>
											<button type="submit" class="btn btn-primary">Bayar</button>
										</div>
										<?php echo form_close() ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<h4>Toko IPENG</h4>
				<div class="order-details-wrap">
					<table class="order-details">
						<thead>
							<tr>
								<th>Bank</th>
								<th>No Rekening</th>
								<th>Atas Nama</th>
							</tr>
						</thead>
						<tbody class="order-details-body">
							<?php
							foreach ($rekening as $key => $value) { ?>
								<tr>
									<td><?= $value->nama_bank ?></td>
									<td><?= $value->no_rek ?></td>
									<td><?= $value->atas_nama ?></td>
								</tr>
							<?php }
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end check out section -->

<!-- logo carousel -->
<div class="logo-carousel-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="logo-carousel-inner">
					<div class="single-logo-item">
						<img src="assets/img/company-logos/1.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="assets/img/company-logos/2.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="assets/img/company-logos/3.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="assets/img/company-logos/4.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="assets/img/company-logos/5.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end logo carousel -->