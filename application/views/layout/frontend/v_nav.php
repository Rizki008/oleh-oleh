<!-- logo -->
<div class="site-logo">
	<a href="index.html">
		<img src="assets/img/logo.png" alt="">
	</a>
</div>
<!-- logo -->

<!-- menu start -->
<nav class="main-menu">
	<?php $keranjang = $this->cart->contents();
	$jml_item = 0;
	foreach ($keranjang as $key => $value) {
		$jml_item = $jml_item + $value['qty'];
	} ?>
	<ul>
		<li class="current-list-item"><a href="#">Home</a>
			<ul class="sub-menu">
				<li><a href="index.html">Static Home</a></li>
				<li><a href="index_2.html">Slider Home</a></li>
			</ul>
		</li>
		<li><a href="about.html">About</a></li>
		<li><a href="#">Login</a>
			<ul class="sub-menu">
				<li><a href="<?= base_url('pelanggan/register') ?>">Register</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="cart.html">Cart</a></li>
				<li><a href="checkout.html">Check Out</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="shop.html">Shop</a></li>
			</ul>
		</li>
		<li><a href="news.html">News</a>
			<ul class="sub-menu">
				<li><a href="news.html">News</a></li>
				<li><a href="single-news.html">Single News</a></li>
			</ul>
		</li>
		<li><?php
			if ($this->session->userdata('username') == "") { ?>
				<a href="<?= base_url('pelanggan/register') ?>">Login</a>
			<?php } else { ?>
				<a href="#"><?= $this->session->userdata('nama_pelanggan'); ?></a>
			<?php } ?>
		</li>
		<li>
			<?php if ($this->session->userdata('username') == "") { ?>
				<a href="#">Shop</a>
			<?php } else { ?>
				<a href="shop.html">Shop</a>
				<ul class="sub-menu">
					<li><a href="<?= base_url('pesanan') ?>">Cart</a></li>
				</ul>
			<?php } ?>
		</li>
		<li>
			<div class="header-icons">
				<a class="shopping-cart" href="<?= base_url('belanja') ?>"><i class="fas fa-shopping-cart"></i>[<?= $jml_item ?>]</a>
				<?php if ($this->session->userdata('username') == "") { ?>
					<a class="logout-bar-icon" href="#"><i class="fas fa-sign-out-alt"></i></a>
				<?php } else { ?>
					<a class="logout-bar-icon" href="<?= base_url('pelanggan/logout') ?>"><i class="fas fa-sign-out-alt"></i></a>
				<?php } ?>
			</div>
		</li>
	</ul>
</nav>
<div class="mobile-menu"></div>
<!-- menu end -->
</div>
</div>
</div>
</div>
</div>
<!-- end header -->

<!-- search area -->
<div class="search-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<span class="close-btn"><i class="fas fa-window-close"></i></span>
				<div class="search-bar">
					<div class="search-bar-tablecell">
						<h3>Search For:</h3>
						<input type="text" placeholder="Keywords">
						<button type="submit">Search <i class="fas fa-search"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end search area -->
