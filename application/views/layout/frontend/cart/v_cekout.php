<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 text-center">
				<div class="breadcrumb-text">
					<p>Fresh and Organic</p>
					<h1>Check Out Product</h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end breadcrumb section -->

<!-- check out section -->
<div class="checkout-section mt-150 mb-150">
	<div class="container">
		<?php
		echo validation_errors('<div class="alert alert-warning alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h5><i class="icon fas fa-exclamation-triangle"></i>', '</h5></div>');

		//notifikasi gagal upload gambar
		if (isset($error_upload)) {
			echo '<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h5><i class="icon fas fa-exclamation-triangle"></i>' . $error_upload . '</h5></div>';
		}
		echo form_open('belanja/cekout');
		$no_order = date('Ymd') . strtoupper(random_string('alnum', 8)); ?>
		<div class="row">
			<div class="col-lg-8">
				<div class="checkout-accordion-wrap">
					<div class="accordion" id="accordionExample">
						<div class="card single-accordion">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Data Penerima
									</button>
								</h5>
							</div>

							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									<div class="billing-address-form">
										<form action="index.html">
											<p><input type="text" placeholder="Nama Penerima" name="nama_pelanggan" required></p>
											<p><input type="number" placeholder="No Telpon" name="no_tlpn" required></p>
											<p><input type="text" placeholder="Kode Pos" name="kode_pos" required></p>
											<p><textarea name="alamat" cols="30" rows="10" placeholder="Alamat Lengkap" required></textarea></p>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="card single-accordion">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Data Alamat Dan Ongkir
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									<div class="shipping-address-form">
										<p><label>Kecamatan</label>
											<select name="id_lokasi" id="ongkir" class="form-control">
												<option value="">---Pilih Lokasi Anda---</option>
												<?php foreach ($lokasi as $key => $value) { ?>
													<option value="<?= $value->id_lokasi ?>" data-ongkir=<?= $value->ongkir ?> data-total=<?= $this->cart->total() +  $value->ongkir ?>><?= $value->nama_lokasi ?></option>
												<?php } ?>
											</select>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="order-details-wrap">
					<?php $i = 1; ?>

					<?php $total_berat = 0;
					foreach ($this->cart->contents() as $items) {
						$produk = $this->m_home->detail_produk($items['id']);
						$berat = $items['qty'] * $produk->berat;
						$total_berat =  $total_berat + $berat;
					?>
					<?php } ?>
					<table class="order-details">
						<thead>
							<tr>
								<th>Your order Details</th>
								<th>Price</th>
							</tr>
						</thead>
						<tbody class="order-details-body">
							<tr>
								<td>Product</td>
								<td>Total</td>
							</tr>
							<tr>
								<td>Strawberry</td>
								<td>$85.00</td>
							</tr>
							<tr>
								<td>Berry</td>
								<td>$70.00</td>
							</tr>
							<tr>
								<td>Lemon</td>
								<td>$35.00</td>
							</tr>
						</tbody>
						<tbody class="checkout-details">
							<tr>
								<td>Subtotal</td>
								<td>Rp. <?php echo $this->cart->format_number($this->cart->total(), 0) ?></td>
							</tr>
							<tr>
								<td>Shipping</td>
								<td><label class="ongkir"></label></td>
							</tr>
							<tr>
								<td>Berat</td>
								<td><?= $total_berat ?> Gr</td>
							</tr>
							<tr>
								<td>Total</td>
								<td><label class="total"></label></td>
							</tr>
						</tbody>
					</table>
					<div class="col-md-12">
						<div class="cart-detail p-3 p-md-4">
							<!--simpan transaksi-->
							<input name="no_order" value="<?= $no_order ?>" hidden>
							<!-- <input name="estimasi" >-->
							<input name="ongkir" class="ongkir" hidden>
							<!--<input name="berat" value="<?= $total_berat ?>" ><br>-->
							<input name="grand_total" value="<?php echo $this->cart->total() ?>" hidden>
							<input name="total_bayar" class="total" hidden>
							<!--simpan Rinci transaksi-->
							<?php
							$i = 1;
							foreach ($this->cart->contents() as $items) {
								echo form_hidden('qty' . $i++, $items['qty']);
							}
							?>
						</div>
					</div>
					<button type="submit" class="btn btn-primary py-3 px-4">CekOut</button>
				</div>
			</div>
		</div>
		<?php
		echo form_close();
		?>
	</div>
</div>
<!-- end check out section -->