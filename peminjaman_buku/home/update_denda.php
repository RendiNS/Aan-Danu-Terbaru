<?php
// Koneksi ke database
include 'koneksi.php';

// Mendapatkan data dari form
$idDenda = $_POST['id_denda'];
$hargaDendaBaru = $_POST['denda'];

// Query untuk melakukan update data pada tabel
$queryUpdate = "UPDATE tb_denda SET denda='$hargaDendaBaru' WHERE id_denda='$idDenda'";
$resultUpdate = mysqli_query($koneksi, $queryUpdate);

// Cek apakah proses update berhasil
if ($resultUpdate) {
    echo '<script language="javascript" type="text/javascript">
        alert("Data denda berhasil diupdate.");</script>';
    echo "<meta http-equiv='refresh' content='0; url=denda.php'>";
} else {
    echo "Gagal mengupdate data: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>