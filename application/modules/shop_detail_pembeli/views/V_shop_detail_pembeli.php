
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Rincian Hewan</h1>
            <ul class="breadcrumbs">
            <li><a href="<?php echo base_url('halaman_pembeli');?>"class="nav-link">Home</a></li>
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
                        <?php foreach($tampil as $shopdetail) {
                        $id = $shopdetail->id_gambar;
                        $gambar = $shopdetail->gambar;
                        ?>
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
                        
                            <h3 style="margin-left: 10%;"><?php echo $shopdetail->jenis_hewan ?> <span class="rent" style="margin-left: 36%;">Dijual</h3>
                            <div class="price-location"></div>
                        </div>
                    </div>
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
                                    <p><?php echo $shopdetail->deskripsi?></p>
                                </div>
                            </div>



                            <div class="tab-pane fade " id="6" role="tabpanel" aria-labelledby="6-tab">
                                <div class="properties-amenities mb-30">
                                    <h3 class="heading-2">Sapi Brahman</h3>
                                    
                                                <p>Sapi brahman adalah keturunan sapi Zebu atau Boss Indiscuss. Aslinya berasal dari India kemudia masuk ke Amerika pada tahun 1849 berkembang pesat di Amerika, Di AS, sapi Brahman dikembangkan untuk diseleksi dan ditingkatkan mutu genetiknya.[1] Setelah berhasil, jenis sapi ini diekspor ke berbagai negara. Dari AS, sapi Brahman menyebar ke Australia. Di Amerika terbentuk perkumpulan pembibit American Brahman Breeder Association, sedangkan di Australia terbentuk Australian Brahman Breeder Association.[2] Sapi Brahman masuk ke Indonesia sejak zaman penjajahan Belanda.</p>
                                                <p>Ciri khas sapi Brahman adalah berpunuk besar dan berkulit longgar, gelambir dibawah leher sampai perut lebar dengan banyak lipatan-lipatan. Telinga panjang menggantung dan berujung runcing. Sapi ini adalah tipe sapi potong terbaik untuk dikembangkan.</p>
                                               

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

                    <!--   end start modal balasan -->
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">

                    <!-- Start Foreach -->

                    
                    <!-- Recent properties start -->
                    <div class="detail">
                        <br>
                        <center><h4 class="title"><?php echo $shopdetail->nama_pemilik ?></h4></center><br>
                        <div class="location" style="margin-top: 3%;">
                            <!-- <a href="properties-details.html"> -->
                                &nbsp;&nbsp;&nbsp;&nbsp;<i class="flaticon-pin"></i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $shopdetail->kabupaten  ?>
                          <!--   </a> -->
                        </div><br>
                        <ul class="facilities-list clearfix">
                             <li>
                                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-github-alt"></i>&nbsp;&nbsp; <?php echo $shopdetail->nama_hewan ?>
                            </li>
                             <li>
                                &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrows-alt"></i>&nbsp;&nbsp;&nbsp; <?php echo $shopdetail->ukuran_hewan ?>
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
                        </ul><br>
                        <!-- Start Modal Chat Penjual -->
                        <div class="chatpenjual" style="margin-left: 50%;">
                            <button class="btn  btn-outline-warning" data-target="#pesanpenjual" data-toggle="modal" style="font-size: 18px;" <i class="fa fa-comments">&nbsp;Chat Penjual</i></button>
                        </div>
                        
                        <!--===================================================-->
                        <div class="modal fade" id="pesanpenjual" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #ff9900;">
                                        <h5 class="modal-title" id="ModalLabel">&nbsp;<I class="fa fa-comments"></I>&nbsp;&nbsp;Chat Disini !</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                             <div class="modal-body">
                                <form method="post" action="<?php echo base_url().'shop_detail_pembeli/pesan' ?>" enctype="multipart/form-data" >
                                  <div class="form-group">
                                    <label for="message-text" class="col-form-label">Message:</label>
                                    <input class="form-control" class="text" name="isi_pesan" placeholder="tuliskan pesanmu disini">
                                  </div>
                                </form>
                              </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Kirim Pesan</button>
                                    <button type="submit" class="btn btn-light" data-dismiss="modal">Close</button>
                                </div>
                            </div>            
                        </div>
                    </div>
                
                        <!--===================================================-->
                          <!--End Modal Chat Penjual-->
                          
                    
                    <!-- Beli Start -->
                     <div style="text-align: center;">
                            <center><h3 class="belirp" style="margin-bottom: 2%;">Rp&nbsp; <?php echo $shopdetail->harga_hewan ?></h3></center>
                            <button data-target="#belisekarang" data-toggle="modal" class="btn btn-success col-md" style="margin-top: 1%;">Beli Sekarang</button>
                            <!-- Properties details page end -->
<!--Default Bootstrap Modal-->
                    <!--===================================================-->
                    <div class="modal fade" id="belisekarang" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content lg-12">

                                <!--Modal header-->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                    <h5 class="modal-title">Checkout <span class="fa fa-check"></span></h5>
                                </div>
                                <!-- modal body -->
                                    <div class="dashboard-list">
                                            <table class="manage-table">
                                                <tbody>
                                                    <h6 style="margin-left: 66%; position: absolute; font-size: 16px;"><?php echo $shopdetail->tanggal_tambah ?></h6>
                                                    
                                                <tr class="responsive-table">
                                                    <td class="listing-photoo">
                                                        <img src="assets/img/properties/properties-1.jpg" alt="listing-photo" class="img-fluid">
                                                    </td>
                                                    
                                                    <td class="title-container">
                                                        <h2><a href="#"><?php echo $shopdetail->jenis_hewan ?></a></h2>
                                                        <h5 class="d-none d-xl-block d-lg-block d-md-block"><i class="flaticon-pin"></i><?php echo $shopdetail->kabupaten ?> </h5>
                                                        <h6 class="table-property-price"><?php echo $shopdetail->harga_hewan ?></h6>
                                                    </td> 
                                                </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <address class="address-info">
                                                        <p>No.Order&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 001</p>
                                                        <p>Code Hewan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 1</p>
                                                        <p class="strong">Harga hewan :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $shopdetail->harga_hewan ?></p>
                                                        <p>Sub Total DP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;27%</p>
                                                        <p>Total Pembayaran Dp&nbsp;&nbsp;&nbsp;: Rp. 40.500.000</p>
                                                    </address>
                                                </div>
                                <!--Modal footer-->
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-danger" type="button" style="border-radius: 15%;">Cancel</button>
                                    <button class="btn btn-success" style="border-radius: 15%;"><a href="<?php echo base_url('Pembayaran');?>" style="color: #fff;">Pesan</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===================================================-->
                      <!--End Default Bootstrap Modal-->



                     </div>

                    <!-- End Beli -->

                     <br>
                     <br>

                    <!-- start hewan terbaru di property detail -->
                    <div class="sidebar-right">

                    <!-- Recent properties start -->
                    <div class="widget recent-properties">
                        <h3 class="sidebar-title">Hewan Terbaru</h3>
                        <div class="media mb-4">
                            <a class="pr-3" href="properties-details.html">
                                <img class="media-object" src="assets/img/properties/small-properties-1.jpg" alt="small-properties">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-grid-leftsidepembeli.html">Sapi Limousin</a>
                                </h5>
                                <div class="listing-post-meta">
                                    <a href="properties-grid-leftsidepembeli.html"><i class="fa fa-calendar"></i> Oct 27, 2018 </a> | Rp. 87.500.000
                                </div>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <a class="pr-3" href="properties-grid-leftsidepembeli.html">
                                <img class="media-object" src="assets/img/properties/small-properties-2.jpg" alt="small-properties">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-grid-leftsidepembeli.html">Sapi Bali</a>
                                </h5>
                                <div class="listing-post-meta">
                                    <a href="properties-grid-leftsidepembeli.html"><i class="fa fa-calendar"></i> Oct 27, 2018 </a> | Rp. 23.500.700
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <a class="pr-3" href="properties-grid-leftsidepembeli.html">
                                <img class="media-object" src="assets/img/properties/small-properties-3.jpg" alt="small-properties">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="properties-grid-leftsidepembeli.html">Sapi Brahman</a>
                                </h5>
                                <div class="listing-post-meta">
                                    <a href="properties-grid-leftsidepembeli.html"><i class="fa fa-calendar"></i> Oct 27, 2018 </a> | Rp. 47.000.000
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                   
                    <div class="widget social-links">
                        <h3 class="sidebar-title">Media Sosial</h3>
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                    
                </div>
                 <!-- end hewan terbaru di property detail -->

                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->
