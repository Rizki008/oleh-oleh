<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
				<a class="navbar-brand brand-logo" href="<?= base_url('pemilik') ?>"><img src="<?= base_url() ?>backend/assets/images/logo.svg" alt="logo" /></a>
				<a class="navbar-brand brand-logo-mini" href="<?= base_url('pemilik') ?>"><img src="<?= base_url() ?>backend/assets/images/logo-mini.svg" alt="logo" /></a>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-stretch">
				<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
					<span class="mdi mdi-menu"></span>
				</button>
				<div class="search-field d-none d-xl-block">
				</div>
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item nav-profile dropdown">
						<a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
							<div class="nav-profile-img">
								<img src="<?= base_url() ?>backend/assets/images/faces/face28.png" alt="image">
							</div>
							<div class="nav-profile-text">
								<p class="mb-1 text-black"><?= $this->session->userdata('username') ?></p>
							</div>
						</a>
						<div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
							<div class="p-3 text-center bg-primary">
								<img class="img-avatar img-avatar48 img-avatar-thumb" src="<?= base_url() ?>backend/assets/images/faces/face28.png" alt="">
							</div>
							<div class="p-2">
								<h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
								<a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="<?= base_url('pemilik/logout_pemilik') ?>">
									<span>Log Out</span>
									<i class="mdi mdi-logout ml-1"></i>
								</a>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown">
					</li>
					<li class="nav-item dropdown">
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
					<span class="mdi mdi-menu"></span>
				</button>
			</div>
		</nav>
		<!-- partial -->
