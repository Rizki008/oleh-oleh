<div class="container-fluid page-body-wrapper">
	<!-- partial:partials/_sidebar.html -->
	<nav class="sidebar sidebar-offcanvas" id="sidebar">
		<ul class="nav">
			<li class="nav-item nav-category">Master Data</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('pemilik') ?>">
					<span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
					<span class="menu-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('laporan') ?>">
					<span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
					<span class="menu-title">Laporan Penjualan</span>

					<!-- <i class="menu-arrow"></i> -->
				</a>
				<!-- <div class="collapse" id="ui-basic-dua">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan') ?>"><span class="menu-title">Laporan</span></a></li> -->
				<!-- <li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan/laporan_bulan') ?>"><span class="menu-title">Laporan Bulanan</span></a></li>
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('laporan/laporan_tahun') ?>"><span class="menu-title">Laporan Tahunan</span></a></li> -->
				<!-- </ul>
				</div> -->
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link" href="<?= base_url('pemilik/user') ?>">
					<span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
					<span class="menu-title">User</span>
				</a>
			</li> -->
			<li class="nav-item sidebar-user-actions">
				<div class="user-details">
					<div class="d-flex justify-content-between align-items-center">
						<div>
							<div class="d-flex align-items-center">
								<div class="sidebar-profile-img">
									<img src="<?= base_url() ?>backend/assets/images/faces/face28.png" alt="image">
								</div>
								<div class="sidebar-profile-text">
									<p class="mb-1"><?= $this->session->userdata('username'); ?></p>
								</div>
							</div>
						</div>
						<!-- <div class="badge badge-danger">3</div> -->
					</div>
				</div>
			</li>
			<!-- <li class="nav-item sidebar-user-actions">
				<div class="sidebar-user-menu">
					<a href="<?= base_url('ongkir') ?>" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
						<span class="menu-title">Data Alamat Ongkir</span>
					</a>
				</div>
			</li> -->
			<li class="nav-item sidebar-user-actions">
				<div class="sidebar-user-menu">
					<a href="<?= base_url('pemilik/logout_pemilik') ?>" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
						<span class="menu-title">Log Out</span></a>
				</div>
			</li>
		</ul>
	</nav>
	<!-- partial -->