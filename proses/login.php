<?php
require '../koneksi.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = mysqli_query($koneksi, "SELECT * FROM 211180_pelanggan 
    WHERE 
    211180_email = '$email' AND
    211180_password = '$password'
    ");
    $cek = mysqli_num_rows($sql);
	
    if($cek == 1){
		$data = mysqli_fetch_assoc($sql);
        $_SESSION['user'] = $data;
		$_SESSION['login'] = true;
        echo "
        <script>
        alert('Login Berhasil')
        document.location.href = '../index.php'
        </script>
        ";
    }else{
        echo "
        <script>
        alert('Login Gagal')
        document.location.href = '../login.php'
        </script>
        ";
    }

}
