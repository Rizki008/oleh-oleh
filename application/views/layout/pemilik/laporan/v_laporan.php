<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title"> Laporan Penjualan </h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Tables</a></li>
					<li class="breadcrumb-item active" aria-current="page">Laporan Penjualan</li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-lg-4 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<?php
						echo form_open('laporan/lap_harian') ?>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Tanggal</label>
									<select name="tanggal" class="form-control">
										<?php
										$mulai = 1;
										for ($i = $mulai; $i < $mulai + 31; $i++) {
											$sel = $i == date('Y') ? 'selected="selected"' : '';
											echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Bulan</label>
									<select name="bulan" class="form-control">
										<?php
										$mulai = 1;
										for ($i = $mulai; $i < $mulai + 12; $i++) {
											$sel = $i == date('Y') ? 'selected="selected"' : '';
											echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Tahun</label>
									<select name="tahun" class="form-control">
										<?php
										$mulai = date('Y') - 1;
										for ($i = $mulai; $i < $mulai + 10; $i++) {
											$sel = $i == date('Y') ? 'selected="selected"' : '';
											echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
								</div>
							</div>
						</div>
						<?php
						echo form_close() ?>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>

			<div class="col-lg-4 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<?php
						echo form_open('laporan/lap_bulanan') ?>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Bulan</label>
									<select name="bulan" class="form-control">
										<?php
										$mulai = 1;
										for ($i = $mulai; $i < $mulai + 12; $i++) {
											$sel = $i == date('Y') ? 'selected="selected"' : '';
											echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Tahun</label>
									<select name="tahun" class="form-control">
										<?php
										$mulai = date('Y') - 1;
										for ($i = $mulai; $i < $mulai + 10; $i++) {
											$sel = $i == date('Y') ? 'selected="selected"' : '';
											echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
								</div>
							</div>
						</div>
						<?php
						echo form_close() ?>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>

			<div class="col-lg-4 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<?php
						echo form_open('laporan/lap_tahunan') ?>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>Tahun</label>
									<select name="tahun" class="form-control">
										<?php
										$mulai = date('Y') - 1;
										for ($i = $mulai; $i < $mulai + 10; $i++) {
											$sel = $i == date('Y') ? 'selected="selected"' : '';
											echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-print"></i> Cetak Laporan</button>
								</div>
							</div>
						</div>
						<?php
						echo form_close() ?>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</div>
	</div>