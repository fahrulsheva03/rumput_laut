<?php

require '../../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi , "DELETE FROM 211180_checkout WHERE 211180_id_checkout = $id");

header('Location:../../checkout.php ');