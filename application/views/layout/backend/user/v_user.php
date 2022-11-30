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

						<p class="card-description"> <button type="button" data-toggle="modal" data-target="#add" class="btn btn-primary">Tambah Admin</button>
						</p>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th> # </th>
									<th> Nama Admin </th>
									<th> Username </th>
									<th> Password </th>
									<th> No Telephone </th>
									<th> Kode Pos </th>
									<th> Alamat </th>
									<th> Action </th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($user as $key => $value) { ?>
									<tr class="table-info">
										<td> <?= $no++ ?> </td>
										<td> <?= $value->nama_admin ?> </td>
										<td> <?= $value->username ?> </td>
										<td> <?= $value->password ?> </td>
										<td> <?= $value->no_tlpn ?> </td>
										<td> <?= $value->kode_post ?> </td>
										<td> <?= $value->alamat ?> </td>
										<td> <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?= $value->id_user ?>">Update</button>
											<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_user ?>">Delete</button>
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
					<h4 class="modal-title">Tambah User</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					echo form_open('admin/add');
					?>
					<div class="form-group">
						<label>Nama Admin</label>
						<input type="text" name="nama_admin" class="form-control" placeholder="Nama Admin" required>
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control" placeholder="Nama User" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
					<div class="form-group">
						<label>No Telephone</label>
						<input type="number" name="no_tlpn" class="form-control" placeholder="No Telephone" required>
					</div>
					<div class="form-group">
						<label>Kode Post</label>
						<input type="number" name="kode_post" class="form-control" placeholder="Kode Post" required>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
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
	<?php foreach ($user as $key => $value) { ?>
		<div class="modal fade" id="update<?= $value->id_user ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit User</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php
						echo form_open('admin/update/' . $value->id_user);
						?>
						<div class="form-group">
							<label>Nama Admin</label>
							<input type="text" name="nama_admin" value="<?= $value->nama_admin ?>" class="form-control" placeholder="Nama Admin" required>
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" value="<?= $value->username ?>" class="form-control" placeholder="Nama User" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" value="<?= $value->password ?>" class="form-control" placeholder="Password" required>
						</div>
						<div class="form-group">
							<label>No Telphone</label>
							<input type="number" name="no_tlpn" value="<?= $value->no_tlpn ?>" class="form-control" placeholder="No Telephone" required>
						</div>
						<div class="form-group">
							<label>Kode Post</label>
							<input type="number" name="kode_post" value="<?= $value->kode_post ?>" class="form-control" placeholder="Kode Post" required>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" value="<?= $value->alamat ?>" class="form-control" placeholder="Alamat" required>
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
	<?php foreach ($user as $key => $value) { ?>
		<div class="modal fade" id="delete<?= $value->id_user ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Delete <?= $value->username ?></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h5>Apakah Anda Yakin Akan Hapus Data ini?</h5>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<a href="<?= base_url('admin/delete/' . $value->id_user) ?> " class="btn btn-primary">Delete</a>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>