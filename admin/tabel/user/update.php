<!DOCTYPE html>
<html lang="en">

<?php 
require '../../koneksi.php';
require '../head.php';

?>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <?php require '../nav.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
    <?php require '../side.php'; ?>
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                    <div class="col-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Edit Data</h4>
                  <p class="card-description">
                    
                  </p>
                  <?php 
                    $id = $_GET['id'];
                    $sql = mysqli_query($koneksi , "SELECT * FROM 211180_pelanggan WHERE 211180_id_pelanggan = $id");
                    $d = mysqli_fetch_assoc($sql);
                  ?>
                  <form  method="POST" action="prosesUpdate.php" enctype="multipart/form-data" class="forms-sample">
                    

                  <input type="text" hidden name="id" value="<?= $d['211180_id_pelanggan'] ?>" class="form-control" id="" 
                      placeholder="Nama Produk">

                    <div class="form-group">
                      <label for="">Nama Pelanggan</label>
                      <input type="text" name="nama_pelanggan" value="<?= $d['211180_nama_pelanggan'] ?>" class="form-control" id="" 
                      placeholder="Nama Pelanggan">
                    </div>
                    
                    <div class="form-group">
                      <label for="">Alamat</label>
                      <input type="text" name="alamat" value="<?= $d['211180_alamat'] ?>" class="form-control" id="" 
                      placeholder="Alamat">
                    </div>
                    
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" value="<?= $d['211180_email'] ?>" class="form-control" id="" 
                      placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" name="password" value="<?= $d['211180_password'] ?>" class="form-control" id="" 
                      placeholder="Password">
                    </div>

                    <div class="form-group">
                      <label for="">Nomor Telepon</label>
                      <input type="text" name="nomor_telepon" value="<?= $d['211180_nomor_telepon'] ?>" class="form-control" id="" 
                      placeholder="Nomor Telepon">
                    </div>
                    
                
                    
                    
                    <button type="submit" name="edit" class="btn btn-primary me-2">Edit</button>
                    
                  </form>
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
<?php require '../foot.php'; ?>
</body>

</html>

