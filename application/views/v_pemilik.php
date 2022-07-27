<div class="main-panel">
	<div class="content-wrapper">
		<div class="d-xl-flex justify-content-between align-items-start">
			<h2 class="text-dark font-weight-bold mb-2">Dashboard </h2>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
					<ul class="nav nav-tabs tab-transparent" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="business-tab" data-toggle="tab" href="#business-1" role="tab" aria-selected="false">Business</a>
						</li>
					</ul>
					<div class="d-md-block d-none">
						<a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
						<a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
					</div>
				</div>
				<div class="tab-content tab-transparent-content">
					<div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
								<div class="card">
									<div class="card-body text-center">
										<h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
										<h2 class="mb-4 text-dark font-weight-bold"><?= $total_pesanan ?></h2>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
								<div class="card">
									<div class="card-body text-center">
										<h5 class="mb-2 text-dark font-weight-normal">Pelanggan</h5>
										<h2 class="mb-4 text-dark font-weight-bold"><?= $total_pelanggan ?></h2>
									</div>
								</div>
							</div>
							<div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
								<div class="card">
									<div class="card-body text-center">
										<h5 class="mb-2 text-dark font-weight-normal">Pembayaran</h5>
										<h2 class="mb-4 text-dark font-weight-bold"><?= $total_pembayaran ?></h2>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
								<div class="card">
									<div class="card-body text-center">
										<h5 class="mb-2 text-dark font-weight-normal">Produk</h5>
										<h2 class="mb-4 text-dark font-weight-bold"><?= $total_produk ?></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 grid-margin">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<?php
											foreach ($grafik as $key => $value) {
												$nama_produk[] = $value->nama_produk;
												$qty[] = $value->qty;
											}
											?>


											<canvas id="myChart" height="100"></canvas>
											<script>
												var ctx = document.getElementById('myChart');
												var myChart = new Chart(ctx, {
													type: 'bar',
													data: {
														labels: <?= json_encode($nama_produk) ?>,
														datasets: [{
															label: 'Grafik Penjualan',
															data: <?= json_encode($qty) ?>,
															backgroundColor: [
																'rgba(255, 99, 132, 0.80)',
																'rgba(54, 162, 235, 0.80)',
																'rgba(255, 206, 86, 0.80)',
																'rgba(75, 192, 192, 0.80)',
																'rgba(153, 102, 255, 0.80)',
																'rgba(255, 159, 64, 0.80)',
																'rgba(201, 76, 76, 0.3)',
																'rgba(201, 77, 77, 1)',
																'rgba(0, 140, 162, 1)',
																'rgba(158, 109, 8, 1)',
																'rgba(201, 76, 76, 0.8)',
																'rgba(0, 129, 212, 1)',
																'rgba(201, 77, 201, 1)',
																'rgba(255, 207, 207, 1)',
																'rgba(201, 77, 77, 1)',
																'rgba(128, 98, 98, 1)',
																'rgba(0, 0, 0, 1)',
																'rgba(128, 128, 128, 1)',
																'rgba(255, 99, 132, 0.80)',
																'rgba(54, 162, 235, 0.80)',
																'rgba(255, 206, 86, 0.80)',
																'rgba(75, 192, 192, 0.80)',
																'rgba(153, 102, 255, 0.80)',
																'rgba(255, 159, 64, 0.80)',
																'rgba(201, 76, 76, 0.3)',
																'rgba(201, 77, 77, 1)',
																'rgba(0, 140, 162, 1)',
																'rgba(158, 109, 8, 1)',
																'rgba(201, 76, 76, 0.8)',
																'rgba(0, 129, 212, 1)',
																'rgba(201, 77, 201, 1)',
																'rgba(255, 207, 207, 1)',
																'rgba(201, 77, 77, 1)',
																'rgba(128, 98, 98, 1)',
																'rgba(0, 0, 0, 1)',
																'rgba(128, 128, 128, 1)'
															],
															borderColor: [
																'rgba(255, 99, 132, 1)',
																'rgba(54, 162, 235, 1)',
																'rgba(255, 206, 86, 1)',
																'rgba(75, 192, 192, 1)',
																'rgba(153, 102, 255, 1)',
																'rgba(255, 159, 64, 1)',
																'rgba(201, 76, 76, 0.3)',
																'rgba(201, 77, 77, 1)',
																'rgba(0, 140, 162, 1)',
																'rgba(158, 109, 8, 1)',
																'rgba(201, 76, 76, 0.8)',
																'rgba(0, 129, 212, 1)',
																'rgba(201, 77, 201, 1)',
																'rgba(255, 207, 207, 1)',
																'rgba(201, 77, 77, 1)',
																'rgba(128, 98, 98, 1)',
																'rgba(0, 0, 0, 1)',
																'rgba(128, 128, 128, 1)',
																'rgba(255, 99, 132, 1)',
																'rgba(54, 162, 235, 1)',
																'rgba(255, 206, 86, 1)',
																'rgba(75, 192, 192, 1)',
																'rgba(153, 102, 255, 1)',
																'rgba(255, 159, 64, 1)',
																'rgba(201, 76, 76, 0.3)',
																'rgba(201, 77, 77, 1)',
																'rgba(0, 140, 162, 1)',
																'rgba(158, 109, 8, 1)',
																'rgba(201, 76, 76, 0.8)',
																'rgba(0, 129, 212, 1)',
																'rgba(201, 77, 201, 1)',
																'rgba(255, 207, 207, 1)',
																'rgba(201, 77, 77, 1)',
																'rgba(128, 98, 98, 1)',
																'rgba(0, 0, 0, 1)',
																'rgba(128, 128, 128, 1)'
															],
															fill: false,
															borderWidth: 1
														}]
													},
													options: {
														scales: {
															yAxes: [{
																ticks: {
																	beginAtZero: true
																}
															}]
														}
													}
												});
											</script>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->