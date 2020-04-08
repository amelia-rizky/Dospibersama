<div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Syarat Dan Ketentuan</h4></div>
            <?php foreach($tampil as $syaratketentuanpembeli) {
            $id = $syaratketentuanpembeli->id_tatacara;
            ?>
                            <div class="col-sm-12 col-md-6">
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <form method="GET">
                            <h4><?php echo $syaratketentuanpembeli->judulpembelian ?></h4>
                            <!-- Typography 2 start -->
                    <div class="typography-2 content-area-9">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12" style="margin-top: -7%;">
                                    <div class="col-md-12 sd">
                                        <p><?php echo $syaratketentuanpembeli->pembelian ?></p>
                                            <br>
                                            <br>
                                            <h5 class="heading"><?php echo $syaratketentuanpembeli->judulsyarat ?></h5>
                                            <p><?php echo $syaratketentuanpembeli->syaratketentuan ?></p>
                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Typography 2 end -->

                        </form>
                    </div>
                    <p class="sub-banner-2 text-center">© Dospi 2020.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard end -->


               