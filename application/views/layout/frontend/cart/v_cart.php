<div class="container">
	<!-- HERO SECTION-->
	<section class="py-5 bg-light">
		<div class="container">
			<div class="row px-4 px-lg-5 py-lg-4 align-items-center">
				<div class="col-lg-6">
					<h1 class="h2 text-uppercase mb-0">Cart</h1>
				</div>
				<div class="col-lg-6 text-lg-end">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
							<li class="breadcrumb-item"><a class="text-dark" href="<?= base_url() ?>">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Cart</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<section class="py-5">
		<h2 class="h5 text-uppercase mb-4">Shopping cart</h2>
		<?php echo form_open('belanja/update'); ?>
		<div class="row">
			<div class="col-lg-8 mb-4 mb-lg-0">
				<!-- CART TABLE-->
				<div class="table-responsive mb-4">
					<table class="table text-nowrap">
						<thead class="bg-light">
							<tr>
								<th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Produk</strong></th>
								<th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Harga</strong></th>
								<th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Quantity</strong></th>
								<th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Total Harga</strong></th>
								<th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase"></strong></th>
							</tr>
						</thead>
						<tbody class="border-0">
							<?php $i = 1; ?>

							<?php $total_berat = 0;
							$total = 0;
							foreach ($this->cart->contents() as $items) {
								$produk = $this->m_home->detail_produk($items['id']);
								$berat = $items['qty'] * $produk->berat;
								$total_berat =  $total_berat + $berat;
							?>
								<tr>
									<th class="ps-0 py-3 border-light" scope="row">
										<div class="d-flex align-items-center"><a class="reset-anchor d-block animsition-link" href="detail.html"><img src="<?= base_url('assets/gambar/' . $produk->gambar) ?>" alt="<?php echo $items['name']; ?>" width="70" /></a>
											<div class="ms-3"><strong class="h6"><a class="reset-anchor animsition-link" href="detail.html"><?php echo $items['name']; ?></a></strong></div>
										</div>
									</th>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small">Rp. <?= number_format($items['price']); ?></p>
									</td>
									<td class="p-3 align-middle border-light">
										<?php echo form_input(
											array(
												'name' => $i . '[qty]',
												'value' => $items['qty'],
												'maxlength' => '3',
												'min' => '0',
												'max' => 'stock',
												'size' => '5',
												'type' => 'number',
												'class' => 'form-control'
											)
										); ?>
									</td>
									<td class="p-3 align-middle border-light">
										<p class="mb-0 small">Rp. <?= number_format($items['subtotal']); ?></p>
									</td>
									<td class="p-3 align-middle border-light"><a class="reset-anchor" href="<?= base_url('belanja/delete/') . $items['rowid'] ?>"><i class="fas fa-trash-alt small text-muted"></i></a></td>
								</tr>
								<?php $i++; ?>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<!-- CART NAV-->
				<div class="bg-light px-4 py-3">
					<div class="row align-items-center text-center">
						<div class="col-md-6 mb-3 mb-md-0 text-md-start"><a class="btn btn-link p-0 text-dark btn-sm" href="<?= base_url() ?>"><i class="fas fa-long-arrow-alt-left me-2"> </i>
								Lanjutkan Belanja
							</a></div>
						<div class="col-md-6 text-md-end"><a class="btn btn-outline-dark btn-sm" href="<?= base_url('belanja/cekout') ?>">
								Lanjutkan ke pembayaran<i class="fas fa-long-arrow-alt-right ms-2"></i></a></div>
					</div>
				</div>
			</div>
			<!-- ORDER TOTAL-->
			<div class="col-lg-4">
				<div class="card border-0 rounded-0 p-lg-4 bg-light">
					<div class="card-body">
						<h5 class="text-uppercase mb-4">Cart total</h5>
						<ul class="list-unstyled mb-0">
							<li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Subtotal</strong><span class="text-muted small">Rp. <?= number_format($this->cart->total(), 0) ?></span></li>
							<li class="border-bottom my-2"></li>
							<li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span>Rp. <?= number_format($this->cart->total(), 0) ?></span></li>
							<li>
								<form action="#">
									<div class="input-group mb-0">
										<!-- <input class="form-control" type="text" placeholder="Enter your coupon"> -->
										<button class="btn btn-dark btn-sm w-100" type="submit"> <i class="fas fa-gift me-2"></i>Perbarui Keranjang</button>
									</div>
								</form>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>