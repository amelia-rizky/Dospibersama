<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Rincian Hewan</h1>
            <ul class="breadcrumbs">
                <li><a href="<?php echo base_url('halaman_penjual');?>"class="nav-link">Home</a></li>
                <li class="active">Rincian Hewan</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="properties-details-section">
                    <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="<?php echo base_url(); ?>assets/img/properties/properties-1.jpg" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="1">
                                <img src="<?php echo base_url (); ?>assets/img/properties/small-properties-1.jpeg" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="<?php echo base_url (); ?>assets/img/properties/Sapi Limusin Coklat.jpg" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="4">
                                <img src="<?php echo base_url (); ?>assets/img/properties/properties-4.jpg" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="5">
                                <img src="<?php echo base_url (); ?>assets/img/properties/file_1584456174.jpg" class="img-fluid" alt="slider-properties">
                            </div>
                        </div>
                        <!-- main slider carousel nav controls -->
                        <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                            <li class="list-inline-item active">
                                <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                    <img src="<?php echo base_url (); ?>assets/img/properties/properties-1.jpg" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                                    <img src="<?php echo base_url (); ?>assets/img/properties/small-properties-1.jpeg" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                                    <img src="<?php echo base_url (); ?>assets/img/properties/Sapi Limusin Coklat.jpg" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider">
                                    <img src="<?php echo base_url (); ?>assets/img/properties/properties-4.jpg" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider">
                                    <img src="<?php echo base_url (); ?>assets/img/properties/file_1584456174.jpg" class="img-fluid" alt="properties-small">
                                </a>
                            </li>
                        </ul>
                        <div class="heading-properties-2">
                        <?php foreach($tampil as $shopdetail) {

                        ?>
                            <h3 style="margin-left: 10%;"><?php echo $shopdetail->jenis_hewan ?><span class="rent" style="margin-left: 36%;">Dijual</h3>
                            <div class="price-location"></div>
                        </div>
                    </div>

                    <!-- Advanced search start -->
                    <!-- End Beli Start -->

                    
                    <!-- Tabbing box start -->
                    <div class="tabbing tabbing-box mb-40">
                        <ul class="nav nav-tabs" id="carTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Deskripsi</a>
                                
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="6-tab" data-toggle="tab" href="#6" role="tab" aria-controls="6" aria-selected="true">Informasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true">Lokasi Hewan</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="carTabContent">
                            <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                                <div class="properties-description mb-50">
                                    <h3 class="heading-2">
                                        Sapi
                                    </h3>
                                    <p><?php echo $shopdetail->deskripsi?> </p>
                                </div>
                            </div>



                            <div class="tab-pane fade " id="6" role="tabpanel" aria-labelledby="6-tab">
                                <div class="properties-amenities mb-30">
                                    <h3 class="heading-2">Sapi Limusin</h3>
                                    
                                                <p>Sapi Limusin adalah keturunan sapi Zebu atau Boss Indiscuss. Aslinya berasal dari India kemudia masuk ke Amerika pada tahun 1849 berkembang pesat di Amerika, Di AS, sapi Brahman dikembangkan untuk diseleksi dan ditingkatkan mutu genetiknya.[1] Setelah berhasil, jenis sapi ini diekspor ke berbagai negara. Dari AS, sapi Brahman menyebar ke Australia. Di Amerika terbentuk perkumpulan pembibit American Brahman Breeder Association, sedangkan di Australia terbentuk Australian Brahman Breeder Association.[2] Sapi Brahman masuk ke Indonesia sejak zaman penjajahan Belanda.</p>
                                                <p>Ciri khas sapi Brahman adalah berpunuk besar dan berkulit longgar, gelambir dibawah leher sampai perut lebar dengan banyak lipatan-lipatan. Telinga panjang menggantung dan berujung runcing. Sapi ini adalah tipe sapi potong terbaik untuk dikembangkan.</p>
                                                <?php } ?>
                                            
                                </div>
                            </div>
                            <div class="tab-pane fade " id="5" role="tabpanel" aria-labelledby="5-tab">
                                <div class="location mb-50">
                                    <div class="map">
                                        <h3 class="heading-2">Lokasi Hewan</h3>
                                        
                                        <div id="map" class="contact-map"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <!--   start modal balasan -->

            

                    <!--   end start modal balasan -->
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">


                    <!-- Start Foreach -->

                    <?php foreach($tampil as $shopdetail) {

                    ?>

                    <!-- Recent properties start -->
                    <div class="detail">
                        <br>
                        <center><h4 class="title"><?php echo $shopdetail->nama_pemilik ?></h4></center><br>
                        <div class="location" style="margin-top: 3%;">
                            <li>
                                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-github-alt"></i>&nbsp;&nbsp; <?php echo $shopdetail->kabupaten ?>
                            </li>
                        </div><br>
                        <ul class="facilities-list clearfix">
                             <li>
                                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-github-alt"></i>&nbsp;&nbsp; <?php echo $shopdetail->nama_hewan ?>
                            </li>
                             <li>
                                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp;<?php echo $shopdetail->ukuran_hewan ?>
                            </li>
                            <li>
                                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-balance-scale"></i> <?php echo $shopdetail->berat_hewan ?>&nbsp;Kg
                            </li>
                            <li>
                                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-venus-mars"></i> <?php echo $shopdetail->jenis_kelamin ?>
                            </li>
                            <li>
                                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-cutlery"></i>&nbsp;&nbsp; <?php echo $shopdetail->nama_makanan ?>
                            </li>
                            <li>
                                &nbsp;&nbsp;&nbsp;&nbsp;<ion-icon name="color-palette" style="font-size: 17px;"></ion-icon>&nbsp; <?php echo $shopdetail->warna_hewan ?> 
                            </li>
                        </ul>
                    </div><br>




                    <!-- Beli Start -->
                     <div style="text-align: center;">
                        <center><h3 class="belirp" style="margin-bottom: 2%;">Rp&nbsp; <?php echo $shopdetail->harga_hewan ?></h3></center>
                        <button data-target="#modalConfirmWarning" data-toggle="modal" class="btn btn-success col-md">Beli Sekarang</button>
                     </div>
                    <!-- end beli sekarang -->
 

                    <br>
                    <br>


                    <!-- start hewan terbaru -->
                    <div class="sidebar-right">

                    <!-- Recent properties start -->
                    <div class="widget recent-properties">
                        <h3 class="sidebar-title">Hewan Terbaru</h3>
                        <div class="media mb-4">
                            <a class="pr-3" href="properties-grid-leftsidepenjual.html">
                                <img class="media-object" src="assets/img/properties/small-properties-1.jpg" alt="small-properties">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-grid-leftsidepenjual.html">Sapi Limousin</a>
                                </h5>
                                <div class="listing-post-meta">
                                    <a href="properties-grid-leftsidepenjual.html"><i class="fa fa-calendar"></i> Oct 27, 2018 </a> | Rp. 87.500.000
                                </div>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <a class="pr-3" href="properties-grid-leftsidepenjual.html">
                                <img class="media-object" src="assets/img/properties/small-properties-2.jpg" alt="small-properties">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-grid-leftsidepenjual.html">Sapi Bali</a>
                                </h5>
                                <div class="listing-post-meta">
                                    <a href="properties-grid-leftsidepenjual.html"><i class="fa fa-calendar"></i> Oct 27, 2018 </a> | Rp. 23.500.700
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pr-3" href="properties-grid-leftsidepenjual.html">
                                <img class="media-object" src="assets/img/properties/small-properties-3.jpg" alt="small-properties">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-grid-leftsidepenjual.html">Sapi Brahman </a>
                                </h5>
                                <div class="listing-post-meta">
                                    <a href="properties-grid-leftsidepenjual.html"><i class="fa fa-calendar"></i> Oct 27, 2018 </a> | Rp. 47.000.000
                                </div>
                            </div>
                        </div>
                    </div>


               <?php } ?>

                    <!-- End Foreach -->


                   
                    <div class="widget social-links">
                        <h3 class="sidebar-title">Media Sosial</h3>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    
                </div>
                    <!-- end hewan terbaru -->


                    <!-- strat modal peringatan -->
                            <div class="modal fade" id="modalConfirmWarning" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                              aria-hidden="true">
                              <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
                                <!--Content-->
                                <div class="modal-content text-center">

                                <!--Body-->
                                  <div class="modal-body">
                                    <i style="color: orange;" class="fa fa-warning fa-lg"></i>
                                  </div>

                                  <!--Header-->
                                  <div class="modal-header d-flex justify-content-center">
                                    <p style="font-size: 15px; color: #333;" class="heading"><strong style="font-size: 20px; color: red;">Peringatan ! !</strong> <br><br>Anda Diharuskan Untuk Login Sebagai <strong style="color: blue;">"Pembeli"</strong> Jika Ingin Melakukan Pembelian !</p>
                                  </div>

                                  

                                  <!--Footer-->
                                  <div class="modal-footer flex-center">
                                        <a type="button" class="btn  btn-outline-danger" data-dismiss="modal">Cancel</a>
                                        <a type="button" data-dismiss="modal" class="btn  btn-outline-success">Ok</a>
                                  </div>
                                </div>
                                <!--/.Content-->
                              </div>
                            </div>
                    <!-- end strat modal peringatan -->


                  
                 <!-- The Modal keluar -->
                              <div class="modal fade" id="keluar" style="top: 15%;">
                                <div class="modal-dialog modal-md">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <center><h6>Apakah Anda yakin Untuk Keluar</h6></center>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                      <a href="index-3penjual.html" class="btn btn-danger" data-dismiss="modal">Tidak</a>          
                                      <a href="index-3.html" class="btn btn-success">Iya</a>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>

            <!-- the end modal keluar -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->
