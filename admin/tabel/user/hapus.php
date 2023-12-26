<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM 211180_pelanggan WHERE 211180_id_pelanggan = $id");

header('Location:../../user.php ');