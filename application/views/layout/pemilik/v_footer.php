<!-- partial:partials/_footer.html -->
<footer class="footer">
	<div class="footer-inner-wraper">
		<div class="d-sm-flex justify-content-center justify-content-sm-between">
			<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
			<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
		</div>
	</div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?= base_url() ?>backend/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?= base_url() ?>backend/assets/vendors/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>backend/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?= base_url() ?>backend/assets/js/off-canvas.js"></script>
<script src="<?= base_url() ?>backend/assets/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>backend/assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?= base_url() ?>backend/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
<script>
	function bacaGambar(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#gambar_load').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#preview_gambar").change(function() {
		bacaGambar(this);
	});
</script>

<script>
	$(document).ready(function() {
		$.ajax({
			type: "POST",
			url: "<?= base_url('rajaongkir/provinsi') ?>",
			success: function(hasil_provinsi) {
				// console.log(hasil_provinsi);
				$("select[name=provinsi]").html(hasil_provinsi);
			}
		});
		$("select[name=provinsi]").on("change", function() {
			var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");

			$.ajax({
				type: "POST",
				url: "<?= base_url('rajaongkir/kota') ?>",
				data: 'id_provinsi=' + id_provinsi_terpilih,
				success: function(hasil_kota) {
					// console.log(hasil_kota);
					$("select[name=kota]").html(hasil_kota);
				}
			});
		});
	});
</script>
</body>

</html>