<!doctype html>
<html class="no-js" lang="zxx">
<?php 
require 'koneksi.php';

require 'component/head.php'; ?>


<body>
<?php require 'component/nav.php'; ?>

    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Semua Produk</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!-- Latest Products Start -->
        <section class="popular-items latest-padding">
            <div class="container">
               
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                        <?php
                        $sql = mysqli_query($koneksi , "SELECT * FROM 211180_produk");
                        while ($d = mysqli_fetch_array($sql) ){
                        ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center">
                                    <div class="popular-img">
                                        <img src="admin/assets/img/<?= $d['211180_gambar'] ?>" alt="">
                                        <div class="img-cap">
                                            <a href="proses/keranjang.php?id=<?= $d['211180_id_produk'] ?>">
                                                <span>Simpan Keranjang</span>
                                            </a>
                                        </div>
                                        <div class="favorit-items">
                                            <!-- <span class="flaticon-heart"></span> -->
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="detail.php"><?= $d['211180_nama_produk'] ?></a></h3>
                                        <span><?= $d['211180_harga'] ?></span>
                                    </div>
                                </div>
                            </div>
                    <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->
        <!--? Shop Method Start-->
        <!-- Shop Method End-->
    </main>
    <?php require 'component/foot.php'; ?>
    
</body>
</html>