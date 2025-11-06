<?php
 session_start();
 ob_start();
 // Mengecek session
 if(empty($_SESSION['username'])){
 echo "<script>alert('Anda harus login terlebih dahulu')</script>";
 echo "<meta http-equiv='refresh' content='0; url=login.php'>";
 } else{

?>
<!DOCTYPE HTML>
<html>
 <head>
 <title>Dashboard</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="assets/style.css">
 </head>
 <body>
 <header>
  <p>Dashboard</p>
  <p>Hi, <?php echo $_SESSION['username']; ?></p>
 </header>
 <div class="container">
 <aside>
 <ul class="menu">
 <li><a href="index.php">Dashboard</a></li>
 <li><a href="makanan-khas.php">Makanan Khas</a></li>
 <li><a href="logout.php">Keluar</a></li>
 </ul>
 </aside>
 <section class="main">
  <center>
    <h3>Anda telah berhasil login.</h3>
  </center>
 </section>
 </div>
 <footer>
 Copyright &copy; 2024
 </footer>
 </body>
</html>
<?php
 }
?>