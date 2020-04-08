<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Cara pembelian dan penjualan</h1>
            <ul class="breadcrumbs">
                <li><a href="index-3.html">Home</a></li>
                <li class="active">Cara pembelian dan penjualan</li>
                <?php foreach($tampil as $tatacarapenjual) {
            $id = $tatacarapenjual->id_tatacara;
            ?>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Typography start -->
    <div class="typography content-area-10">
         <div class="container">
            <div class="row">
                <div class="col-md-6 sd">
                    <div class="card" style="background-color: #ffffff; padding: 5px; border: 1px solid black; box-shadow: 3px 3px 3px 3px rgba(38, 38, 38,.3);">
                        <div class="card-body" style="height: 850px auto;">
                            <h4 class="heading" style="color: #000000;" ><?php echo $tatacarapenjual->judulpembelian?></h4>
                            <div class="crpbl" style="font-size: 13px;">
                                <p><?php echo $tatacarapenjual->pembelian?></p>
                            </div>
                         </div>
                     </div>
                </div>
            

            <div class="col-md-6 sd">
                <div class="card" style="background-color: #ffffff; padding: 5px; border: 1px solid black; box-shadow: 3px 3px 3px 3px rgba(38, 38, 38,.3);">
                    <div class="card-body" style="height: 975px;">
                        <h4 class="heading" style="color: #000000;"><?php echo $tatacarapenjual->judulpenjualan?></h4>
                        <p><?php echo $tatacarapenjual->penjualan?></p>
                        <br><br><br><br>
                    </div>
                 </div>
            </div>


            <div class="col-md-6 sd" style="margin-left: 25%;"><br>
                <div class="card" style="background-color: #ffffff; padding: 5px; border: 1px solid black; box-shadow: 3px 3px 3px 3px rgba(38, 38, 38,.3);">
                    <div class="card-body"><br>
                        <center><h4 class="heading" style="color: #000000;"><?php echo $tatacarapenjual->judulsyarat?></h4></center>
                        <p><?php echo $tatacarapenjual->syaratketentuan?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-md-6" style="margin-left: 5%;"><br>
                <div class="form-group subject">
                    <img src="assets/img/iklan/migu.jpg" width="250" height="422" style="margin-top: -93%; margin-left: -10%;">
                </div>
            </div>
            <div class="col-lg-6 col-md-6"><br>
                <div class="form-group subject">
                    <img src="assets/img/iklan/pucuk harum.jpg" width="250" height="422" style="margin-top: -90%; margin-left: 151%; float: right; position: absolute; ">
                </div>
            </div>

       </div>
    </div>
 </div>
<!-- Typography end -->