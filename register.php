<!doctype html>
<html lang="zxx">
<?php 
require 'koneksi.php';
require 'component/head.php'; 

if(isset($_SESSION['login'])){
    echo "
    <script>
    alert('Anda Sudah Login')
    location = 'index.php'
    </script>
    ";
}

?>

<body>
<?php require 'component/nav.php'; ?>

    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Registrasi</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End-->
        <!--================login_part Area =================-->
        <section class="login_part section_padding ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>Sudah Punya Akun ?</h2>
                                <p></p>
                                <a href="login.php" class="btn_3">Login Disini</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Welcome !  <br>
                                    Silahkan Daftarkan Akun Anda</h3>
                                <form class="row contact_form" action="proses/register.php" method="post" >
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control"  name="nama" 
                                            placeholder="Username">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control"  name="alamat" 
                                            placeholder="Alamat">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="text" class="form-control"  name="noHp" 
                                            placeholder="Nomor Handphone">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="email" class="form-control"  name="email" 
                                            placeholder="Gmail">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control"  name="password" 
                                            placeholder="Password">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        
                                        <button type="submit" name="daftar" value="submit" class="btn_3">
                                            Masuk
                                        </button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================login_part end =================-->
    </main>
    <?php require 'component/foot.php'; ?>

</body>
    
</html>