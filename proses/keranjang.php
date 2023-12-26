<?php
require '../koneksi.php';
$id = $_GET['id'];

// Inisialisasi keranjang jika belum ada
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if(!isset($_SESSION['user'])){
	echo " 
	<script>
	alert('Anda Belum Login');
    document.location.href='../login.php';
	</script>
	";
}


 // Periksa apakah produk sudah ada dalam keranjang
 if (isset($_SESSION['cart'][$id])) {
    echo "
    <script>
    alert('Barang sudah ada di keranjang')
    location = '../shop.php'
    </script>
    
    ";
} else {
    // Tambahkan produk ke dalam keranjang
    $_SESSION['cart'][$id] = ($_SESSION['cart'][$id] ?? 0) + 1;
    echo "<script>
    alert('Produk Masuk Ke dalam Keranjang');
    location = '../cart.php'
    </script>";

}



