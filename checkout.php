<!doctype html>
<html lang="zxx">
<?php 
require 'koneksi.php';
require 'component/head.php';

$id_user = $_SESSION['user']['211180_id_pelanggan'];
$query = mysqli_query($koneksi , "SELECT * FROM 211180_pelanggan WHERE  211180_id_pelanggan = '$id_user' ");
$d = mysqli_fetch_assoc($query);
?>


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
                                <h2>Checkout</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================Checkout Area =================-->
        <section class="checkout_area section_padding">
          <div class="container">
          
            <div class="billing_details">
              <div class="row">
                <div class="col-lg-6">
                  <h3>User Details</h3>
                  <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                 
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" id="" readonly name=""  
                      value="<?= $d['211180_nama_pelanggan'] ?>"  placeholder="Nama" />
                    </div>

                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" id="" readonly name="" 
                      value="<?= $d['211180_alamat'] ?>"  placeholder="Alamat" />
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" id="" readonly name="" 
                      value="<?= $d['211180_email'] ?>"  placeholder="Email" />
                    </div>
                    <div class="col-md-12 form-group">
                      <input type="text" class="form-control" id="" readonly name="" 
                      value="<?= $d['211180_nomor_telepon'] ?>"  placeholder=" Nomor Telepon" />
                    </div>

                   
                  
                  </form>
                
                </div>
                <div class="col-lg-6">
                  <div class="order_box">
                    <h2>Your Order</h2>
                    <ul class="list">
                      <li>
                        <a href="#">
                            Nama Produk
                          <span>Harga</span>
                        </a>
                      </li>
                      <?php $totalBayar = 0; ?>
							<?php foreach ($_SESSION["cart"] as $id_pengguna => $jumlah):?>
				<?php
				$ambil= $koneksi->query("SELECT * FROM  211180_produk
					WHERE 211180_id_produk = $id_pengguna ");
				$data=$ambil->fetch_assoc();
				$totalharga = $data['211180_harga'];
				$totalBayar += $totalharga;
				?>
                      <li>
                        <a href="#"><?= $data['211180_nama_produk'] ?>
                          <span class="last">Rp <?= number_format($data['211180_harga'], 0, ',', '.')  ?></span>
                        </a>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                    <ul class="list list_2">
                    
                      <li>
                        <a href="#">Total
                          <span>Rp<?= number_format($totalBayar, 0, ',', '.')  ;  ?></span>
                        </a>
                      </li>
                    </ul>
                   
                    <h5>Metode Pembayaran</h5>
                    <div class="payment_item">
                      <div class="radion_btn">
                        <input type="radio" id="f-option5" name="selector" />
                        <label for="f-option5">Cash</label>
                        <div class="check"></div>
                    </div>
                    </div>
                    <div class="payment_item active">
                    <div class="radion_btn">
                        <input type="radio" id="f-option6" name="selector" />
                        <label for="f-option6">Transfer </label>
                        <img src="assets/img/product/single-product/card.jpg" alt="" />
                        <div class="check"></div>
                    </div>
                    </div>
                    <a class="btn_3" href="proses/checkout.php?harga=<?= $totalBayar; ?>">Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--================End Checkout Area =================-->
    </main>
    <?php require 'component/foot.php'; ?> 
</body>
</html>