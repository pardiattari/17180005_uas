<?php 
$id=$_GET['id'];

include_once('connection.php');
$data = mysqli_query($connect,"DELETE FROM tbl_siswa WHERE namasiswa='$id'");

 if ($data) {
   echo "<script>alert('Delete data successfully');window.location.href='home.php';</script>";
 }
?>