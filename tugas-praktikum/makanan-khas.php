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
    <h1>Daftar Makanan Khas Sulawesi Selatan</h1>
    <table id="food-table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Makanan</th>
              <th>Gambar</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Coto Makassar</td>
              <td>
                <img
                  src="assets/coto-makassar.jpg"
                  alt="Coto Makassar"
                  width="100"
                />
              </td>
              <td>
                Hidangan sup tradisional khas Makassar, terbuat dari daging sapi dan rempah khas.
              </td>
              <td>
                <button class="edit-btn">Edit</button>
                <button class="delete-btn">Hapus</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Pallubasa</td>
              <td>
                <img src="assets/pallubasa.jpg" alt="Pallubasa" width="100" />
              </td>
              <td>
                Makanan khas Makassar, mirip dengan Coto Makassar namun dengan tambahan kelapa parut.
              </td>
              <td>
                <button class="edit-btn">Edit</button>
                <button class="delete-btn">Hapus</button>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>Pisang Ijo</td>
              <td>
                <img src="assets/pisang-ijo.jpg" alt="Pisang Ijo" width="100" />
              </td>
              <td>
                Hidangan penutup berbahan dasar pisang yang dibalut dengan adonan tepung berwarna hijau.
              </td>
              <td>
                <button class="edit-btn">Edit</button>
                <button class="delete-btn">Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>
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