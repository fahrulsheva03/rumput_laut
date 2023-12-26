<?php 

require '../koneksi.php';

if(isset($_POST['daftar'])){
    $nama = $_POST['nama'];
    $noHp = $_POST['noHp'];
    $alamat = $_POST['alamat']; 
    $email = $_POST['email'];
    $password = $_POST['password'];
     

    $sql = mysqli_query($koneksi , "INSERT INTO 211180_pelanggan SET
    211180_nama_pelanggan = '$nama',
    211180_alamat = '$alamat',
    211180_email = '$email',
    211180_nomor_telepon = '$noHp',
    211180_password = '$password'

    ");

if($sql){
    echo "
    <script>
    alert('Berhasil Tambah Data')
    </script>
    ";
    header('Location:../login.php ');
}else{
    echo "
    <script>
    alert('Berhasil Tambah Data')
    </script>
    ";
}
}