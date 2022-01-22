<?php
$namasiswa=$_POST['namasiswa'];
$jekel=$_POST['jekel'];
$alamat=$_POST['alamat'];
$hoby=$_POST['hoby'];

include_once("connection.php");
$result = mysqli_query($connect,"INSERT INTO tbl_siswa VALUES ('','$namasiswa','$jekel','$alamat','$hoby')");

 if ($result) {
   echo "<script>alert('Data Successfully');window.location.href='home.php';</script>";
 }
?>