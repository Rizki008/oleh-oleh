<!-- partial -->
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
			<div class="col-lg-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Provinsi</h4>
						<p class="card-description"> <button type="button" data-toggle="modal" data-target="#add" class="btn btn-primary">Add Provinsi</button>
						</p>
						<table class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Provinsi.</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($provinsi as $key => $value) { ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $value->provinsi ?></td>
										<td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?= $value->id_provinsi ?>">Update</button>
											<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_provinsi ?>">Delete</button>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Kabupaten</h4>
						<p class="card-description"> <button type="button" data-toggle="modal" data-target="#kabupaten" class="btn btn-primary">Add Kabupaten</button>
						</p>
						<table class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Provinsi.</th>
									<th>Nama Kabupaten.</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($kabupaten as $key => $value) { ?>
									<tr>
										<td><?= $no++ ?></td>
										<td><?= $value->provinsi ?></td>
										<td><?= $value->kabupaten ?></td>
										<td><button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updatekabupaten<?= $value->id_kabupaten ?>">Update</button>
											<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deletekabupaten<?= $value->id_kabupaten ?>">Delete</button>
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


	<!-- /.modal Add -->
	<div class="modal fade" id="add">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah Provisni</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('lokasi/add');
					?>

					<div class="form-group">
						<label>Nama Provinsi</label>
						<input type="text" name="provinsi" class="form-control" placeholder="Nama Provinsi" required>
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
	<?php foreach ($provinsi as $key => $value) { ?>
		<div class="modal fade" id="update<?= $value->id_provinsi ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit provinsi</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php
						echo form_open('lokasi/update/' . $value->id_provinsi);
						?>

						<div class="form-group">
							<label>Nama provinsi</label>
							<input type="text" name="provinsi" value="<?= $value->provinsi ?>" class="form-control" placeholder="Nama Provinsi" required>
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
	<?php foreach ($provinsi as $key => $value) { ?>
		<div class="modal fade" id="delete<?= $value->id_provinsi ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Delete <?= $value->nama_provinsi ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<a href="<?= base_url('lokasi/delete/' . $value->id_provinsi) ?> " class="btn btn-primary">Delete</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>


	<!-- /.modal Add -->
	<div class="modal fade" id="kabupaten">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tambah kabupaten</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('lokasi/add_kabupaten');
					?>

					<div class="form-group">
						<label>Nama Provinsi</label>
						<select name="id_provinsi" id="id_provinsi" class="form-control" required>
							<option>---Pilih Provinsi---</option>
							<?php foreach ($provinsi as $key => $value) { ?>
								<option value="<?= $value->id_provinsi ?>"><?= $value->provinsi ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Nama kabupaten</label>
						<input type="text" name="kabupaten" class="form-control" placeholder="Nama kabupaten" required>
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
	<?php foreach ($kabupaten as $key => $value) { ?>
		<div class="modal fade" id="updatekabupaten<?= $value->id_kabupaten ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit kabupaten</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php
						echo form_open('lokasi/update_kabupaten/' . $value->id_kabupaten);
						?>

						<div class="form-group">
							<select name="id_provinsi" id="id_provinsi" class="form-control">
								<option value="<?= $value->id_provinsi ?>"><?= $value->provinsi ?></option>
								<?php
								foreach ($provinsi as $key => $item) { ?>
									<option value="<?= $item->id_provinsi ?>"><?= $item->provinsi ?></option>
								<?php }
								?>
							</select>
						</div>
						<div class="form-group">
							<label>Nama kabupaten</label>
							<input type="text" name="kabupaten" value="<?= $value->kabupaten ?>" class="form-control" placeholder="Nama Kabupaten" required>
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
	<?php foreach ($kabupaten as $key => $value) { ?>
		<div class="modal fade" id="deletekabupaten<?= $value->id_kabupaten ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Delete <?= $value->kabupaten ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<a href="<?= base_url('lokasi/delete_kabupaten/' . $value->id_kabupaten) ?> " class="btn btn-primary">Delete</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
