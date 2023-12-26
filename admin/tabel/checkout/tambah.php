<!DOCTYPE html>
<html lang="en">

<?php 
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
                  <h4 class="card-title">Form Tambah Data</h4>
                  <p class="card-description">
                    
                  </p>
                  <form  method="POST" action="prosesTambah.php" class="forms-sample">
                    
                    <div class="form-group">
                      <label for="">ID PESANAN</label>
                      <input type="text" name="id_pesanan" class="form-control" id="" 
                      placeholder="ID PESANAN">
                    </div>
                    
                    <div class="form-group">
                      <label for="">ID PRODUK</label>
                      <input type="text" name="id_produk" class="form-control" id="" 
                      placeholder="ID PRODUK">
                    </div>
                    
                    <div class="form-group">
                      <label for="">Jumlah</label>
                      <input type="text" name="jumlah" class="form-control" id="" 
                      placeholder="Jumlah">
                    </div>
                    
                    <div class="form-group">
                      <label for="">Harga satuan</label>
                      <input type="text" name="harga_satuan" class="form-control" id="" 
                      placeholder="Harga satuan">
                    </div>

                  <button type="submit" name="tambah" class="btn btn-primary me-2">Submit</button>
                    
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

