<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Cara Penjualan</h1>
            <ul class="breadcrumbs">
                <li><a href="<?php echo base_url('halaman_penjual');?>"class="nav-link">Home</a></li>
                <li class="active">Cara Penjualan</li>
                <?php foreach ($tampil as $carapenjualanpenjual) {
            $id = $carapenjualanpenjual->id_tatacara;
            ?>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->
 <div class="typography content-area-10">
         <div class="container">
            <div class="row">
                <div class="col-md-6 sd">
                    <div class="card" style="background-color: #ffffff; padding: 5px; border: 1px solid black; box-shadow: 3px 3px 3px 3px rgba(38, 38, 38,.3);">
                        <div class="card-body" style="height: 850px;">
                            <center><h4 class="heading" style="color: #000000;"><?php echo $carapenjualanpenjual->judulpenjualan?></h4></center>
                        <p><?php echo $carapenjualanpenjual->penjualan?></p>
                         </div>
                     </div>
                </div>
            <div class="col-md-6 sd">
                <div class="card" style="background-color: #ffffff; padding: 5px; border: 1px solid black; box-shadow: 3px 3px 3px 3px rgba(38, 38, 38,.3);">
                    <div class="card-body" style="height: 450px;">
                        <center><h4 class="heading" style="color: #000000;"><?php echo $carapenjualanpenjual->judulsyarat?></h4></center>
                        <p><?php echo $carapenjualanpenjual->syaratketentuan?></p>
                    <?php } ?>
                    </div>
                 </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" style="margin-left: 5%;"><br>
    <div class="form-group subject">
        <img src="assets/img/avatar/sapi.png" width="600" height="600" style="margin-top: -70%; margin-left: 100%; position: absolute;">
    </div>
</div>
       </div>
    </div>
 </div>


