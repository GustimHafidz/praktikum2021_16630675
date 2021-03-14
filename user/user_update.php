<?php
if(isset($_POST['update'])) {
	$id = $_POST['id'];
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jk = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];

	$result = mysqli_query($con, "UPDATE mahasiswa SET nim='$nim', nama='$nama', jk='$jk', alamat='$alamat', email='$email', telepon='$telepon' WHERE id='$id'");

	header("Location:?page=mahasiswa-show");
}
?>