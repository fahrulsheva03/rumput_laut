<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM 211180_produk WHERE 211180_id_produk = $id");

header('Location:../../produk.php ');