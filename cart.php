<!doctype html>
<html lang="zxx">
<?php  
require 'koneksi.php';
require 'component/head.php'; 



if(!isset($_SESSION['user'])){
	echo " 
	<script>
	alert('Anda Belum Login');
    document.location.href='login.php';
	</script>
	";
}

if (empty($_SESSION['cart']) OR !isset($_SESSION["cart"]))
{
	echo "<script> alert('Keranjang Kosong');</script>";
	echo "<script> location ='index.php';</script>";
}
 $totalBayar = 0;

?>




<body>
<?php  require 'component/nav.php'; ?>

  <main>
      <!-- Hero Area Start-->
      <div class="slider-area ">
          <div class="single-slider slider-height2 d-flex align-items-center">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12">
                          <div class="hero-cap text-center">
                              <h2>Keranjang</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--================Cart Area =================-->
      <section class="cart_area section_padding">
        <div class="container">
          <div class="cart_inner">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Hapus</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                  </tr>
                </thead>
                <tbody>

                <?php foreach ($_SESSION["cart"] as $product_id => $jumlah):
                
                $sql = mysqli_query($koneksi , "SELECT * FROM 211180_produk WHERE 211180_id_produk = '$product_id'  ");
                $products = mysqli_fetch_assoc($sql);
                // $product = $products[$product_id - 1];

                $totalharga = $products['211180_harga'];
				        $totalBayar += $totalharga;
                ?>
                
                  <tr>
                    <td>
                      <a href="proses/hapus.php?id=<?= $products['211180_id_produk'] ?>">
                        <h6>x</h6>
                      </a>
                    </td>

                    <td>
                      <div class="media">
                        <div class="d-flex">
                          <img src="assets/img/gallery/card1.png" alt="" />
                        </div>
                      </div>
                    </td>

                    <td>
                      <h5><?= $products['211180_nama_produk'] ?></h5>
                    </td>

                    <td>
                      <h5>Rp <?= number_format($products['211180_harga'], 0, ',', '.')  ?></h5>
                    </td>
                  </tr>
                  
                  <?php endforeach ?> 
                  <!-- Space -->
                  <tr class="bottom_button">
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <h4>Total Bayar</h4>
                    </td>
                    <td>
                      <h4>Rp<?= number_format($totalBayar, 0, ',', '.')  ;  ?></h4>
                    </td>
                  </tr>
                
                </tbody>
              </table>
              <div class="checkout_btn_inner float-right">
                <a class="btn_1" href="shop.php">Lanjut Belanja</a>
                <a class="btn_1 checkout_btn_1" href="checkout.php">Proses Ke Checkout</a>
              </div>
            </div>
          </div>
      </section>
      <!--================End Cart Area =================-->
  </main>>
<?php  require 'component/foot.php'; ?>
</body>
</html>

<?php 
// Fungsi untuk menghitung total belanja
function total($products) {
  $total = 0;
  foreach ($_SESSION['cart'] as $product_id => $quantity) {
      // $products = $products[$product_id - 1];
      $total += $quantity * $products['211180_harga'];
  }

  return $total;
}
?>