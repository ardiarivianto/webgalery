<?php
error_reporting(0);
include 'db.php';

// Fetch contact information
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 2");
$a = mysqli_fetch_object($kontak);

// Fetch product information
$produk = mysqli_query($conn, "SELECT * FROM tb_image WHERE image_id = '" . $_GET['id'] . "'");
$p = mysqli_fetch_object($produk);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 

<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>WEB Galeri Foto</title> 
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>

<body>
    <header>
        <div class="container">
            <h1><a href="index.php">WEB GALERY FOTO</a></h1>
            <ul>
                <li><a href="galeri.php">galeri</a></li>
                <li><a href="registrasi.php">registrasi</a></li>
                <li><a href="login.php">login</a></li>
            </ul>
        </div>
    </header>
    <!-- search --> 

    <div class="search">
        <div class="container">
            <form action="galeri.php">
                <input type="text" name="search" placeholder="cari foto" value="<?= $_GET['search'] ?>" />
                <input type="hidden" name="kat" value="<?= $_GET['kat'] ?>" />
                <input type="submit" name="cari" value="cari foto" />
            </form>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h3>GALERY FOTO</h3>
            <div class="box">
                <?php
                if($_GET['search'] !='' || $_GET['kat'] !=''){
                    $where = "AND image_name LIKE '%".$_GET['search']."%' AND  category_id LIKE '%".$_GET['kat']."%'";
                }
                $foto = mysqli_query($conn,"SELECT * FROM tb_image WHERE
                image_status = 1 $where ORDER BY image_id DESC");
                if(mysqli_num_rows($foto) > 0){
                    while($p = mysqli_fetch_array($foto)){
                ?>
                <a href="detail-image.php?id=<?php echo $p['image_id']?>">
            <div class="col-4">
                <img src="foto/<?php echo $p['image']?>"height="150px"/>
                <p class="nama"><?php echo substr($p['image_name'],0,30)?></p>
                <p class="harga"><?php echo $p['admin_name'] ?></p>
                <p class="admin">nama : <?php echo $p['admin_name']?></p>
                <p class="nama"><?php echo $p['date_created']?></p>
            </div>
        </a>
        <?php }}else{?>
            <p>foto tidak ada</p>
        <?php } ?>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <small>copyright &copy; 2024 - web galeri foto.</small>
        </div>
    </footer>
</body>
</html>

