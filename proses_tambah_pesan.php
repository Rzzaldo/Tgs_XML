<?php
	
include 'koneksi.php';
$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];

$input="INSERT INTO message(id,nama,email,pesan)values('','$nama','$email','$pesan')";
$data=mysqli_query($konek,$input) or die (mysqli_error($konek));

// die(var_dump($input));

if($data){
	echo "<strong><center>Anda telah berhasi menambahkan data ";
	echo '<META HTTP-EQUIV="REFRESH" CONTENT = "1; URL=contact.php">'; 
}
?>