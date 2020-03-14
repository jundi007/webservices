<?php
 
$connect=mysqli_connect("localhost", "id12804784_praktek", "sarahmalika123", "id12804784_praktekkerja");
 
$query = "SELECT * from praktek ";
$result = mysqli_query($connect,$query) or die(mysql_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(
	
    "nama_penyewa" => $row["nama_penyewa"],
    "judul_buku" => $row["judul_buku"], 
    "id" => $row["id"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA MAHASISWA\":" . $data . "}";
?>