<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $id_pelanggan = $_POST['id_pelanggan'];
    $tanggal_pesanan = $_POST['tanggal_pesanan'];
    $total_harga = $_POST['total_harga'];
    
    

    $sql = mysqli_query($koneksi , "INSERT INTO 211180_pesanan SET
    211180_id_pelanggan = '$id_pelanggan',
    211180_tanggal_pesanan = '$tanggal_pesanan',
    211180_total_harga = '$total_harga'
    
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../pesanan.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}