<div class="container">
	<!-- HERO SECTION-->
	<section class="py-5 bg-light">
		<div class="container">
			<div class="row px-4 px-lg-5 py-lg-4 align-items-center">
				<div class="col-lg-6">
					<h1 class="h2 text-uppercase mb-0">Pesanan</h1>
				</div>
				<div class="col-lg-6 text-lg-end">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
							<li class="breadcrumb-item"><a class="text-dark" href="<?= base_url() ?>">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Pesanan</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<section class="py-5">
		<h2 class="h5 text-uppercase mb-8">Pesanan</h2>
		<div class="row">
			<div class="col-lg-12 mb-8 mb-lg-0">
				<!-- CART TABLE-->
				<div class="table-responsive mb-4">
					<table class="table text-nowrap">
						<thead class="bg-light">
							<tr>
								<th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">No Order</strong></th>
								<th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Tanggal Order</strong></th>
								<th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Expedisi</strong></th>
								<th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Estimasi</strong></th>
								<th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Total Harga</strong></th>
								<th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Ongkir</strong></th>
								<th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Aksi</strong></th>
							</tr>
						</thead>
						<tbody class="border-0">
							<?php foreach ($belum_bayar as $key => $value) { ?>
								<tr>
									<th class="p-4 border-light" scope="row">
										<div class="mb-0 small"><a class="reset-anchor animsition-link" href="#"><?= $value->no_order ?></a></div>
									</th>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small"><?= $value->tgl_order ?></p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small"><?= $value->expedisi ?> <br> <?= $value->paket ?></p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small"><?= $value->estimasi ?></p>
									</td>

									<td class="p-3 align-middle border-light">
										<p class="mb-0 small">
											Rp. <?= number_format($value->total_bayar, 0) ?>
											<?php if ($value->status_bayar == 0) { ?>
												<span class="badge badge-warning">Belum Bayar</span>
											<?php } else { ?>
												<span class="badge badge-success">Sudah Bayar/Menunggu Konfirmasi</span>
											<?php } ?>
										</p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small">Rp. <?= number_format($value->ongkir, 0) ?></p>
									</td>
									<td class="p-3 align-middle border-light"><?php if ($value->status_bayar == 0) { ?>
											<a class="btn btn-outline-dark" href="<?= base_url('pesanan/bayar/' . $value->id_transaksi) ?>"><i class="fas fa-money-bill-alt small text-muted"></i></a>
										<?php } ?>
									</td>
								</tr>
							<?php } ?>
							<?php foreach ($diproses as $key => $value) { ?>
								<tr>
									<th class="p-4 border-light" scope="row">
										<div class="mb-0 small"><a class="reset-anchor animsition-link" href="#"><?= $value->no_order ?></a></div>
									</th>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small"><?= $value->tgl_order ?></p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small"><?= $value->expedisi ?> <br> <?= $value->paket ?></p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small"><?= $value->estimasi ?></p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small">
											Rp. <?= number_format($value->total_bayar, 0) ?>
											<span class="badge badge-warning">Di proses</span>
											<span class="badge badge-success">Pengemasan</span>
										</p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small">Rp. <?= number_format($value->ongkir, 0) ?></p>
									</td>
								</tr>
							<?php } ?>
							<?php foreach ($dikirim as $key => $value) { ?>
								<tr>
									<th class="p-4 border-light" scope="row">
										<div class="mb-0 small"><a class="reset-anchor animsition-link" href="#"><?= $value->no_order ?></a></div>
									</th>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small"><?= $value->tgl_order ?></p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small"><?= $value->expedisi ?> <br> <?= $value->paket ?></p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small"><?= $value->estimasi ?></p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small">
											Rp. <?= number_format($value->total_bayar, 0) ?>
											<span class="badge badge-primary">Pengiriman</span>
										</p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small">Rp. <?= number_format($value->ongkir, 0) ?></p>
									</td>
									<td><?php if ($value->status_bayar == 1) { ?>
											<p>Sudah Bayar</p>
										<?php } else { ?>
											Belum Bayar
										<?php } ?>
										<a class="btn btn-outline-dark" href="#productView<?= $value->id_transaksi ?>" data-bs-toggle="modal"><i class="fas fa-paper-plane"></i></a>
										<!-- <button class="btn btn-primary btn sm" data-toggle="modal" data-target="#selesai<?= $value->id_transaksi ?>">Diterima</button> -->
									</td>
								</tr>
							<?php } ?>
							<?php foreach ($selesai as $key => $value) { ?>
								<tr>
									<th class="p-4 border-light" scope="row">
										<div class="mb-0 small"><a class="reset-anchor animsition-link" href="#"><?= $value->no_order ?></a></div>
									</th>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small"><?= $value->tgl_order ?></p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small"><?= $value->expedisi ?> <br> <?= $value->paket ?></p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small"><?= $value->estimasi ?></p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small">
											Rp. <?= number_format($value->total_bayar, 0) ?>
											<span class="badge badge-success">Selesai</span>
										</p>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small">Rp. <?= number_format($value->ongkir, 0) ?></p>
									</td>
									<td><?php if ($value->status_bayar == 1) { ?>
											<p>Sudah Bayar</p>
										<?php } else { ?>
											Belum Bayar
										<?php } ?>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<!-- CART NAV-->
				<div class="bg-light px-4 py-3">
					<div class="row align-items-center text-center">
						<div class="col-md-6 mb-3 mb-md-0 text-md-start"><a class="btn btn-link p-0 text-dark btn-sm" href="<?= base_url() ?>"><i class="fas fa-long-arrow-alt-left me-2"> </i>Continue shopping</a></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


<!--  Modal -->
<?php foreach ($dikirim as $key => $value) { ?>
	<div class="modal fade" id="productView<?= $value->id_transaksi ?>" tabindex="-1">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content overflow-hidden border-0">
				<button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
				<div class="modal-body p-0">
					<div class="row align-items-stretch">
						<div class="col-lg-6">
							<div class="p-4 my-md-4">

								<h2 class="h4">Apakah Anda Yakin Pesanan Sudah Diterima?</h2>
								<button type="submit" class="btn btn-default" data-dismiss="modal"><i class="fa fa-backspace"></i> Tidak</button>
								<a class="btn btn-link text-dark text-decoration-none p-0" href="<?= base_url('pesanan/diterima/' . $value->id_transaksi) ?>"><i class="far fa-paper-plane me-2"></i>Iya</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>