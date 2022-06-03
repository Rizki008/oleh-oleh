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
						<h4 class="card-title">Hoverable Table</h4>
						<p class="card-description"> Add class <code>.table-hover</code>
						</p>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Nama Pelanggan</th>
									<th>No Order</th>
									<th>Tanggal Order</th>
									<th>Expedisi</th>
									<th>Estimasi</th>
									<th>Biaya Pengiriman</th>
									<th>Total Bayar</th>
									<th>No Pengiriman (No Resi)</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($pesanan as $key => $value) { ?>
									<tr>
										<td><?= $value->nama_pelanggan ?></td>
										<td><?= $value->no_order ?></td>
										<td><?= $value->tgl_order ?></td>
										<td><?= $value->expedisi ?> <br> <?= $value->paket ?></td>
										<td><?= $value->estimasi ?></td>
										<td class="text-warning">Rp. <?= number_format($value->ongkir, 0) ?><i class="mdi mdi-arrow-down"></i></td>
										<td>Rp. <?= number_format($value->total_bayar, 0) ?>
											<?php if ($value->status_bayar == 0) { ?>
												<label class="badge badge-danger">Belum Bayar</label>
											<?php } else { ?>
												<label class="badge badge-warning">Belum Bayar</label>
											<?php } ?>
										</td>
										<td></td>
										<td>
											<?php if ($value->status_bayar == 1) { ?>
												<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#cek<?= $value->id_transaksi ?>">Bukti Bayar</button>
												<a href=" <?= base_url('transaksi/proses/' . $value->id_transaksi) ?>" class="btn btn-sm btn-flat btn-primary">Verifikasi</a>
											<?php } ?>
										</td>
									</tr>
								<?php } ?>
								<?php foreach ($diproses as $key => $value) { ?>
									<tr>
										<td><?= $value->nama_pelanggan ?></td>
										<td><a href="<?= base_url('transaksi/detail/' . $value->no_order) ?>"><?= $value->no_order ?></a></td>
										<td><?= $value->tgl_order ?></td>
										<td><?= $value->expedisi ?> <br> <?= $value->paket ?></td>
										<td><?= $value->estimasi ?></td>
										<td class="text-warning">Rp. <?= number_format($value->ongkir, 0) ?><i class="mdi mdi-arrow-down"></i></td>
										<td>Rp. <?= number_format($value->total_bayar, 0) ?>
											<label class="badge badge-info">Diproses</label>
										</td>
										<td></td>
										<td></td>
									</tr>
								<?php } ?>
								<?php foreach ($dikirim as $key => $value) { ?>
									<tr>
										<td><?= $value->nama_pelanggan ?></td>
										<td><?= $value->no_order ?></td>
										<td><?= $value->tgl_order ?></td>
										<td><?= $value->expedisi ?> <br> <?= $value->paket ?></td>
										<td><?= $value->estimasi ?></td>
										<td class="text-warning">Rp. <?= number_format($value->ongkir, 0) ?><i class="mdi mdi-arrow-down"></i></td>
										<td>Rp. <?= number_format($value->total_bayar, 0) ?>
											<label class="badge badge-primary">Dikirim</label>
										</td>
										<td class="text-info"><?= $value->nama_pengirim ?></td>
										<td></td>
									</tr>
								<?php } ?>
								<?php foreach ($selesai as $key => $value) { ?>
									<tr>
										<td><?= $value->nama_pelanggan ?></td>
										<td><?= $value->no_order ?></td>
										<td><?= $value->tgl_order ?></td>
										<td><?= $value->expedisi ?> <br> <?= $value->paket ?></td>
										<td><?= $value->estimasi ?></td>
										<td class="text-warning">Rp. <?= number_format($value->ongkir, 0) ?><i class="mdi mdi-arrow-down"></i></td>
										<td>Rp. <?= number_format($value->total_bayar, 0) ?>
											<label class="badge badge-success">Selesai</label>
										</td>
										<td class="text-info"><?= $value->nama_pengirim ?></td>
										<td></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Model-->
	<?php foreach ($pesanan as $key => $value) { ?>
		<div class="modal fade" id="cek<?= $value->id_transaksi ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title"><?= $value->no_order ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php echo form_open('transaksi/batal/' . $value->id_transaksi) ?>
						<table class="table">
							<tr>
								<th>Atas Nama</th>
								<th>:</th>
								<td><?= $value->atas_nama ?></td>
							</tr>
							<tr>
								<th>Alamat</th>
								<th>:</th>
								<td><?= $value->alamat ?></td>
							</tr>
							<tr>
								<th>Nama Bank</th>
								<th>:</th>
								<td><?= $value->nama_bank ?></td>
							</tr>
							<tr>
								<th>No Rekening</th>
								<th>:</th>
								<td><?= $value->no_rek ?></td>
							</tr>
							<tr>
								<th>Total Bayar</th>
								<th>:</th>
								<td><?= number_format($value->total_bayar, 0) ?></td>
							</tr>
							<tr>
								<th>Catatan</th>
								<th>:</th>
								<td><input name="catatan" class="form-control" placeholder="Catatan" required></td>
							</tr>
						</table>
						<img class="img-fluid pad" src="<?= base_url('assets/bukti_bayar/' . $value->bukti_bayar) ?>" alt="">
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Batalkan</button>
					</div>
					<?php echo form_close() ?>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->
	<?php } ?>