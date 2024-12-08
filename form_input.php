<?php
include "form.php";
include "database.php";

$db = new Database(); // Inisialisasi koneksi database
$form = new Form("proses_data.php", "Simpan Data"); // Inisialisasi form

// Tambahkan field ke dalam form
$form->addField("txtnim", "NIM");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");

// Tampilkan form
echo "<h3>Silahkan isi form berikut ini:</h3>";
$form->displayForm();
?>
