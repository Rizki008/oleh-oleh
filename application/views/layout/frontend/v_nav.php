<?php $kategori = $this->m_home->kategori_produk(); ?>
<header class="header bg-white">
	<div class="container px-lg-3">
		<nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="<?= base_url() ?>"><span class="fw-bold text-uppercase text-dark">TOKO IPENG</span></a>
			<button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto">
					<li class="nav-item">
						<!-- Link--><a class="nav-link active" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
						<div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown">
							<?php foreach ($kategori as $key => $value) { ?>
								<a class="dropdown-item border-0 transition-link" href="<?= base_url('/home/kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?></a>
							<?php } ?>
						</div>
					</li>
					<?php if ($this->session->userdata('username') == "") { ?>
						<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesanan Saya</a>
							<div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="#">Pesanan Saya</a></div>
						</li>
					<?php } else { ?>
						<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pesanan Saya</a>
							<div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="<?= base_url('pesanan') ?>">Keranjang</a></div>
						</li>
					<?php } ?>
				</ul>
				<?php $keranjang = $this->cart->contents();
				$jml_item = 0;
				foreach ($keranjang as $key => $value) {
					$jml_item = $jml_item + $value['qty'];
				} ?>
				<ul class="navbar-nav ms-auto">
					<li class="nav-item"><a class="nav-link" href="<?= base_url('belanja') ?>"> <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal">(<?= $jml_item ?>)</small></a></li>
					<?php
					if ($this->session->userdata('username') == "") { ?>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('pelanggan/login') ?>"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
					<?php } else { ?>
						<li class="nav-item"><a class="nav-link" href="#"> <i class="fas fa-user me-1 text-gray fw-normal"></i><?= $this->session->userdata('nama_pelanggan'); ?></a></li>
					<?php } ?>
					<?php
					if ($this->session->userdata('username') == "") { ?>
					<?php } else { ?>
						<li class="nav-item"><a class="nav-link" href="<?= base_url('pelanggan/logout') ?>"> <i class="fa fa-sign-out-alt me-1 text-gray fw-normal"></i>Logout</a></li>
					<?php } ?>
				</ul>
			</div>
		</nav>
	</div>
</header>