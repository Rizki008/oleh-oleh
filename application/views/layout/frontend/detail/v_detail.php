<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p>See more Details</p>
					<h1>Single Product</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end breadcrumb section -->

<!-- single product -->
<div class="single-product mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="single-product-img">
					<img src="<?= base_url('assets/gambar/' . $produk->gambar) ?>" alt="">
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-product-content">
					<h3><?= $produk->nama_produk ?></h3>
					<p><strong>Categories: </strong><?= $produk->nama_kategori ?></p>
					<p class="single-product-pricing"><span>Harga </span> Rp. <?= number_format($produk->harga, 0) ?></p>
					<p><?= $produk->deskripsi ?></p>
					<?php echo form_open('belanja/add');
					echo form_hidden('id', $produk->id_produk);
					echo form_hidden('price', $produk->harga - $produk->diskon);
					echo form_hidden('name', $produk->nama_produk);
					echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
					?>
					<div class="single-product-form">
						<form action="index.html">
							<input type="number" id="quantity" name="qty" value="1" min="1" max="<?= $produk->stock ?>" placeholder="1">
						</form>
						<br>
						<button type="submit" class="cart-btn btn btn-primary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
						<br>

					</div>
					<?php echo form_close() ?>
					<h4>Share:</h4>
					<ul class="product-share">
						<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
						<li><a href=""><i class="fab fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end single product -->

<!-- more products -->
<div class="more-products mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3><span class="orange-text">Related</span> Products</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<?php if (count($related_products) > 0) : ?>
				<?php foreach ($related_products as $products) : ?>
					<div class="col-lg-4 col-md-6 text-center">
						<div class="single-product-item">
							<div class="product-image">
								<a href="<?= base_url('home/detail_produk/' . $products->id_produk) ?>"><img src="<?= base_url('assets/gambar/' . $products->gambar) ?>" alt=""></a>
							</div>
							<h3><?= $products->nama_produk ?></h3>
							<p class="product-price"><span>Harga </span>Rp. <?= $products->harga ?> </p>
							<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- end more products -->

<!-- logo carousel -->
<div class="logo-carousel-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="logo-carousel-inner">
					<div class="single-logo-item">
						<img src="<?= base_url() ?>frontend/assets/img/company-logos/1.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="<?= base_url() ?>frontend/assets/img/company-logos/2.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="<?= base_url() ?>frontend/assets/img/company-logos/3.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="<?= base_url() ?>frontend/assets/img/company-logos/4.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="<?= base_url() ?>frontend/assets/img/company-logos/5.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end logo carousel -->
