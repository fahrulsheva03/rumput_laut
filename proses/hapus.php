<?php
require '../koneksi.php';

$id=$_GET["id"];
unset($_SESSION["cart"][$id]);
echo "<script> alert('Produk Terhapus');</script>";
echo "<script> location ='../cart.php';</script>";