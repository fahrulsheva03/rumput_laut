<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nomor_telepon = $_POST['nomor_telepon'];
    
    

    $sql = mysqli_query($koneksi , "INSERT INTO 211180_pelanggan SET
    211180_nama_pelanggan= '$nama_pelanggan',
    211180_alamat = '$alamat',
    211180_email = '$email',
    211180_password = '$password',
    211180_nomor_telepon = '$nomor_telepon'
    
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../user.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}