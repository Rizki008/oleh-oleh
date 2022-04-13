<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p>Fresh and Organic</p>
					<h1>Cart</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end breadcrumb section -->

<!-- cart -->
<div class="cart-section mt-150 mb-150">
	<div class="container">
		<?php echo form_open('belanja/update'); ?>
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="cart-table-wrap">
					<table class="cart-table">
						<thead class="cart-table-head">
							<tr class="table-head-row">
								<th class="product-remove"></th>
								<th class="product-image">Product Image</th>
								<th class="product-name">Name</th>
								<th class="product-price">Price</th>
								<th class="product-heavy">Berat</th>
								<th class="product-quantity">Quantity</th>
								<th class="product-total">Total</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>

							<?php $total_berat = 0;
							$total = 0;
							foreach ($this->cart->contents() as $items) {
								$produk = $this->m_home->detail_produk($items['id']);
								$berat = $items['qty'] * $produk->berat;
								$total_berat =  $total_berat + $berat;
							?>
								<tr class="table-body-row">
									<td class="product-remove"><a href="<?= base_url('belanja/delete/') . $items['rowid'] ?>"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="<?= base_url('assets/gambar/' . $produk->gambar) ?>" alt=""></td>
									<td class="product-name"><?php echo $items['name']; ?></td>
									<td class="product-heavy"><?= $berat ?> Gr</td>
									<td class="product-price">Rp. <?= number_format($items['price']); ?></td>
									<td class="product-quantity"><?php echo form_input(
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
																	); ?></td>
									<td class="product-total">Rp. <?= number_format($items['subtotal']); ?></td>
								</tr>
								<?php $i++; ?>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="total-section">
					<table class="total-table">
						<thead class="total-table-head">
							<tr class="table-total-row">
								<th>Total</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody>
							<tr class="total-data">
								<td><strong>Subtotal: </strong></td>
								<td>Rp. <?= number_format($this->cart->total(), 0) ?></td>
							</tr>
							<tr class="total-data">
								<td><strong>Berat: </strong></td>
								<td><?= $total_berat ?> Gr</td>
							</tr>
						</tbody>
					</table>
					<div class="cart-buttons">
						<button type="submit" class="boxed-btn btn btn-primary">Update Cart</button>
						<a href="<?= base_url('belanja/cekout') ?>" class="boxed-btn black">Check Out</a>
					</div>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
<!-- end cart -->

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
