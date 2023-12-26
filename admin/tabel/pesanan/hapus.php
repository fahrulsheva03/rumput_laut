<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM 211180_pesanan WHERE 211180_id_pesanan = $id");

header('Location:../../pesanan.php ');