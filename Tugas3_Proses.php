<?php
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$wa = $_POST['wa'];
$ig = $_POST['ig'];
$line = $_POST['line'];
echo "
<table width=400 border=1 align=center>
<br>
<br>
<tr>
	<td colspan=3 align=center> BIODATA DIRI</td>
</tr>
<tr>
	<td>Nama</td>
	<td>:</td>
	<td>".$nama."</td>
</tr>
<tr>
	<td>NPM</td>
	<td>:</td>
	<td>".$npm."</td>
</tr>
<tr>
	<td>Tempat dan Tanggal Lahir</td>
	<td>:</td>
	<td>".$ttl."</td>
</tr>
<tr>
	<td>Alamat</td>
	<td>:</td>
	<td>".$alamat."</td>
</tr>
<tr>
	<td>Email</td>
	<td>:</td>
	<td>".$email."</td>
</tr>
<tr>
	<td>Whatsapp</td>
	<td>:</td>
	<td>".$wa."</td>
</tr>
<tr>
	<td>Instagram</td>
	<td>:</td>
	<td>".$ig."</td>
</tr>
<tr>
	<td>Id Line</td>
	<td>:</td>
	<td>".$line."</td>
</tr>
</table>";
?>