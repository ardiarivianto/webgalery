<?php
session_start();
if($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//En" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WEB GALERI FOTO</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="dashboard.php">WEB GALERI FOTO</a></h1>
            <ul>
                <li><a href="dashboard.php">dashboard</a></li>
                <li><a href="Profil.php">Profil</a></li>
                <li><a href="data-image.php">Data Foto</a></li>
                <li><a href="keluar.php">keluar</a></li>
</ul>
</div>
</header>

<!-- content --> 
<div class="section">
    <div class="container">
        <h3>Dashboard</h3>
        <div class="box">
            <h4>SELAMAT DATANG <?php echo $_SESSION['a_global']->admin_name ?> Di Website Galeri Foto</h4>
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
                                    