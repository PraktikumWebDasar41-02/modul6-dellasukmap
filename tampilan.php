<?php 
include "conn.php";
if (isset($_POST['submit'])) {
   $nim            =$_POST['nim'];
   $nama           =$_POST['nama'];
   $kelas          =$_POST['kelas'];
   $jeniskelamin   =$_POST['jeniskelamin'];
   $fakultas       =$_POST['fakultas'];
   $hobi           =$_POST['hobi'];
   $alamat         =$_POST['alamat'];

 
 $sql="INSERT INTO t_pendaftaran(nim,nama,kelas,jeniskelamin,fakultas,hobi,alamat) VALUES ('$nim','$nama','$kelas','$jeniskelamin','$fakultas','$hobi','$alamat')";
   if(mysqli_query($con,$sql)){
    echo "Database sudah masuk";
    header ("location : login.php");
   }else{
    echo "Database Gagal";;
   }
}
 ?>