<?php
require "config.php";
if(isset($_GET['id'])){
  $query = mysqli_query($db,"DELETE FROM users WHERE id=$_GET[id]");
  if($query){
    header("Location:aboutme.php");
  } else {
    echo "
      <script>
        alert('Gagal Menghapus Data');
        location.href = 'aboutme.php';
      </script>
    ";
  }
}
?>