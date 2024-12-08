<?php
include "database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nim = $_POST['txtnim'];
    $nama = $_POST['txtnama'];
    $alamat = $_POST['txtalamat'];

    // Simpan data ke database
    $db = new Database();
    $sql = "INSERT INTO mahasiswa (nim, nama, alamat) VALUES ('$nim', '$nama', '$alamat')";

    if ($db->query($sql)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $db->conn->error;
    }
} else {
    echo "Invalid Request!";
}
?>
