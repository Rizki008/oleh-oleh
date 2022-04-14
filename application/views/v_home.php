<!-- home page slider -->
<div class="homepage-slider">
	<!-- single home slider -->
	<div class="single-homepage-slider homepage-bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Fresh & Organic</p>
							<h1>Delicious Seasonal Fruits</h1>
							<div class="hero-btns">
								<a href="shop.html" class="boxed-btn">Fruit Collection</a>
								<a href="contact.html" class="bordered-btn">Contact Us</a>
							</div>
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
							<p class="subtitle">Fresh Everyday</p>
							<h1>100% Organic Collection</h1>
							<div class="hero-btns">
								<a href="shop.html" class="boxed-btn">Visit Shop</a>
								<a href="contact.html" class="bordered-btn">Contact Us</a>
							</div>
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
							<p class="subtitle">Mega Sale Going On!</p>
							<h1>Get December Discount</h1>
							<div class="hero-btns">
								<a href="shop.html" class="boxed-btn">Visit Shop</a>
								<a href="contact.html" class="bordered-btn">Contact Us</a>
							</div>
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

		<div class="row">
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-shipping-fast"></i>
					</div>
					<div class="content">
						<h3>Free Shipping</h3>
						<p>When order over $75</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
				<div class="list-box d-flex align-items-center">
					<div class="list-icon">
						<i class="fas fa-phone-volume"></i>
					</div>
					<div class="content">
						<h3>24/7 Support</h3>
						<p>Get support all day</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="list-box d-flex justify-content-start align-items-center">
					<div class="list-icon">
						<i class="fas fa-sync"></i>
					</div>
					<div class="content">
						<h3>Refund</h3>
						<p>Get refund within 3 days!</p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- end features list section -->

<!-- product section -->
<div class="product-section mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="section-title">
					<h3><span class="orange-text">Our</span> Products</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
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
							<p class="product-price"><span>Berat <?= $value->berat ?> Kg</span>Rp. <?= number_format($value->harga - $value->diskon, 0) ?> </p>
							<button type="submit" class="cart-btn btn btn-primary" data-name="<?= $value->nama_produk ?>" data-price="<?= ($value->diskon > 0) ? ($value->harga - $value->diskon) : $value->harga ?>" data-id="<?= $value->id_produk ?>"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
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

<!-- testimonail-section -->
<div class="testimonail-section mt-150 mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 offset-lg-1 text-center">
				<div class="testimonial-sliders">
					<div class="single-testimonial-slider">
						<div class="client-avater">
							<img src="assets/img/avaters/avatar1.png" alt="">
						</div>
						<div class="client-meta">
							<h3>Saira Hakim <span>Local shop owner</span></h3>
							<p class="testimonial-body">
								" Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
							</p>
							<div class="last-icon">
								<i class="fas fa-quote-right"></i>
							</div>
						</div>
					</div>
					<div class="single-testimonial-slider">
						<div class="client-avater">
							<img src="assets/img/avaters/avatar2.png" alt="">
						</div>
						<div class="client-meta">
							<h3>David Niph <span>Local shop owner</span></h3>
							<p class="testimonial-body">
								" Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
							</p>
							<div class="last-icon">
								<i class="fas fa-quote-right"></i>
							</div>
						</div>
					</div>
					<div class="single-testimonial-slider">
						<div class="client-avater">
							<img src="assets/img/avaters/avatar3.png" alt="">
						</div>
						<div class="client-meta">
							<h3>Jacob Sikim <span>Local shop owner</span></h3>
							<p class="testimonial-body">
								" Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
							</p>
							<div class="last-icon">
								<i class="fas fa-quote-right"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end testimonail-section -->

<!-- advertisement section -->
<div class="abt-section mb-150">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<div class="abt-bg">
					<a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="abt-text">
					<p class="top-sub">Since Year 1999</p>
					<h2>We are <span class="orange-text">Fruitkha</span></h2>
					<p>Etiam vulputate ut augue vel sodales. In sollicitudin neque et massa porttitor vestibulum ac vel nisi. Vestibulum placerat eget dolor sit amet posuere. In ut dolor aliquet, aliquet sapien sed, interdum velit. Nam eu molestie lorem.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat veritatis minus, et labore minima mollitia qui ducimus.</p>
					<a href="about.html" class="boxed-btn mt-4">know more</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end advertisement section -->

<!-- shop banner -->
<section class="shop-banner">
	<div class="container">
		<h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
		<div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
		<a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
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
						<button type="submit" class="cart-btn btn btn-primary" data-name="<?= $value->nama_produk ?>" data-price="<?= ($value->diskon > 0) ? ($value->harga - $value->diskon) : $value->harga ?>" data-id="<?= $value->id_produk ?>"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
					</div>
					<?php echo form_close() ?>
				</div>
			<?php } ?>
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
