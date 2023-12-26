<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $tanggal_pesanan = $_POST['tanggal_pesanan'];
    $total_pesanan = $_POST['total_pesanan'];
    $total_harga = $_POST['total_harga'];
    
    

    $sql = mysqli_query($koneksi , "UPDATE 211180_pelanggan SET
    211180_id_pelanggan = '$id_pelanggan',
    211180_tanggal_pesanan = '$tanggal_pesanan',
    211180_total_harga = '$total_harga'
    

    WHERE
    211180_id_pesanan = $id
    ");

if($sql){
    header('Location:../../pesanan.php ');
}else{
}
}

