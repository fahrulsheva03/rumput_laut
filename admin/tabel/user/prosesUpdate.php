<?php
require '../../koneksi.php';

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nomor_telepon = $_POST['nomor_telepon'];
    
    

    $sql = mysqli_query($koneksi , "UPDATE 211180_pelanggan SET
    211180_nama_pelanggan= '$nama_pelanggan',
    211180_alamat = '$alamat',
    211180_email = '$email',
    211180_password = '$password',
    211180_nomor_telepon = '$nomor_telepon' 
    

    WHERE
    211180_id_pelanggan = $id
    ");

if($sql){
    header('Location:../../user.php ');
}else{
}
}

