<?php
 session_start();
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 if(($_POST['username']=="") && ($_POST['password']=="") ){
    echo "<script>alert('Username dan Password belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
 } else{
    $users = [
        "Admin" => "pass@admiN1",
        "Anita" => "pass@anitA2",
        "Sapta" => "pass@saptA3",
        "zhaka" => "123"
    ];

    if (array_key_exists($username, $users) && $users[$username] !== $password) {
        echo "<script>alert('Password yang dimasukkan salah')</script>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    } elseif (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['login']=1;
        $_SESSION['username']=$username;
    } else {
        echo "<script>alert('Username tidak terdaftar')</script>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    }

    if((isset($_SESSION['login'])) && ($_SESSION['login']==1)){
      header('location:index.php');
    } else{
      echo "<script>alert('Login Gagal, Silahkan Coba Lagi')</script>";
      echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    }
 }
?>