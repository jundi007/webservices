<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['nama_penyewa'])) {
$url = 'https://abdurrobbi007.000webhostapp.com/perpus2.php';
//$data = "[{\"nama_penyewa\":\".$_POST['nama_penyewa'].\",\"judul_buku\":\".$_POST['judul_buku'].\",\"id\":\".$_POST['id'].\"}]";//
$data="{\"nama_penyewa\":\"".$_POST['nama_penyewa']."\",\"judul_buku\":\"".$_POST['judul_buku']."\",\"id\":\"".$_POST['id']."\"}";
echo "datanya ".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="perpus1.php">
<table>
<tr>
<td>Nama Penyewa</td>
<td><input type="text" name="nama_penyewa" id="nama_penyewa"></td>
</tr>
<tr>
<td>Judul Buku</td>
<td><input type="text" name="judul_buku" id="judul_buku"></td>
</tr>
<tr>
<td>ID</td>
<td><input type="text" name="id" id="id"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>