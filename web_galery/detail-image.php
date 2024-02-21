<?php 
    error_reporting(0);
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 2");
    $a = mysqli_fetch_object($kontak);

    $produk = mysqli_query($conn, "SELECT * FROM tb_image WHERE image_id = '".$_GET['id']."'  ");
    $p = mysqli_fetch_object($produk);

    $komentar = mysqli_query($conn, "SELECT * FROM komentar where id ");
    $k = mysqli_fetch_object($komentar);
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- header -->
    <header>
        <div class="serach">
            <h1><a href="index.php">WEB GALERI FOTO</a></h1>
            <ul>
                <li><a href="galeri.php">Galeri</a></li>
                <li><a href="registrasi.php">Registrasi</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </header>

    <!-- search -->
    <div class="section">
        <div class="container">
            <h3>Detail Foto</h3>
            <div class="box">
                <div class="col-2">
                    <img src="foto/<?php echo $p->image ?>" width="100%" />
                </div>
                    <div class="col-2">
                        <h3><?php echo $p->image_name ?><br />Kategori : <?php echo $p->category_name ?></h3>
                        <h4>Nama User : <?php echo $p->admin_name ?><br />Upload Pada Tanggal : <?php echo $p->date_created ?></h4>
                        <p>Deskripsi :<br />
                                <?php echo $p->image_description ?>
                        </p>
                        <p>komentar :<br />
                        <?php echo $k->komentar ?>
                       
                        </p>
                        <h2>Kolom Komentar</h2>
                            <form action="proses-komentar.php" method="post">
                                <label for="nama">Nama:</label>
                                <input type="text" name="nama" id="nama" required><br>
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" required><br>
                                <label for="komentar">Komentar:</label><br>
                                <textarea name="komentar" id="komentar" rows="4" cols="50" required></textarea><br>
                                <input type="submit" value="Kirim Komentar">
                            </form>
                    </div>
                </div>
            </div>
        </div>

    

        <!-- footer -->
        <footer>
        <div class="container">
                 <small>copyright &copy; 2024 - web galeri foto.</small>       
            </div>
        </footer>
    </div>
</body>
</html>