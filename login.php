<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<form action="tampilan.php" method="POST">
<center><h1>Login</h1>
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="Masukkan Nama"></td>
		</tr>
		<tr>
	 		<td>NIM</td>
	 		<td><input type="password" name="nim" placeholder="Masukkan NIM"></td>
	 	</tr>
	 	<tr>
	 		<td><input type="submit" name="login" value="LOGIN"></td>
	 	</tr>
	 </table>
</center>
		</form>

</body>
</html>

<?php
session_start();
//SELECT * FROM db_pendaftaran WHERE 
$login=array(
	"nama"=>"della",
	"nim" =>"6701170047"
);
		if(isset($_POST['login'])){
			$nama = $_POST['nama'];
			$nim = $_POST['nim'];


			if($nama== $login["nama"] && $nim==$login["nim"]){
				$_session['nama']=$nama;
				header("location:tampilan.php");
			}else{
				header("location:tampilan.php");
			}

		}
?>