<?php
if (empty($_POST['nama'])) {
	header("Location:Tugas1_Kosong.php");
}
else {
	echo "Nama :".$_POST['nama']."<br>";
	echo "Email :".$_POST['email']."<br><br>";
	date_default_timezone_set('Asia/Jakarta');
	echo date("m-F-Y, g:i:s a");
}
?>