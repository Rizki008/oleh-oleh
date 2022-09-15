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
										<div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
										<!-- <p class="mt-4 mb-0">Completed</p>
										<h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3> -->
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
							<div class="col-lg-12 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Line chart</h4>
										<canvas id="myChart" style="height:250px"></canvas>
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