<footer class="bg-dark text-white">
	<div class="container py-4">
		<div class="row py-5">
			<div class="col-md-4 mb-3 mb-md-0">
				<h6 class="text-uppercase mb-3">Pelayanan</h6>
				<ul class="list-unstyled mb-0">
					<li><a class="footer-link" href="#!">Bantuan &amp; +62 8578-2918-2019</a></li>
					<!-- <li><a class="footer-link" href="#!">Returns &amp; Refunds</a></li>
                            <li><a class="footer-link" href="#!">Online Stores</a></li>
                            <li><a class="footer-link" href="#!">Terms &amp; Conditions</a></li> -->
				</ul>
			</div>
			<div class="col-md-4 mb-3 mb-md-0">
				<h6 class="text-uppercase mb-3">Alamat</h6>
				<ul class="list-unstyled mb-0">
					<li><a class="footer-link" href="#!">Kuningan Jl. Siliwangi No.06</a></li>
					<!-- <li><a class="footer-link" href="#!">Available Services</a></li>
                            <li><a class="footer-link" href="#!">Latest Posts</a></li>
                            <li><a class="footer-link" href="#!">FAQs</a></li> -->
				</ul>
			</div>
			<div class="col-md-4">
				<h6 class="text-uppercase mb-3">Sosial media</h6>
				<ul class="list-unstyled mb-0">
					<li><a class="footer-link" href="#!">Twitter</a></li>
					<li><a class="footer-link" href="#!">Instagram</a></li>
					<li><a class="footer-link" href="#!">Tumblr</a></li>
					<li><a class="footer-link" href="#!">Pinterest</a></li>
				</ul>
			</div>
		</div>
		<div class="border-top pt-4" style="border-color: #1d1d1d !important">
			<div class="row">
				<div class="col-md-6 text-center text-md-start">
					<p class="small text-muted mb-0">&copy; 2022 All rights reserved.</p>
				</div>
				<div class="col-md-6 text-center text-md-end">
					<p class="small text-muted mb-0">Toko Ipeng <a class="text-white reset-anchor" href="https://bootstrapious.com/p/boutique-bootstrap-e-commerce-template">Pusat Oleh-Oleh</a></p>
					<!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- JavaScript files-->
<script src="<?= base_url() ?>distribution/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>distribution/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url() ?>distribution/vendor/nouislider/nouislider.min.js"></script>
<script src="<?= base_url() ?>distribution/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>distribution/vendor/choices.js/public/assets/scripts/choices.min.js"></script>
<script src="<?= base_url() ?>distribution/js/front.js"></script>
<script>
	// ------------------------------------------------------- //
	//   Inject SVG Sprite - 
	//   see more here 
	//   https://css-tricks.com/ajaxing-svg-sprite/
	// ------------------------------------------------------ //
	function injectSvgSprite(path) {

		var ajax = new XMLHttpRequest();
		ajax.open("GET", path, true);
		ajax.send();
		ajax.onload = function(e) {
			var div = document.createElement("div");
			div.className = 'd-none';
			div.innerHTML = ajax.responseText;
			document.body.insertBefore(div, document.body.childNodes[0]);
		}
	}
	// this is set to BootstrapTemple website as you cannot 
	// inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
	// while using file:// protocol
	// pls don't forget to change to your domain :)
	injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
</script>
<!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
</div>
</body>

</html>