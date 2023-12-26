<?php
require '../koneksi.php';

$id_user = $_SESSION['user']['211180_id_pelanggan'];
$harga = $_GET['harga'];

foreach ($_SESSION['cart'] as $id_rumah => $jumlah) :

    $insert = mysqli_query($koneksi, "INSERT INTO 211180_checkout SET 
    211180_id_pengguna = '$id_user',
    211180_id_produk = '$id_rumah',
    211180_jumlah = '$harga'
    " );
    
    endforeach; 
    
    foreach($_SESSION['cart'] as $id_rumah => $jumlah ) : 
    
        mysqli_query($koneksi, "UPDATE 211180_produk SET 211180_stok = 211180_stok - 1
        WHERE 211180_id_produk = '$id_rumah' ");
        endforeach;

        if($insert){
            echo "
                    <script> 
                    alert('Terimah Kasih ');
                    document.location.href='../index.php';
                    </script>
                    ";
        }