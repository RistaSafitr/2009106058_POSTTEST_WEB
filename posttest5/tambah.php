<?php
require "config.php";

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $telp = $_POST['telp'];
  $email = $_POST['email'];
  $regisUsername = $_POST['regisUsername'];
  $regisPassword = $_POST['regisPassword'];
  $query = mysqli_query($db,"INSERT INTO users (nama,telp,email,regisUsername,regisPassword) VALUES ('$nama','$telp','$email','$regisUsername','$regisPassword')");
  if($query){
    // header("Location:aboutme.php");
    echo "
      <script>
        alert('Data Berhasil Disimpan!!!');
        location.href = 'login.php';
      </script>
    "; 
  } else {
    echo "
      <script>
        alert('Gagal Menambah Data');
        location.href = 'registrasi.php';
      </script>
    ";
  }
}
?>