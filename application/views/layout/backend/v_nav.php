<div class="container-fluid page-body-wrapper">
	<!-- partial:partials/_sidebar.html -->
	<nav class="sidebar sidebar-offcanvas" id="sidebar">
		<ul class="nav">
			<li class="nav-item nav-category">Main</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('admin') ?>">
					<span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
					<span class="menu-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
					<span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
					<span class="menu-title">Master Produk</span>
					<i class="menu-arrow"></i>
				</a>
				<div class="collapse" id="ui-basic">
					<ul class="nav flex-column sub-menu">
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('kategori') ?>">Kategori</a></li>
						<li class="nav-item"> <a class="nav-link" href="<?= base_url('produk') ?>">Produk</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('transaksi') ?>">
					<span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
					<span class="menu-title">Transaksi</span>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= base_url('laporan') ?>">
					<span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
					<span class="menu-title">Laporan</span>
				</a>
			</li>
			<li class="nav-item sidebar-user-actions">
				<div class="user-details">
					<div class="d-flex justify-content-between align-items-center">
						<div>
							<div class="d-flex align-items-center">
								<div class="sidebar-profile-img">
									<img src="<?= base_url() ?>backend/assets/images/faces/face28.png" alt="image">
								</div>
								<div class="sidebar-profile-text">
									<p class="mb-1">Henry Klein</p>
								</div>
							</div>
						</div>
						<div class="badge badge-danger">3</div>
					</div>
				</div>
			</li>
			<li class="nav-item sidebar-user-actions">
				<div class="sidebar-user-menu">
					<a href="<?= base_url('lokasi') ?>" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
						<span class="menu-title">Data Alamat</span>
					</a>
				</div>
			</li>
			<li class="nav-item sidebar-user-actions">
				<div class="sidebar-user-menu">
					<a href="<?= base_url('auth/logout_user') ?>" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
						<span class="menu-title">Log Out</span></a>
				</div>
			</li>
		</ul>
	</nav>
	<!-- partial -->
