			<!-- Page Wrapper -->
            <div class="page-wrapper">
			
                <div class="content container-fluid">
					
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Selamat Datang Admin</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item active">Dashboard</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-primary">
											<i class="fe fe-users"></i>
										</span>
										<div class="dash-count">
											<i class="fa fa-arrow-up text-success"></i> 17%
										</div>
									</div>
									<div class="dash-widget-info">
										<h3>168</h3>
										<h6 class="text-muted">Pelanggan</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-success">
											<i class="fe fe-money"></i>
										</span>
										<div class="dash-count">
											<i class="fa fa-arrow-down text-danger"></i> 12%
										</div>
									</div>
									<div class="dash-widget-info">
										<h3>21587</h3>
										<h6 class="text-muted">Produk</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-danger">
											<i class="fe fe-credit-card"></i>
										</span>
										<div class="dash-count">
											<i class="fa fa-arrow-down text-danger"></i> 12%
										</div>
									</div>
									<div class="dash-widget-info">
										<h3>$56485</h3>
										<h6 class="text-muted">Penjualan</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon bg-warning">
											<i class="fe fe-folder"></i>
										</span>
										<div class="dash-count">
											<i class="fa fa-arrow-up text-success"></i> 17%
										</div>
									</div>
									<div class="dash-widget-info">
										<h3>$62523</h3>
										<h6 class="text-muted">Pendapatan</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-warning w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12 col-lg-6">
						
							<!-- Sales Chart -->
							<div class="card card-chart">
								<div class="card-header">
									<h4 class="card-title">Tinjauan Penjualan</h4>
								</div>
								<div class="card-body">
									<div id="morrisArea"></div>
								</div>
							</div>
							<!-- /Sales Chart -->
							
						</div>
						<div class="col-md-12 col-lg-6">
						
							<!-- Invoice Chart -->
							<div class="card card-chart">
								<div class="card-header">
									<h4 class="card-title">Status pemesanan</h4>
								</div>
								<div class="card-body">
									<div id="morrisLine"></div>
								</div>
							</div>
							<!-- /Invoice Chart -->
							
						</div>	
					</div>
					
					<div class="row">
						<div class="col-md-6 d-flex">
						
							<!-- Recent Orders -->
							<div class="card card-table flex-fill">
								<div class="card-header">
									<h4 class="card-title">Pesanan Terbaru</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center">
											<thead>
												<tr>
													<th>Item</th>
													<th>Tanggal</th>
													<th class="text-center">Kuantitas</th>
													<th class="text-center">Status</th>
													<th class="text-right">Harga</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-nowrap">
														<div class="font-weight-600">Sapi Brahman</div>
													</td>
													<td class="text-nowrap">19 Jan 2019</td>
													<td class="text-center">5</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Terbayar</span>
													</td>
													<td class="text-right">
														<div class="font-weight-600">Rp.20.000.000.00</div>
													</td>
												</tr>
												<tr>
													<td class="text-nowrap">
														<div class="font-weight-600">Sapi Madura</div>
													</td>
													<td class="text-nowrap">19 Jan 2019</td>
													<td class="text-center">5</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Terbayar</span>
													</td>
													<td class="text-right">
														<div class="font-weight-600">Rp.15.500.000.00</div>
													</td>
												</tr>
												<tr>
													<td class="text-nowrap">
														<div class="font-weight-600">Sapi Brahman</div>
													</td>
													<td class="text-nowrap">19 Jan 2019</td>
													<td class="text-center">5</td>
													<td class="text-center">
														<span class="badge badge-pill bg-danger inv-badge">Cancel</span>
													</td>
													<td class="text-right">
														<div class="font-weight-600">Rp.15.000.000.00</div>
													</td>
												</tr>
												<tr>
													<td class="text-nowrap">
														<div class="font-weight-600">Sapi Bali</div>
													</td>
													<td class="text-nowrap">19 Jan 2019</td>
													<td class="text-center">5</td>
													<td class="text-center">
														<span class="badge badge-pill bg-success inv-badge">Terbayar</span>
													</td>
													<td class="text-right">
														<div class="font-weight-600">Rp.27.500.000.00</div>
													</td>
												</tr>
												<tr>
													<td class="text-nowrap">
														<div class="font-weight-600">Sapi Limusin</div>
													</td>
													<td class="text-nowrap">19 Jan 2019</td>
													<td class="text-center">5</td>
													<td class="text-center">
														<span class="badge badge-pill bg-danger inv-badge">Cancel</span>
													</td>
													<td class="text-right">
														<div class="font-weight-600">Rp.86.000.000.00</div>
													</td>
												</tr>

											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- /Recent Orders -->
							
						</div>
						<div class="col-md-6 d-flex">
						
							<!-- Feed Activity -->
							<div class="card flex-fill">
								<div class="card-header">
									<h4 class="card-title">Aktivitas Pekan</h4>
								</div>
								<div class="card-body">
									<ul class="activity-feed">
										<li class="feed-item">
											<div class="feed-date">Apr 13</div>
											<span class="feed-text"><a href="profile.html">John Doe</a> menambahkan produk baru <a href="product-details.html">"Sapi Brahman"</a></span>
										</li>
										<li class="feed-item">
											<div class="feed-date">Mar 21</div>
											<span class="feed-text"><a href="profile.html">Justin Lee</a> jumlah yang diminta <a href="invoice.html">1 Ekor Sapi Limusin Berat 1 Ton</a></span>
										</li>
										<li class="feed-item">
											<div class="feed-date">Feb 2</div>
											<span class="feed-text">Pengguna baru terdaftar<a href="profile.html">"zaenal"</a></span>
										</li>
										<li class="feed-item">
											<div class="feed-date">Jan 27</div>
											<span class="feed-text"><a href="profile.html">Robert Martin</a> memberi ulasan untuk <a href="product-details.html">"Kambing Etawa"</a></span>
										</li>
										<li class="feed-item">
											<div class="feed-date">Jan 14</div>
											<span class="feed-text">Pelanggan baru terdaftar <a href="profile.html">"Sendi Dwi Saputra"</a></span>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Feed Activity -->
							
						</div>
					</div>
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->