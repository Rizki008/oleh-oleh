<!-- home page slider -->
<div class="homepage-slider">
	<!-- single home slider -->
	<div class="single-homepage-slider homepage-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Oleh-Oleh Terbaru</p>
							<h1>Khas Kuningan</h1>
							<!-- <div class="hero-btns">
									<a href="shop.html" class="boxed-btn">Fruit Collection</a>
									<a href="contact.html" class="bordered-btn">Contact Us</a>
								</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- single home slider -->
	<div class="single-homepage-slider homepage-bg-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Buka Setiap Hari</p>
							<h1>100% Buatan Orang Kuningan</h1>
							<!-- <div class="hero-btns">
								<a href="shop.html" class="boxed-btn">Visit Shop</a>
								<a href="contact.html" class="bordered-btn">Contact Us</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- single home slider -->
	<div class="single-homepage-slider homepage-bg-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-right">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Diskon Segera Datang</p>
							<h1>Diskon Produk Pada Setiap Hari Libur</h1>
							<!-- <div class="hero-btns">
								<a href="shop.html" class="boxed-btn">Visit Shop</a>
								<a href="contact.html" class="bordered-btn">Contact Us</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end home page slider -->

<!-- features list section -->
<div class="list-section pt-80 pb-80">
	<div class="container">

	</div>
</div>
<!-- end features list section -->

<!-- product section -->
<div class="product-section mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3><span class="orange-text"></span>Katalog Produk</h3>
					<p>Semua Produk Pada Toko Kami</p>
				</div>
			</div>
		</div>

		<div class="row">
			<?php if (count($produk) > 0) : ?>
				<?php foreach ($produk as $value) : ?>
					<div class="col-lg-4 col-md-6 text-center">
						<?php echo form_open('belanja/add');
						echo form_hidden('id', $value->id_produk);
						echo form_hidden('qty', 1);
						echo form_hidden('price', $value->harga - $value->diskon);
						echo form_hidden('name', $value->nama_produk);
						echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
						?>
						<div class="single-product-item">
							<div class="product-image">
								<a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>"><img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt=""></a>
							</div>
							<h3><?= $value->nama_produk ?></h3>
							<p class="product-price"><span>Berat <?= $value->berat ?> <?= $value->product_unit ?></span>Rp. <?= number_format($value->harga - $value->diskon, 0) ?> </p>
							<button type="submit" class="cart-btn btn btn-primary" data-name="<?= $value->nama_produk ?>" data-price="<?= ($value->diskon > 0) ? ($value->harga - $value->diskon) : $value->harga ?>" data-id="<?= $value->id_produk ?>"><i class="fas fa-shopping-cart"></i> masukan ke keranjang</button>
						</div>
						<?php echo form_close() ?>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- end product section -->

<!-- cart banner section -->
<section class="cart-banner pt-100 pb-100">
	<div class="container">
		<div class="row clearfix">
			<!--Image Column-->
			<div class="image-column col-lg-6">
			</div>
			<!--Content Column-->
			<div class="content-column col-lg-6">
			</div>
		</div>
	</div>
</section>
<!-- end cart banner section -->
<!-- shop banner -->
<section class="shop-banner">
	<div class="container">
		<h3>Diskom Hari Raya<br> Besar <span class="orange-text">Discount...</span></h3>
		<div class="sale-percent"><span></span>50% <span></span></div>
	</div>
</section>
<!-- end shop banner -->

<div class="product-section mt-150 mb-150">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="product-filters">
					<ul>
						<li class="active" data-filter="*">Diskon <?= $value->nama_diskon ?></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row product-lists">
			<?php foreach ($diskon as $key => $value) { ?>
				<div class="col-lg-4 col-md-6 text-center">
					<?php echo form_open('belanja/add');
					echo form_hidden('id', $value->id_produk);
					echo form_hidden('qty', 1);
					echo form_hidden('price', $value->harga - $value->diskon);
					echo form_hidden('name', $value->nama_produk);
					echo form_hidden('redirect_page', str_replace('index.php/', '', current_url())); ?>
					<div class="single-product-item">
						<div class="product-image">
							<a href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>"><img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="<?= $value->nama_produk ?>"></a>
						</div>
						<h3><?= $value->nama_produk ?></h3>
						<p class="product-price">
							<span>Harga Awal : Rp. <?= number_format($value->harga) ?></span>
							<span>Berat <?= $value->berat ?> Kg</span>
							Rp. <?= number_format($value->harga - $value->diskon, 0) ?>
						</p>
						<button type="submit" class="cart-btn btn btn-primary" data-name="<?= $value->nama_produk ?>" data-price="<?= ($value->diskon > 0) ? ($value->harga - $value->diskon) : $value->harga ?>" data-id="<?= $value->id_produk ?>"><i class="fas fa-shopping-cart"></i> masukan ke keranjang</button>
					</div>
					<?php echo form_close() ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- end products -->