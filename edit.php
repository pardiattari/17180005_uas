<?php 
include_once('connection.php');
$id = $_GET['id'];

$data=mysqli_query($connect, "SELECT * FROM tbl_siswa WHERE namasiswa='$id'");
while($datauser=mysqli_fetch_array($data)){
  
  $namasiswa=$datauser['namasiswa'];
  $jekel=$datauser['jekel'];
  $alamat=$datauser['alamat'];
  $hoby=$datauser['hoby'];

}
?>
<form action="update.php" method="POST">
<table width="25%" border="0">
  <tr>
      <td>Nama Siswa</td><td><input type ="text" name="namasiswa" value="<?php echo $namasiswa; ?>" readonly></td>
  </tr>
  <tr>
      <td>Jenis Kelamin</td><td><input type="text" name="jekel" value="<?php echo $jekel; ?>"></td>
  </tr>
  <tr>
      <td>Alamat</td><td><input type ="text" name="alamat" value="<?php echo $alamat; ?>"></td>
  </tr>
  <tr>
      <td>Hoby</td><td><input type ="text" name="hoby" value="<?php echo $hoby; ?>"></td>
  </tr>
  <tr>
      <td>Kelas</td><td><input type ="submit" name="save" value="Save"></td>
  </tr>
</table>
</from>