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
						<h4 class="card-title">Data Pemilik</h4>
						<!-- <p class="card-description"> <button type="button" data-toggle="modal" data-target="#add" class="btn btn-primary">Add User</button></p> -->
						<table class="table table-bordered">
							<thead>
								<tr>
									<th> # </th>
									<th> Nama Pemilik</th>
									<th> Username </th>
									<th> Password </th>
									<th> No Telephone </th>
									<th> Kode Pos </th>
									<th> Alamat </th>
									<!-- <th> Action </th> -->
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($pemilik as $key => $value) { ?>
									<tr class="table-info">
										<td> <?= $no++ ?> </td>
										<td> <?= $value->nama_pemilik ?> </td>
										<td> <?= $value->username ?> </td>
										<td> <?= $value->password ?> </td>
										<td> <?= $value->no_tlpn ?> </td>
										<td> <?= $value->kode_post ?> </td>
										<td> <?= $value->alamat ?> </td>
										<td>
											<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?= $value->id_pemilik ?>">Update</button>
											<!-- <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_pemilik ?>">Delete</button> -->
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

	<?php foreach ($pemilik as $key => $value) { ?>
		<div class="modal fade" id="update<?= $value->id_pemilik ?>">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Akun Pemilik</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<?php
						echo form_open('admin/update_pemilik/' . $value->id_pemilik);
						?>
						<div class="form-group">
							<label>Nama Pemilik</label>
							<input type="text" name="nama_pemilik" value="<?= $value->nama_pemilik ?>" class="form-control" placeholder="Nama Pemilik" required>

						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" value="<?= $value->username ?>" class="form-control" placeholder="Nama User" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" value="<?= $value->password ?>" class="form-control" placeholder="Password" required>
						</div>
						<div class="form-group">
							<label>No Telephone</label>
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