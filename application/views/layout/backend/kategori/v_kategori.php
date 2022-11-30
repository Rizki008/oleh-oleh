<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> <?= $title ?> </h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Tables</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-lg-12 stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data Kategori</h4>
						<p class="card-description"> <button type="button" data-toggle="modal" data-target="#add" class="btn btn-primary">Tambah Kategori</button>
						</p>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th> # </th>
									<th> Nama Kategori </th>
									<th> Action </th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($kategori as $key => $value) { ?>
									<?php if ($value->nama_kategori == 'Minuman') { ?>
										<tr class="table-info">
											<td> <?= $no++ ?> </td>
											<td> <?= $value->nama_kategori ?> </td>
											<td> <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?= $value->id_kategori ?>">Update</button>
												<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_kategori ?>">Delete</button>
											</td>
										</tr>
									<?php } elseif ($value->nama_kategori == 'Makanan') { ?>
										<tr class="table-success">
											<td> <?= $no++ ?> </td>
											<td> <?= $value->nama_kategori ?> </td>
											<td> <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?= $value->id_kategori ?>">Update</button>
												<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_kategori ?>">Delete</button>
											</td>
										</tr>
									<?php } elseif ($value->nama_kategori == 'Makanan Ringan') { ?>
										<tr class="table-success">
											<td> <?= $no++ ?> </td>
											<td> <?= $value->nama_kategori ?> </td>
											<td> <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?= $value->id_kategori ?>">Update</button>
												<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_kategori ?>">Delete</button>
											</td>
										</tr>
									<?php } ?>
								<?php } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- /.modal Add -->
	<div class="modal fade" id="add">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Kategori</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('kategori/add');
					?>

					<div class="form-group">
						<label>Nama Kategori</label>
						<input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" required>
					</div>

				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				<?php
				echo form_close();
				?>
			</div>
		</div>
	</div>


	<!-- /.modal Edit -->
	<?php foreach ($kategori as $key => $value) { ?>
		<div class="modal fade" id="update<?= $value->id_kategori ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit kategori</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php
						echo form_open('kategori/update/' . $value->id_kategori);
						?>

						<div class="form-group">
							<label>Nama kategori</label>
							<input type="text" name="nama_kategori" value="<?= $value->nama_kategori ?>" class="form-control" placeholder="Nama User" required>
						</div>

					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
					<?php
					echo form_close();
					?>
				</div>
			</div>
		</div>
	<?php } ?>


	<!-- /.modal Delete -->
	<?php foreach ($kategori as $key => $value) { ?>
		<div class="modal fade" id="delete<?= $value->id_kategori ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Delete <?= $value->nama_kategori ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<a href="<?= base_url('kategori/delete/' . $value->id_kategori) ?> " class="btn btn-primary">Delete</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>