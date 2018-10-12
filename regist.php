<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<form method="POST" action="tampilan.php">
		<h1> REGISTRASI </h1>

	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" maxlength="35" placeholder="Masukkan Nama" required="Silahkan Isikan Nama Anda"></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td><input type="text" name="nim" maxlength="10" placeholder="Masukkan NIM" required="Silahkan Isikan Nim Anda"></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01<br>
				<input type="radio" name="kelas" value="D3MI-41-02">D3MI-41-02<br>
				<input type="radio" name="kelas" value="D3MI-41-03">D3MI-41-03<br>
				<input type="radio" name="kelas" value="D3MI-41-04">D3MI-41-04<br>
		</td>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki<br>
				<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan<br>
			</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td><input type="checkbox" name="hobi" value="Ngoding">Ngoding<br>
				<input type="checkbox" name="hobi" value="Tidur">Tidur<br>
				<input type="checkbox" name="hobi" value="Jalan">Jalan<br>
				<input type="checkbox" name="hobi" value="Makan">Makan<br>
				<input type="checkbox" name="hobi" value="Olahraga">Olahraga<br>
				<input type="checkbox" name="hobi" value="Nyanyi">Nyanyi<br>
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td><select name="fakultas" id="fakultas">
					<option value="FRI">FRI</option>
  					<option value="FEB">FEB</option>
  					<option value="FIT">FIT</option>
  					<option value="FTE">FTE</option>
  					<option value="FTI">FTI</option>	
  			</select>
  		</tr>
  		<tr>
  			<td>Alamat</td>
  			<td><textarea name="alamat" rows="5" cols="40" placeholder="Masukkan ALamat Sesuai KTP"required="Silahkan Isikan Alamat Anda"></textarea></td>
  		</tr>
  		<td>Submit</td>
  		<td><input type="submit" name="submit" value="SUBMIT">
	</table>
</form>

</body>
</html>

<?php
if (isset($_POST['submit'])) {
   $nama					=$_POST['nama'];
   $nim				     	=$_POST['nim'];
   $kelas				 	=$_POST['kelas'];
   $jeniskelamin	 		=$_POST['jeniskelamin'];
   $fakultas		  	 	=$_POST['fakultas'];
   $hobi			     	=$_POST['hobi'];
   $alamat				 	=$_POST['alamat'];
   $Error = array();

   if (strlen($_POST['nama'])<=35) {
    $error['nama']=="nama harus max 35";

   }if(strlen($_POST['nim'])<=10){
    $error['nim']=="nim max 10";

   }if (empty($kelas)) {
    $error['kelas']=="kelas tidak boleh kosong";

   }if (empty($jeniskelamin)) {
    $error['jeniskelamin']=="jeniskelamin tidak boleh kosong";

   }if (empty($fakultas)) {
    $error['fakultas']=="fakultas tidak boleh kosong";

   }if (empty($hobi)) {
    $error['hobi']=="hobi tidak boleh kosong";

   }if (empty($alamat)) {
    $error['alamat']=="alamat tidak boleh kosong";
}
}

?>