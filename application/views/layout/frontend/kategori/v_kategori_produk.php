<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p>Kategori Produk</p>
					<!-- <h1>Shop</h1> -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end breadcrumb section -->

<!-- products -->
<div class="product-section mt-150 mb-150">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="product-filters">
					<ul>
						<li class="active" data-filter="*">Kategori Produk</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="row product-lists">
			<div class="col-lg-4 col-md-6 text-center strawberry">
				<?php if (count($produk) > 0) : ?>
					<?php foreach ($produk as  $value) : ?>
						<?php
						echo form_open('belanja/add');
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
							<p class="product-price"><span>Berat <?= $value->berat ?> Kg</span>Rp. <?= number_format($value->harga - $value->diskon, 0) ?> </p>
							<button type="submit" class="cart-btn btn btn-primary" data-name="<?= $value->nama_produk ?>" data-price="<?= ($value->diskon > 0) ? ($value->harga - $value->diskon) : $value->harga ?>" data-id="<?= $value->id_produk ?>"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
						</div>
						<?php echo form_close() ?>

					<?php endforeach; ?>
				<?php else : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<!-- end products -->

<!-- logo carousel -->
<div class="logo-carousel-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="logo-carousel-inner">
					<div class="single-logo-item">
						<img src="assets/img/company-logos/1.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="assets/img/company-logos/2.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="assets/img/company-logos/3.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="assets/img/company-logos/4.png" alt="">
					</div>
					<div class="single-logo-item">
						<img src="assets/img/company-logos/5.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end logo carousel -->