<?php
// Assuming you have a database connection
include 'koneksi.php';

// Assuming you get the $id_denda from somewhere, like a form submission
$id_denda = $_GET['id'];

// SQL to delete a record from tb_denda
$sql = "DELETE FROM tb_denda WHERE id_denda = $id_denda";

if ($koneksi->query($sql) === TRUE) {
    echo '<script language="javascript" type="text/javascript">
      alert("Data berhasil dihapus!");</script>';
    echo "<meta http-equiv='refresh' content='0; url=denda.php'>";
} else {
    echo "Error deleting record: " . $koneksi->error;
}

// Close the database koneksiection
$koneksi->close();
?>