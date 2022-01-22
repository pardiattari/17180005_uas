<?php
$namasiswa=$_POST['namasiswa'];
$jekel=$_POST['jekel'];
$alamat=$_POST['alamat'];
$hoby=$_POST['hoby'];

include_once('connection.php');
$data = mysqli_query($connect,"UPDATE tbl_siswa SET jekel='$jekel',alamat='$alamat',hoby='$hoby' where namasiswa='$namasiswa'");

 if ($data) {
   echo "<script>alert('Update data successfully');window.location.href='home.php';</script>";
 }
?>