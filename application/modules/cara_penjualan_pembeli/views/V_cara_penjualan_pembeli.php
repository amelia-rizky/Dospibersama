<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Cara Penjualan</h1>
            <ul class="breadcrumbs">
                <li><a href="<?php echo base_url('halaman_pembeli');?>"class="nav-link">Home</a></li>
                <li class="active">Cara Penjualan</p></li>
            <?php foreach ($tampil as $carapenjualanpembeli) {
            $id = $carapenjualanpembeli->id_tatacara;
            ?>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Typography 2 start -->
<div class="typography content-area-10">
    <div class="container">
       <div class="row">
           <div class="col-md-6 sd">
               <div class="card" style="background-color: #ffffff; padding: 5px; border: 1px solid black; box-shadow: 3px 3px 3px 3px rgba(38, 38, 38,.3);">
                    <div class="card-body" style="height: 850px;">
                    <center><h4 class="heading" style="color: #000000;"><?php echo $carapenjualanpembeli->judulpenjualan?> </h4></center>
                    <p><?php echo $carapenjualanpembeli->penjualan?></p>
                    <br><br><br><br>
                    </div>
                </div>
           </div>
       

       <div class="col-md-6 sd">
           <div class="card" style="background-color: #ffffff; padding: 5px; border: 1px solid black; box-shadow: 3px 3px 3px 3px rgba(38, 38, 38,.3);">
               <div class="card-body" style="height: 450px;">
                <center><h4 class="heading" style="color: #000000;"><?php echo $carapenjualanpembeli->judulsyarat?></h4></center>
                <p<?php echo $carapenjualanpembeli->syaratketentuan?></p>
              <?php } ?>
               </div>
            </div>
       </div>
  </div>
</div>
</div>
<!-- Typography 2 end -->

<!-- start gambar iklan -->
<div class="col-lg-6 col-md-6" style="margin-left: 5%;"><br>
    <div class="form-group subject">
        <img src="assets/img/avatar/sapi.png" width="600" height="600" style="margin-top: -70%; margin-left: 100%; position: absolute;">
    </div>
</div>
<!-- end gambar iklan -->