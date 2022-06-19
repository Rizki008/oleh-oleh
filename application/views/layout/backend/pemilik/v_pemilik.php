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
									<th> Username </th>
									<th> Password </th>
									<!-- <th> Action </th> -->
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($pemilik as $key => $value) { ?>
									<tr class="table-info">
										<td> <?= $no++ ?> </td>
										<td> <?= $value->username ?> </td>
										<td> <?= $value->password ?> </td>
										<!-- <td> <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#update<?= $value->id_user ?>">Update</button>
											<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $value->id_user ?>">Delete</button>
										</td> -->
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
