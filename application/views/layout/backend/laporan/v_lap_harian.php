<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Basic Tables </h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Tables</a></li>
					<li class="breadcrumb-item active" aria-current="page">Basic tables</li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<h4>
									<i class="fas fa-shopping-cart"></i> <?= $title ?>
									<small class="float-right">Tanggal: <?= $tanggal ?>/<?= $bulan ?>/<?= $tahun ?></small>
								</h4>
							</div>
							<!-- /.col -->
						</div>
						<!-- info row -->
						<div class="row invoice-info">
						</div>
						<!-- /.row -->

						<!-- Table row -->
						<div class="row">
							<div class="col-12 table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>No</th>
											<th>Produk</th>
											<th>No Transaksi</th>
											<th>Harga</th>
											<th>Qty</th>
											<th>Total Harga</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1;
										$grand_total = 0;
										foreach ($laporan as $key => $value) {
											$tot_harga = $value->qty * $value->harga;
											$grand_total = $grand_total + $tot_harga
										?>
											<tr>
												<td><?= $no++ ?></td>
												<td><?= $value->nama_produk ?></td>
												<td><?= $value->no_order ?></td>
												<td>Rp.<?= number_format($value->harga, 0) ?></td>
												<td><?= $value->qty ?></td>
												<td>Rp.<?= number_format($tot_harga) ?></td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
								<h3>Grand Total : Rp. <?= number_format($grand_total, 0) ?></h3>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->

						<!-- this row will not appear when printing -->
						<div class="row no-print">
							<div class="col-12">
								<button class="btn btn-default" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
							</div>
						</div>
					</div>
					<!-- /.invoice -->
				</div><!-- /.col -->
			</div>
		</div>
	</div>
