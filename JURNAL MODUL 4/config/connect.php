<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$database = mysqli_connect('localhost', 'root', '', 'modul4WAD');

// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$database) {
    die("koneksi gagal: ". mysqli_connect_error());
}
// 
 
?>