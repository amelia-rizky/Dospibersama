	<!-- Page Wrapper -->
			<div class="page-wrapper">
                <div class="content container-fluid">

				<!-- Page Header -->
					<div class="page-header">
						<div class="row align-items-center">
							<div class="col">
								<h3 class="page-title">Pelanggan</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url('index_admin');?>">Dashboard</a></li>
									<li class="breadcrumb-item active">Pelanggan</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<div class="row">
						<div class="col-sm-12">
							<div class="card card-table">
								<div class="card-header">
									<h4 class="card-title">Daftar Pengguna</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table table-hover table-center">
										<?php 
											foreach ($tampil as $rey) {
											$id_datahewan = $rey->id_datahewan;

										?>
											<thead>
												<tr>
													<th>Username</th>
													<th>Email</th>
													<th>Sandi</th>
													<th>Status</th>
													<th>Tindakan</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Adelia</td>
													<td><a href="#">adeliaretno@gmail.com</a></td>
													<td>adelia</td>
													<td>Pembeli</td>
													<td class="action">
														<a data-toggle="modal" data-target="#edit<?php echo $rey->id_datahewan ?>" style=""><i class="fa fa-pencil"></i> Edit</a>
														<a data-toggle="modal" data-target="#hapus<?php echo $rey->id_datahewan ?>" style=""><i class="fa fa-remove" ></i> Hapus</a>
													</td>
												</tr>
												<tr>
													<td>Amel</td>
													<td><a href="#">amelretno@gmail.com</a></td>
													<td>Amel</td>
													<td>Pembeli</td>
													<td class="action">
														<a data-toggle="modal" data-target="#edit<?php echo $rey->id_datahewan ?>" style=""><i class="fa fa-pencil"></i> Edit</a>
														<a data-toggle="modal" data-target="#hapus<?php echo $rey->id_datahewan ?>" style=""><i class="fa fa-remove" ></i> Hapus</a>
													</td>
												</tr>
												<tr>
													<td>Febry</td>
													<td><a href="#">febryretno@gmail.com</a></td>
													<td>Febry</td>
													<td>Pembeli</td>
													<td class="action">
														<a data-toggle="modal" data-target="#edit<?php echo $rey->id_datahewan ?>" style=""><i class="fa fa-pencil"></i> Edit</a>
														<a data-toggle="modal" data-target="#hapus<?php echo $rey->id_datahewan ?>" style=""><i class="fa fa-remove" ></i> Hapus</a>
													</td>
												</tr>
												<tr>
													<td>Binti</td>
													<td><a href="#">bintiretno@gmail.com</a></td>
													<td>Binti</td>
													<td>Pembeli</td>
													<td class="action">
														<a data-toggle="modal" data-target="#edit<?php echo $rey->id_datahewan ?>" style=""><i class="fa fa-pencil"></i> Edit</a>
														<a data-toggle="modal" data-target="#hapus<?php echo $rey->id_datahewan ?>" style=""><i class="fa fa-remove" ></i> Hapus</a>
													</td>
												</tr>
												<tr>
													<td>Endah</td>
													<td><a href="#">endahretno@gmail.com</a></td>
													<td>Endah</td>
													<td>Pembeli</td>
													<td class="action">
														<a data-toggle="modal" data-target="#edit<?php echo $rey->id_datahewan ?>" style=""><i class="fa fa-pencil"></i> Edit</a>
														<a data-toggle="modal" data-target="#hapus<?php echo $rey->id_datahewan ?>" style=""><i class="fa fa-remove" ></i> Hapus</a>
													</td>
												</tr>
												<!-- <tr>
													<td>#CUS0006</td>
													<td><a href="#">Gutmann Inc</a></td>
													<td>Keith Williams</td>
													<td>keithwilliams@example.com</td>
													<td>Rp.200.000.000</td>
												</tr>
												<tr>
													<td>#CUS0007</td>
													<td><a href="#">Corkery Ltd</a></td>
													<td>Thomas Norwood</td>
													<td>thomasnorwood@example.com</td>
													<td>Rp. 180.000.000</td>
												</tr>
												<tr>
													<td>#CUS0008</td>
													<td><a href="#">Cartwright LLC</a></td>
													<td>Jason Dimartino</td>
													<td>jasondimartino@example.com</td>
													<td>Rp. 90.000.000</td>
												</tr> -->
											</tbody>
									
										
								<!-- The Modal hapus -->
								<div class="modal fade" id="hapus<?php echo $rey->id_datahewan ?>" style="top: 15%;">
								<div class="modal-dialog modal-md">
								<div class="modal-content">
										
								<!-- Modal Header -->
								<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
											
								<!-- Modal body -->
								<div class="modal-body">
								<center><h6>Apakah Anda yakin untuk menghapus data ini?</h6></center>
								</div>
											
								<!-- Modal footer -->
								<div class="modal-footer">
								<a href="" class="btn btn-danger" data-dismiss="modal">Tidak</a>          
								<a href="" class="btn btn-success"  href="<?php echo $rey->id_datahewan ?>">Iya</a>
								</div>
								
							</div>
						</div>
						<?php } ?> 	
						</table>
					</div>
				</div>
			</div>					
		</div>			
		</div>
		<!-- /Page Wrapper -->