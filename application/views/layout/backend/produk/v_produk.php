<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Data Produk </h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Tables</a></li>
					<li class="breadcrumb-item active" aria-current="page">Data Produk</li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data Produk</h4>
						<p class="card-description"> <a href="<?= base_url('produk/add') ?>" class="btn btn-primary">Tambah Produk</a></code>
						</p>
						<table class="table table-striped">
							<thead>
								<tr>
									<th> Gambar </th>
									<th> Nama Produk </th>
									<th> Nama Kategori </th>
									<th> Berat </th>
									<th> Harga </th>
									<th> Nama Diskon </th>
									<th> Diskon </th>
									<th> Stock </th>
									<th> Deskripsi </th>
									<th> Aksi </th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($produk as $key => $value) { ?>
									<tr>
										<td class="py-1">
											<img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="image" />
										</td>
										<td> <?= $value->nama_produk ?> </td>
										<td> <?= $value->nama_kategori ?> </td>
										<td> <?= $value->berat ?> <?= $value->product_unit ?> </td>
										<td> <?= number_format($value->harga, 0) ?> </td>
										<td> <?= $value->nama_diskon ?> </td>
										<td> Rp. <?= number_format($value->diskon, 0) ?> </td>
										<td><?= $value->stock ?>
											<?php if ($value->stock <= 10) { ?>
												<div class="progress">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											<?php } elseif ($value->stock >= 10 && $value->stock <= 50) { ?>
												<div class="progress">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											<?php } elseif ($value->stock >= 50) { ?>
												<div class="progress">
													<div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											<?php } ?>
										</td>
										<td> <?= $value->deskripsi ?> </td>
										<td> <a href="<?= base_url('produk/update/' . $value->id_produk) ?>" class="btn btn-warning">Update</a>
											<button class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value->id_produk ?>">Delete</button>
											<button class="btn btn-info" data-toggle="modal" data-target="#diskon<?= $value->id_produk ?>">Diskon</button>
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

	<!-- /.modal Delete -->
	<?php foreach ($produk as $key => $value) { ?>
		<div class="modal fade" id="delete<?= $value->id_produk ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Delete <?= $value->nama_produk ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<a href="<?= base_url('produk/delete/' . $value->id_produk) ?> " class="btn btn-primary">Delete</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	<!-- /.modal Delete -->

	<?php foreach ($produk as $key => $value) { ?>
		<div class="modal fade" id="diskon<?= $value->id_produk ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Diskon <?= $value->nama_produk ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php echo form_open('produk/diskon/' . $value->id_produk) ?>
					<div class="modal-body">
						<div class="from-group">
							<label for="">Nama Diskon</label>
							<input type="text" name="nama_diskon" class="form-control" required>
						</div>
						<div class="from-group">
							<label for="">Harga Diskon</label>
							<input type="text" name="diskon" class="form-control" required>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
					<?php echo form_close() ?>
				</div>
			</div>
		</div>
	<?php } ?>
