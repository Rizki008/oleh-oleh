<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p>Fresh and Organic</p>
					<h1>Check Out Product</h1>
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
			<div class="col-lg-12">
				<div class="checkout-accordion-wrap">
					<div class="accordion" id="accordionExample">
						<div class="card single-accordion">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Pesanan
									</button>
								</h5>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									<div class="billing-address-form">
										<div class="col-lg-10">
											<div class="order-details-wrap">
												<table class="order-details">
													<thead>
														<tr>
															<th>No Order</th>
															<th>Tanggal Order</th>
															<th>Total Harga</th>
															<th>Ongkir</th>
															<th>Aksi</th>
														</tr>
													</thead>
													<tbody class="order-details-body">
														<?php foreach ($belum_bayar as $key => $value) { ?>
															<tr>
																<td><?= $value->no_order ?></td>
																<td><?= $value->tgl_order ?></td>
																<td>Rp. <?= number_format($value->total_bayar, 0) ?>
																	<?php if ($value->status_bayar == 0) { ?>
																		<span class="badge badge-warning">Belum Bayar</span>
																	<?php } else { ?>
																		<span class="badge badge-success">Sudah Bayar/Menunggu Konfirmasi</span>
																	<?php } ?>
																</td>
																<td>Rp. <?= number_format($value->ongkir, 0) ?></td>
																<td><?php if ($value->status_bayar == 0) { ?>
																		<a href="<?= base_url('pesanan/bayar/' . $value->id_transaksi) ?>" class="boxed-btn">Pembayaran</a>
																	<?php } ?>
																</td>
															</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card single-accordion">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Pesanan Di proses
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									<div class="shipping-address-form">
										<div class="col-lg-10">
											<div class="order-details-wrap">
												<table class="order-details">
													<thead>
														<tr>
															<th>No Order</th>
															<th>Tanggal Order</th>
															<th>Total Bayar</th>
															<th>Ongkir</th>
														</tr>
													</thead>
													<tbody class="order-details-body">
														<?php foreach ($diproses as $key => $value) { ?>
															<tr>
																<td><?= $value->no_order ?></td>
																<td><?= $value->tgl_order ?></td>
																<td>Rp. <?= number_format($value->total_bayar, 0) ?>
																	<span class="badge badge-warning">Di proses</span>
																	<span class="badge badge-success">Pengemasan</span>
																</td>
																<td>Rp. <?= number_format($value->ongkir, 0) ?></td>
															</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card single-accordion">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Pesanan Dikirim
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									<div class="card-details">
										<div class="col-lg-10">
											<div class="order-details-wrap">
												<table class="order-details">
													<thead>
														<tr>
															<th>No Order</th>
															<th>Tanggal Order</th>
															<th>Total Harga</th>
															<th>Ongkir</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody class="order-details-body">
														<?php foreach ($dikirim as $key => $value) { ?>
															<tr>
																<td><?= $value->no_order ?></td>
																<td><?= $value->tgl_order ?></td>
																<td>Rp. <?= number_format($value->total_bayar, 0) ?>
																	<span class="badge badge-primary">Pengiriman</span>
																</td>
																<td>Rp. <?= number_format($value->ongkir, 0) ?></td>
																<td><?= $value->status_bayar ?>
																	<button class="btn btn-primary btn sm" data-toggle="modal" data-target="#selesai<?= $value->id_transaksi ?>">Diterima</button>
																</td>
															</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card single-accordion">
							<div class="card-header" id="headingFor">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFor" aria-expanded="false" aria-controls="collapseFor">
										Pesanan Selesai
									</button>
								</h5>
							</div>
							<div id="collapseFor" class="collapse" aria-labelledby="headingFor" data-parent="#accordionExample">
								<div class="card-body">
									<div class="card-details">
										<div class="col-lg-10">
											<div class="order-details-wrap">
												<table class="order-details">
													<thead>
														<tr>
															<th>No Order</th>
															<th>Tanggal Order</th>
															<th>Total Harga</th>
															<th>Ongkir</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody class="order-details-body">
														<?php foreach ($selesai as $key => $value) { ?>
															<tr>
																<td><?= $value->no_order ?></td>
																<td><?= $value->tgl_order ?></td>
																<td>Rp. <?= number_format($value->total_bayar, 0) ?>
																	<span class="badge badge-success">Selesai</span>
																</td>
																<td>Rp. <?= number_format($value->ongkir, 0) ?></td>
																<td><?= $value->status_bayar ?></td>
															</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end check out section -->
<?php foreach ($dikirim as $key => $value) { ?>
	<div class="modal fade" id="selesai<?= $value->id_transaksi ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Pesanan Diterima</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Apakah Anda Yakin Pesanan Sudah Diterima?
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
					<a href="<?= base_url('pesanan/diterima/' . $value->id_transaksi) ?>" class="btn btn-primary">Ya</a>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
<?php } ?>
<!-- logo carousel -->
<div class="logo-carousel-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="logo-carousel-inner">
					<div class="single-logo-item">
						<img src="<?= base_url() ?>frontend/assets/img/company-logos/1.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="<?= base_url() ?>frontend/assets/img/company-logos/2.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="<?= base_url() ?>frontend/assets/img/company-logos/3.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="<?= base_url() ?>frontend/assets/img/company-logos/4.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="<?= base_url() ?>frontend/assets/img/company-logos/5.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end logo carousel -->