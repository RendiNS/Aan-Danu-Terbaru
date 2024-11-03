<?php
// Koneksi ke database
include 'koneksi.php';

// Mendapatkan data dari form
$hargaDendaBaru = $_POST['denda'];

// Query untuk menyimpan data baru ke dalam tabel
$querySimpan = "INSERT INTO tb_denda (denda) VALUES ('$hargaDendaBaru')";
$resultSimpan = mysqli_query($koneksi, $querySimpan);

// Cek apakah proses simpan berhasil
if ($resultSimpan) {
    echo '<script language="javascript" type="text/javascript">
        alert("Data denda berhasil disimpan.");</script>';
    echo "<meta http-equiv='refresh' content='0; url=denda.php'>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>