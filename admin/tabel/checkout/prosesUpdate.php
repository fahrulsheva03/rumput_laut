<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $id_pesanan = $_POST['id_pesanan'];
    $id_produk = $_POST['id_produk'];
    $jumlah = $_POST['jumlah'];
    $harga_satuan = $_POST['harga_satuan'];

    $sql = mysqli_query($koneksi , "UPDATE 211180_checkout SET
    211180_nama_pelanggan= '$nama_pelanggan',
    211180_alamat = '$alamat',
    211180_email = '$email',
    211180_password = '$password',
    211180_nomor_telepon = '$nomor_telepon' 
    

    WHERE
    211180_id_checkout = $id
    ");

if($sql){
    header('Location:../../checkout.php ');
}else{
}
}

