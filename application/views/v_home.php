<!--  Modal -->
<div class="modal fade" id="productView" tabindex="-1">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content overflow-hidden border-0">
			<button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="modal-body p-0">
				<div class="row align-items-stretch">
					<div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center" style="background: url(<?= base_url() ?>distribution/img/product-5.jpg)" href="img/product-5.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none" href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a></div>
					<div class="col-lg-6">
						<div class="p-4 my-md-4">
							<ul class="list-inline mb-2">
								<li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
								<li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
								<li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
								<li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
								<li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
							</ul>
							<h2 class="h4">Red digital smartwatch</h2>
							<p class="text-muted">$250</p>
							<p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam convallis.</p>
							<div class="row align-items-stretch mb-4 gx-0">
								<div class="col-sm-7">
									<div class="border d-flex align-items-center justify-content-between py-1 px-3"><span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
										<div class="quantity">
											<button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
											<input class="form-control border-0 shadow-0 p-0" type="text" value="1">
											<button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
										</div>
									</div>
								</div>
								<div class="col-sm-5"><a class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0" href="cart.html">Add to cart</a></div>
							</div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i class="far fa-heart me-2"></i>Add to wish list</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- HERO SECTION-->
<div class="container">
	<section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(<?= base_url() ?>distribution/img/ks.png)">
		<div class="container py-5">
			<div class="row px-4 px-lg-5">
				<div class="col-lg-6">
					<p class="text-muted small text-uppercase mb-2">Dapatkan Diskon Di Hari-hari Tertentu</p>
					<h1 class="h2 text-uppercase mb-3">Besar Diskon Sampai 50%</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- CATEGORIES SECTION-->
	<section class="pt-5">
		<header class="text-center">
			<p class="small text-muted small text-uppercase mb-1">Koleksi Produk</p>
			<h2 class="h5 text-uppercase mb-4">Caketgori Produk</h2>
		</header>
		<div class="row">
			<div class="col-md-4"><a class="category-item" href="#"><img class="img-fluid" src="<?= base_url() ?>distribution/img/jeniv.jpeg" alt="" /></a>
			</div>
			<div class="col-md-4"><a class="category-item mb-4" href="#"><img class="img-fluid" src="<?= base_url() ?>distribution/img/ketan.jpg" alt="" /></a><a class="category-item" href="#"><img class="img-fluid" src="<?= base_url() ?>distribution/img/ahh.jpg" alt="" /></a>
			</div>
			<div class="col-md-4"><a class="category-item" href="#"><img class="img-fluid" src="<?= base_url() ?>distribution/img/emping.jpeg" alt="" /></a>
			</div>
		</div>
	</section>
	<!-- TRENDING PRODUCTS-->
	<section class="py-5">
		<header>
			<p class="small text-muted small text-uppercase mb-1">Produk Pilihan</p>
			<h2 class="h5 text-uppercase mb-4">Produk Paling Laris</h2>
		</header>
		<div class="row">
			<?php if (count($produk) > 0) : ?>
				<?php foreach ($produk as $value) : ?>
					<!-- PRODUCT-->
					<div class="col-xl-3 col-lg-4 col-sm-6">
						<?php echo form_open('belanja/add');
						echo form_hidden('id', $value->id_produk);
						echo form_hidden('qty', 1);
						echo form_hidden('price', $value->harga - $value->diskon);
						echo form_hidden('name', $value->nama_produk);
						echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
						?>
						<div class="product text-center">
							<div class="position-relative mb-3">
								<div class="badge text-white bg-"></div><a class="d-block" href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>"><img class="img-fluid w-100" src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="<?= $value->nama_produk ?>"></a>
								<div class="product-overlay">
									<ul class="mb-0 list-inline">
										<li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>"><i class="far fa-eye"></i></a></li>
										<li class="list-inline-item m-0 p-0">
											<button type="submit" class="btn btn-sm btn-dark" data-name="<?= $value->nama_produk ?>" data-price="<?= ($value->diskon > 0) ? ($value->harga - $value->diskon) : $value->harga ?>" data-id="<?= $value->id_produk ?>">Tambah Ke keranjang</button>
											<!-- <a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a> -->
										</li>
										<!-- <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li> -->
									</ul>
								</div>
							</div>
							<h6> <a class="reset-anchor" href="<?= base_url('home/detail_produk/' . $value->id_produk) ?>"><?= $value->nama_produk ?></a></h6>
							<p class="small text-muted">Rp. <?= number_format($value->harga - $value->diskon, 0) ?> &nbsp;&nbsp;Stock : <?= $value->stock ?></p>
						</div>
						<!-- <p class="product-price"><span>Berat <?= $value->berat ?> <?= $value->product_unit ?></span>Rp. <?= number_format($value->harga - $value->diskon, 0) ?> </p> -->
						<?php echo form_close() ?>
					</div>
				<?php endforeach; ?>
			<?php else : ?>
			<?php endif; ?>
		</div>
	</section>
	<!-- SERVICES-->
	<section class="py-5 bg-light">
		<div class="container">
			<div class="row text-center gy-3">
				<div class="col-lg-6">
					<div class="d-inline-block">
						<div class="d-flex align-items-end">
							<svg class="svg-icon svg-icon-big svg-icon-light">
								<use xlink:href="#helpline-24h-1"> </use>
							</svg>
							<div class="text-start ms-3">
								<h6 class="text-uppercase mb-1">24 x 7 Pelayanan</h6>
								<p class="text-sm mb-0 text-muted">Produk Selalu Segar dan Terbaru</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="d-inline-block">
						<div class="d-flex align-items-end">
							<svg class="svg-icon svg-icon-big svg-icon-light">
								<use xlink:href="#label-tag-1"> </use>
							</svg>
							<div class="text-start ms-3">
								<h6 class="text-uppercase mb-1">Dapatkan Potongan Diskon</h6>
								<p class="text-sm mb-0 text-muted">Sampai 50%</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- NEWSLETTER-->
	<section class="py-5">
		<div class="container p-0">
			<!-- <div class="row gy-3">
				<div class="col-lg-6">
					<h5 class="text-uppercase">Let's be friends!</h5>
					<p class="text-sm text-muted mb-0">Nisi nisi tempor consequat laboris nisi.</p>
				</div>
				<div class="col-lg-6">
					<form action="#">
						<div class="input-group">
							<input class="form-control form-control-lg" type="email" placeholder="Enter your email address" aria-describedby="button-addon2">
							<button class="btn btn-dark" id="button-addon2" type="submit">Subscribe</button>
						</div>
					</form>
				</div>
			</div> -->
		</div>
	</section>
</div>