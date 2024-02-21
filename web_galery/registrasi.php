<?php
include 'db.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtmli-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charshet="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login | WEB GALERI FOTO</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>
    <!-- header --> 
    <header>
        <div class="container">
            <h1><a href="index.php">WEB GALERI FOTO</a></h1>
            <ul>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="registrasi.php">registrasi</a></li>
                <li><a href="login.php">login</a></li>
</ul>
</div>
</header>

<!-- content -->
<div class="section">
    <div class="container">
        <h3>REGISTRASI AKUN</h3>
        <div class="box">
            <form action="" method="post">
                <input type="text" name="nama" placeholder="Nama User" class="input-control" required>
                <input type="text" name="user" placeholder="username" class="input-control" required>
                <input type="text" name="pass" placeholder="password" class="input-control" required>
                <input type="text" name="tlp" placeholder="Nomor Telpon" class="input-control" required>
                <input type="text" name="email" placeholder="E-mail" class="input-control" required>
                <input type="text" name="almt" placeholder="Alamat" class="input-control" required>
                <input type="submit" name="submit" value="submit" class="btn">
</form>
<?php
if(isset($_POST['submit'])){

    $nama = ucwords($_POST['nama']);
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $telpon = $_POST['tlp'];
    $mail = $_POST['email'];
    $alamat = ucwords($_POST['almt']);

    $insert = mysqli_query($conn, "INSERT INTO tb_admin VALUES
    (
        null, 
    '".$nama."',
    '".$username."',
    '".$password."',
    '".$telpon."',
    '".$mail."',
    '".$alamat."')
    ");
    if($insert){
        echo '<script>alert("Registrasi berhasil")</script>';
        echo '<script>window.location="login.php"</script>';
    }else{
        echo 'gagal'  . mysqli_error($conn);
    }
    }
    ?>
    </div>

</div>
</div>
</div>
</div>

<!-- footer -->
<footer>
        <div class="container">
             <small>Copyriht &copy; 2024 - WEB GALERI FOTO.</small>
</div>
</footer>
</body>
</html>