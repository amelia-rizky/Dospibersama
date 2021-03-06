<div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Pemesanan</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <form method="GET">
                            <h4>Daftar Pemesanan 
                            <div class="option-bar clearfix">
                                <div class="sorting-options2" style="margin-left: 45%; margin-top: -3%;">
                                     <div class="row">
                                        <div class="col-sm-6" style="font-size: 13px;">
                                            <div class="container">
                                                Start Date: <input id="startDate" width="210" />
                                            </div>
                                        </div>
                                        <div class="col-md-4" style="font-size: 13px;">
                                            <div class="container">
                                                End Date: <input id="endDate" width="210" />
                                            </div>
                                        </div>
                                   </div>
                                    <script>
                                        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                                        $('#startDate').datepicker({
                                            uiLibrary: 'bootstrap4',
                                            iconsLibrary: 'fontawesome',
                                            minDate: today,
                                            maxDate: function () {
                                                return $('#endDate').val();
                                            }
                                        });
                                        $('#endDate').datepicker({
                                            uiLibrary: 'bootstrap4',
                                            iconsLibrary: 'fontawesome',
                                            minDate: function () {
                                                return $('#startDate').val();
                                            }
                                        });
                                    </script><br>

                                    <!-- End Range Date Picker -->
                                </div>
                            </div>
                            </h4>


                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <div class="comment">
                                        <div class="comment-author">
                                            <a href="#">
                                                <img src="assets/img/avatar/avatar-1.jpg" alt="comments-user">
                                            </a>
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                            <?php foreach($tampil as $pemesanan_pembeli) {

                                            ?>
                                                <h5 class="title s">Wahyu Ramadani</h5>
                                            </div>
                                            
                                            <ul>
                                                
                                                <li>Kode barang:<span> 01</span></li>
                                                <li>Nomor Order:<span> 001</span></li>
                                                <li>Jenis/Nama hewan: <?php echo $pemesanan_pembeli->nama_hewan ?>
                                                </li>
                                                <li>Tanggal Pemesanan : <span> 6 Agustus 2020</span></li>
                                                <li>Tanggal Pembelian : <span> 7 Agustus 2020</span></li>
                                                <li>Nama Penjual : <?php echo $pemesanan_pembeli->nama_pemilik ?></li>
                                                <li>Gmail : <span><a href="mailto:infogito@gmail.com"> info@themevessel.com</a> </span></li>
                                                <li>Nomor Telepon/wa Penjual : <span> <a href="tel:+79617036705">0822 3456 2345</a></span></li>
                                                <?php } ?>
                                            </ul>
                                            <div class="konfirmbayar">
                                               <a class="btn btn-success" style="color: #ffffff;" href="<?php echo base_url('konfirmasi_pembayaran'); ?>"> Pembayaran</a>
                                            </div>


                                            <div class="row row-2">
                                                <div class="col-lg-6 col-md-12" style="margin-left: 44%; margin-top: -30%;">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-12 col-pad">
                                                            <div class="category">
                                                                <div class="category_bg_box cat-2-bg">
                                                                    <div class="category-overlay">
                                                                        <div class="category-content">
                                                                            <h3 class="category-title">
                                                                                <a href="#">Limusin</a>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel-body demo-nifty-btn" style="margin-left: 80%;">
                                                <button class="btn btn-danger" style="border-radius: 15%;"><a style="color: #fff; font-size:80%;" href="<?php echo base_url('pemesanan_pembeli'); ?>" data-toggle="modal" data-target="#cancel">Cancel</a></button>
                                                <button class="btn btn-success" style="border-radius: 15%;"><a style="color: #fff; font-size:80%;" href="<?php echo base_url('faktur_pembeli'); ?>">Deal</a></button>
                                            </div>
                                        </div>
                                    </div>
                                     
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="sub-banner-2 text-center">© Dospi 2020.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard end -->



                 <!-- the end modal hapus -->

                  <!-- The Modal cancel -->
                  <div class="modal fade" id="cancel" style="top: 15%;">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                          <center><h6>Apakah Anda yakin Untuk Menggagalkan Pesanan ini??</h6></center>
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <a href="<?php echo base_url('pemesanan_pembeli'); ?>" class="btn btn-danger" data-dismiss="modal">Tidak</a>          
                          <a href="<?php echo base_url('halaman_pembeli'); ?>" class="btn btn-success">Iya</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>

                 <!-- the end modal cancel -->