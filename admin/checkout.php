<!DOCTYPE html>
<html lang="en">

<?php 
require 'koneksi.php';
require 'component/head.php';

?>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <?php require 'component/nav.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
    <?php require 'component/side.php'; ?>
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tabel Produk</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Pelanggan</th>
                          <th>Produk</th>
                          <th>Harga Produk</th>
                          <th>Total Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql = mysqli_query($koneksi , "SELECT * FROM 211180_checkout
                        JOIN
                        211180_pelanggan
                        ON
                        211180_checkout.211180_id_pengguna = 211180_pelanggan.211180_id_pelanggan
                        JOin
                        211180_produk
                        ON
                        211180_checkout.211180_id_produk = 211180_produk.211180_id_produk
                        ");
                        while ($d = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?= $d['211180_nama_pelanggan'] ?></td>
                            <td><?= $d['211180_nama_produk'] ?></td>
                            <td><?= $d['211180_harga'] ?></td>
                            <td>Rp <?= number_format($d['211180_jumlah'], 0, ',', '.')  ;    ?></td>
                            
                           
                            <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
<?php require 'component/foot.php'; ?>
</body>

</html>

