<?php
// File: koneksi.php
// TUGAS: Menambahkan fitur koneksi ke database

// 1. Definisikan kredensial database (Silakan ganti nilai placeholder ini)
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', ''); 
define('DB_NAME', 'nama_database_anda'); // Ganti dengan nama database Anda

// 2. Buat koneksi ke database menggunakan MySQLi
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// 3. Cek apakah koneksi berhasil
if($link === false){
    // Hentikan program jika koneksi gagal
    die("ERROR: Koneksi database gagal. " . mysqli_connect_error());
} else {
    // Pesan ini hanya untuk penanda berhasil saat testing
    // echo "Koneksi database berhasil dikonfigurasi.";
}

// Variabel $link sekarang siap digunakan untuk query database.
?>
