<!-- footer -->
<div class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="footer-box about-widget">
					<h2 class="widget-title">Tentang Ipeng</h2>
					<p>Toko Oleh-oleh khas kuningan, berdiri sejak tahun 1999.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="footer-box get-in-touch">
					<h2 class="widget-title">Kontak kami di:</h2>
					<ul>
						<!-- <li>34/8, East Hukupara, Gifirtok, Sadan.</li> -->
						<li>ipeng-oleholeh@gmail.com.com</li>
						<li>+62 851 2192 1827</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end footer -->

<!-- copyright -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
			</div>

		</div>
	</div>
</div>
<!-- end copyright -->

<!-- jquery -->
<script src="<?= base_url() ?>frontend/assets/js/jquery-1.11.3.min.js"></script>
<!-- bootstrap -->
<script src="<?= base_url() ?>frontend/assets/bootstrap/js/bootstrap.min.js"></script>
<!-- count down -->
<script src="<?= base_url() ?>frontend/assets/js/jquery.countdown.js"></script>
<!-- isotope -->
<script src="<?= base_url() ?>frontend/assets/js/jquery.isotope-3.0.6.min.js"></script>
<!-- waypoints -->
<script src="<?= base_url() ?>frontend/assets/js/waypoints.js"></script>
<!-- owl carousel -->
<script src="<?= base_url() ?>frontend/assets/js/owl.carousel.min.js"></script>
<!-- magnific popup -->
<script src="<?= base_url() ?>frontend/assets/js/jquery.magnific-popup.min.js"></script>
<!-- mean menu -->
<script src="<?= base_url() ?>frontend/assets/js/jquery.meanmenu.min.js"></script>
<!-- sticker js -->
<script src="<?= base_url() ?>frontend/assets/js/sticker.js"></script>
<!-- main js -->
<script src="<?= base_url() ?>frontend/assets/js/main.js"></script>

<!-- <script type="text/javascript">
	$(document).ready(function() {
		$("#provinsi").on('change', (function() {
			var id_provinsi = $(this).val();
			$.ajax({
				method: "POST",
				url: "<?php echo base_url('Pelanggan/kabupaten') ?>",
				data: 'id_provinsi=' + id_provinsi,
				async: true,
				type: 'get',
				dataType: 'json',
				success: function(data_kabupaten) {
					console.log(data_kabupaten);
					$('#kabupaten').append('<option>---Pilih Kabupaten---</option>')
					for (var i = 0; i < data_kabupaten.length; i++) {
						$('#kabupaten').append('<option value=' + data_kabupaten[i].id_kabupaten + '>' + data_kabupaten[i].kabupaten + '</option>');
					}
				}
			});
		}));
	});
</script> -->

<script>
	$(document).ready(function() {

		var quantitiy = 0;
		$('.quantity-right-plus').click(function(e) {

			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			$('#quantity').val(quantity + 1);


			// Increment

		});

		$('.quantity-left-minus').click(function(e) {
			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			// Increment
			if (quantity > 0) {
				$('#quantity').val(quantity - 1);
			}
		});

	});
</script>


<!-- SweetAlert2 -->
<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>

<script type="text/javascript">
	$(function() {
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});

		$('.swalDefaultSuccess').click(function() {
			Toast.fire({
				icon: 'success',
				title: 'Produk Berhasil Ditambahkan ke Keranjang.'
			})
		});
	});
</script>


<script>
	$(document).ready(function() {

		var quantitiy = 0;
		$('.quantity-right-plus').click(function(e) {

			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			$('#quantity').val(quantity + 1);
			$('.cart-btn').attr('data-qty', quantity + 1);

			// Increment

		});

		$('.quantity-left-minus').click(function(e) {
			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			// Increment
			if (quantity > 0) {
				$('#quantity').val(quantity - 1);
				$('.cart-btn').attr('data-qty', quantity - 1);
			}
		});

	});
</script>


<!-- SweetAlert2 -->
<script src="<?= base_url() ?>template/plugins/sweetalert2/sweetalert2.min.js"></script>

<script type="text/javascript">
	$(function() {
		const Toast = Swal.mixin({
			toast: true,
			position: 'top-end',
			showConfirmButton: false,
			timer: 3000
		});

		$('.swalDefaultSuccess').click(function() {
			Toast.fire({
				icon: 'success',
				title: 'Produk Berhasil Ditambahkan ke Keranjang.'
			})
		});
	});
</script>

<script>
	console.log = function() {}
	$("#ongkir").on('change', function() {

		$(".ongkir").html($(this).find(':selected').attr('data-ongkir'));
		$(".ongkir").val($(this).find(':selected').attr('data-ongkir'));

		$(".total").html($(this).find(':selected').attr('data-total'));
		$(".total").val($(this).find(':selected').attr('data-total'));

	});
</script>
</body>

</html>