<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Cara Pembelian</h1>
            <ul class="breadcrumbs">
                <li><a href="<?php echo base_url('halaman_pembeli');?>"class="nav-link">Home</a></li>
                <li class="active">Cara Pembelian</p></li>
            <?php foreach ($tampil as $carapembelianpembeli) {
                $id = $carapembelianpembeli->id_tatacara;
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
                    <div class="card-body" style="height: 900px;">
                        <center><h4 class="heading" style="color: #000000;" ><?php echo $carapembelianpembeli->judulpembelian?></h4></center>
                        <p><?php echo $carapembelianpembeli->pembelian?></p>
                    </div>
                </div>
           </div>
       

            <div class="col-md-6 sd">
                <div class="card" style="background-color: #ffffff; padding: 5px; border: 1px solid black; box-shadow: 3px 3px 3px 3px rgba(38, 38, 38,.3);">
                    <div class="card-body" style="height: 450px;">
                        <center><h4 class="heading" style="color: #000000;"><?php echo $carapembelianpembeli->judulsyarat?></h4></center>
                        <p><?php echo $carapembelianpembeli->syaratketentuan?></p>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro section end -->



<!-- start gambar iklan -->
<div class="col-lg-6 col-md-6" style="margin-left: 5%;"><br>
    <div class="form-group subject">
        <img src="assets/img/avatar/sapi.png" width="600" height="600" style="margin-top: -70%; margin-left: 100%; position: absolute;">
    </div>
</div>
<!-- end gambar iklan -->
