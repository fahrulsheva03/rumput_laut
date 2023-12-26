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
                  <a href="tabel/produk/tambah.php">
                      <button type="button" class="btn btn-info btn-rounded btn-fw">Tambah Data</button>
                  </a>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Deskripsi</th>
                          <th>Harga</th>
                          <th>Stok</th>
                          <th>Gambar</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $sql = mysqli_query($koneksi , "SELECT * FROM 211180_produk");
                        while ($d = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?= $d['211180_nama_produk'] ?></td>
                            <td><?= $d['211180_deskripsi'] ?></td>
                            <td><?= $d['211180_harga'] ?></td>
                            <td><?= $d['211180_stok'] ?></td>
                            <td> <img src="assets/img/<?= $d['211180_gambar'] ?>" alt=""></td>
                            <td>
                                <a href="tabel/produk/update.php?id=<?=  $d['211180_id_produk'] ?>">
                                    <label class="badge badge-warning">Update</label>
                                </a>
                                <a href="tabel/produk/hapus.php?id=<?=  $d['211180_id_produk'] ?>">
                                    <label class="badge badge-danger">Hapus</label>
                                </a>
                            </td>
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

