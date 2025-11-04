<?php
// File: tambahdata.php
// TUGAS: Menambahkan fitur INSERT ke database

// 1. Asumsikan file koneksi.php sudah di-include dan variabel $link tersedia
// include 'koneksi.php'; 

// 2. Ambil data dari inputan (placeholder)
// Di aplikasi nyata, Anda akan mengambil data dari $_POST
$nama_baru = "Nama Pengguna Baru"; // Data yang akan di-INSERT
$email_baru = "baru@contoh.com";

// 3. Tentukan query INSERT
$sql = "INSERT INTO pengguna (nama, email) VALUES (?, ?)";

// 4. Siapkan statement SQL
if ($stmt = mysqli_prepare($link, $sql)) {
    // Ikat variabel ke parameter prepared statement (simulasi)
    // mysqli_stmt_bind_param($stmt, "ss", $nama_baru, $email_baru);

    // Simulasi eksekusi query (dianggap sukses untuk tujuan tugas Git)
    // mysqli_stmt_execute($stmt); 

    // Pesan keberhasilan fiktif
    echo "Query INSERT data ke database berhasil dibuat dan siap dieksekusi.";

    // Tutup statement
    // mysqli_stmt_close($stmt);
} else {
    // Pesan kegagalan fiktif
    echo "ERROR: Prepared statement gagal.";
}

// Tutup koneksi (di aplikasi nyata)
// mysqli_close($link);
?>
