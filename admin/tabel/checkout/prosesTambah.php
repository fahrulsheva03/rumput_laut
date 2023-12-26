<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $id_pesanan = $_POST['id_pesanan'];
    $id_produk = $_POST['id_produk'];
    $jumlah = $_POST['jumlah'];
    $harga_satuan = $_POST['harga_satuan'];
    
    

    $sql = mysqli_query($koneksi , "INSERT INTO 211180_checkout SET
    211180_id_pesanan= '$id_pesanan',
    211180_id_produk = '$id_produk',
    211180_produk = '$produk',
    211180_jumlah = '$jumlah',
    211180_harga_satuan = '$harga_satuan'
    
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../checkout.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}