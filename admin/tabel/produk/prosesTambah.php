<?php

require '../../koneksi.php';

if(isset($_POST['tambah'])){
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    
    $gambar =  upload();
    if( !$gambar ) {
        return false;
    }

    $sql = mysqli_query($koneksi , "INSERT INTO 211180_produk SET
    211180_nama_produk = '$nama_produk',
    211180_deskripsi = '$deskripsi',
    211180_harga = '$harga',
    211180_stok = '$stok',
    211180_gambar = '$gambar'
    
    ");

    if($sql){
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
        header('Location:../../produk.php ');
    }else{
        echo "
        <script>
        alert('Berhasil Tambah Data')
        </script>
        ";
    }
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFIle = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar yg di upload
    if( $error === 4 ) {
        echo "<script>
            alert('pilih gambar terlrbih dahulu');
            </script>";

        return false;
    }

    // cek apakah yg di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
    //     echo "<script>
    //         alert('bukan gambar yang anda uoload');
    //         </script>";

    //     return false;
    // }

    //cek ukuran file jika besar
    // if ( $ukuranFIle > 2000000 ) {
    //     echo "<script>
    //         alert('ukuran gambar terlalu besar');
    //         </script>";

    //     return false;      
    // }

    //lolos pengecekan, gambar siap upload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.'; 
    $namaFileBaru .= $ekstensiGambar; 

    move_uploaded_file($tmpName, '../../assets/img/' . $namaFileBaru);

    return $namaFileBaru;
}